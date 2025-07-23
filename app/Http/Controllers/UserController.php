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
    public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users',
        'password' => 'required|string|min:6',
    ]);

    $user = new User();
    $user->name = $validated['name'];
    $user->email = $validated['email'];
    $user->password = Hash::make($validated['password']);
    $user->save();

    return response()->json($user, 201);
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
    public function destroy(string $id)
    {
        User::find($id)->delete();
    }

  public function getUser() {
    $user = Auth::user()->load('csoportok');
    return response()->json($user);
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

    // UserController-hez add hozzá ezt a metódust
public function updateCsoportok(Request $request, User $user)
{
    $request->validate([
        'csoportok' => 'required|array',
        'csoportok.*' => 'exists:csoportoks,id'
    ]);
    
    $user->csoportok()->sync($request->csoportok);
    
    return $user->load('csoportok');
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