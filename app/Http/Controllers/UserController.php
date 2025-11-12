<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
         return User::with('csoportok')->get();
    }

    /**
     * Store a newly created resource in storage.
     */
   // EZ VOLT A ROSSZ - ez volt bejelentkezésre
// EZ A JÓ - felhasználó létrehozásra
public function store(Request $request)
{
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|min:8',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'message' => 'Validation failed',
            'errors' => $validator->errors()
        ], 422);
    }

    try {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'jogosultsagi_szint' => $request->jogosultsagi_szint ?? 'felhasznalo',
            'password_changed' => false,
        ]);

        return response()->json($user->load('csoportok'), 201);

    } catch (\Exception $e) {
        return response()->json([
            'message' => 'User creation failed',
            'error' => $e->getMessage()
        ], 500);
    }
}


    /**
     * Display the specified resource.
     */
  public function show(string $id)
{
    $user = User::findOrFail($id);
    return $user->load('csoportok');
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $user = User::findOrFail($id);

    $validated = $request->validate([
        'name' => 'sometimes|string|max:255',
        'email' => 'sometimes|email|unique:users,email,' . $id,
    ]);

    $user->update($validated);

    return response()->json($user);
}




    /**
     * Remove the specified resource from storage.
     */


public function getUser(Request $request)
{
    try {
        $user = $request->user();
        
        if (!$user) {
            return response()->json(['message' => 'Unauthenticated'], 401);
        }

        // Csoportok betöltése
        $user->load('csoportok');

        return response()->json($user);
        
    } catch (\Exception $e) {
        \Log::error('getUser error: ' . $e->getMessage());
        return response()->json(['error' => $e->getMessage()], 500);
    }
}

public function changePasswordFirst(Request $request)
    {
        // Validáció
        $validator = Validator::make($request->all(), [
            'newPassword' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'A jelszónak legalább 8 karakter hosszúnak kell lennie.',
                'errors' => $validator->errors()
            ], 400);
        }

        try {
            // Bejelentkezett felhasználó
            $user = $request->user();

            // Jelszó frissítése
            $user->password = Hash::make($request->newPassword);
            $user->password_changed = true;
            $user->save();

            return response()->json([
                'success' => true,
                'message' => 'Jelszó sikeresen megváltoztatva!'
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Hiba történt a jelszó változtatása során.',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    
    
    //nem alap lekérdezések
    public function updatePassword(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            "password" => 'string|min:3|max:50'
        ]);
        if ($validator->fails()) {
            return response()->json(["message" => $validator->errors()->all()], 400);
        }
        $user = User::where("id", $id)->update([
            "password" => Hash::make($request->password),
        ]);

        return response()->json(["user" => $user]);
    }

    function userLendings(){
        $user=Auth::user();
        return User::with('userandlendingsdata')
        ->where('id','=', $user->id)
        ->get();
    }

    public function usersWithReservations(){
        return User::with('usersAndReservations')
        ->get();
    }
    
    //Bejelentkezés
public function login(Request $request)
{
    $validator = Validator::make($request->all(), [
        'email' => 'required|email',
        'password' => 'required|string',
    ]);

    if ($validator->fails()) {
        return response()->json(['errors' => $validator->errors()], 422);
    }

    if (!Auth::attempt($request->only('email', 'password'))) {
        return response()->json(['message' => 'Hibás bejelentkezési adatok'], 401);
    }

    $user = Auth::user()->load('csoportok'); // Fontos: töltsük be a kapcsolt csoportokat is!

    return response()->json([
        'message' => 'Sikeres bejelentkezés!',
        'user' => $user, // Itt most az egész felhasználót visszaadjuk, benne a csoportokkal
        'token' => $user->createToken('auth_token')->plainTextToken,
    ]);
}



public function currentUser(Request $request)
{
    return $request->user()->load(['csoportok' => function($query) {
        $query->select('csoportoks.id', 'csoportoks.nev');
    }]);
}

    //Profil megtekintés
    public function profile()
    {
        $user = Auth::user();

        if (!$user) {
            return response()->json(['message' => 'Nem vagy bejelentkezve.'], 401);
        }
        
        return response()->json([
            'message' => 'Sikeres lekérés.',
            'user' => $user,
        ]);
    }

public function updateCsoportok(Request $request, $id)  // ⬅️ Így kell!
{
    try {
        // Manuálisan töltjük be a user-t
        $user = User::findOrFail($id);
        
        $validated = $request->validate([
            'csoportok' => 'required|array',
            'csoportok.*' => 'exists:csoportoks,id'
        ]);
        
        // Először töröljük az összes kapcsolatot
        $user->csoportok()->detach();
        
        // Aztán hozzáadjuk az újakat
        if (!empty($validated['csoportok'])) {
            $user->csoportok()->attach($validated['csoportok']);
        }
        
        return response()->json($user->load('csoportok'), 200);
        
    } catch (\Exception $e) {
        \Log::error('updateCsoportok error: ' . $e->getMessage());
        return response()->json([
            'message' => 'Failed to update groups',
            'error' => $e->getMessage()
        ], 500);
    }
}

// AuthController.php vagy UserController.php
public function me(Request $request)
{
    $user = auth()->user()->load('csoportok'); // Ezzel betöltjük a kapcsolódó csoportokat is

    return response()->json([
        'user' => $user,
    ]);
}



}