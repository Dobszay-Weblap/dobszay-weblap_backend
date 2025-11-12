<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class BackupController extends Controller
{
    public function create()
    {
        try {
            Artisan::call('db:backup');
            $output = Artisan::output();
            
            return response()->json([
                'success' => true,
                'message' => 'Backup sikeresen létrehozva!',
                'output' => $output
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Hiba történt: ' . $e->getMessage()
            ], 500);
        }
    }
    
    public function list()
    {
        $backupDir = storage_path('app/backups');
        
        if (!file_exists($backupDir)) {
            return response()->json([]);
        }
        
        $files = glob($backupDir . '/*.sql');
        $backups = [];
        
        foreach ($files as $file) {
            $backups[] = [
                'filename' => basename($file),
                'size' => filesize($file),
                'size_mb' => round(filesize($file) / 1024 / 1024, 2),
                'date' => date('Y-m-d H:i:s', filemtime($file)),
                'timestamp' => filemtime($file),
            ];
        }
        
        // Dátum szerint csökkenő sorrendben
        usort($backups, function($a, $b) {
            return $b['timestamp'] - $a['timestamp'];
        });
        
        return response()->json($backups);
    }
    
    public function download($filename)
    {
        // Biztonsági ellenőrzés: csak .sql fájlok
        if (!preg_match('/^backup-[\d-]+\.sql$/', $filename)) {
            return response()->json(['error' => 'Invalid filename'], 400);
        }
        
        $path = storage_path('app/backups/' . $filename);
        
        if (!file_exists($path)) {
            return response()->json(['error' => 'File not found'], 404);
        }
        
        return response()->download($path);
    }
    
    public function delete($filename)
    {
        // Biztonsági ellenőrzés
        if (!preg_match('/^backup-[\d-]+\.sql$/', $filename)) {
            return response()->json(['error' => 'Invalid filename'], 400);
        }
        
        $path = storage_path('app/backups/' . $filename);
        
        if (!file_exists($path)) {
            return response()->json(['error' => 'File not found'], 404);
        }
        
        unlink($path);
        
        return response()->json([
            'success' => true,
            'message' => 'Backup törölve: ' . $filename
        ]);
    }
}