<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DatabaseBackup extends Command
{
    protected $signature = 'db:backup';
    protected $description = 'Create a database backup';

    public function handle()
    {
        $database = env('DB_DATABASE');
        $username = env('DB_USERNAME');
        $password = env('DB_PASSWORD');
        $host = env('DB_HOST');
        
        $filename = 'backup-' . date('Y-m-d-His') . '.sql';
        $backupDir = storage_path('app/backups');
        
        // Készíts könyvtárat ha nem létezik
        if (!file_exists($backupDir)) {
            mkdir($backupDir, 0755, true);
        }
        
        $path = $backupDir . '/' . $filename;
        
        // MySQL backup parancs
        $command = sprintf(
            'mysqldump --user=%s --password=%s --host=%s %s > %s',
            escapeshellarg($username),
            escapeshellarg($password),
            escapeshellarg($host),
            escapeshellarg($database),
            escapeshellarg($path)
        );
        
        exec($command, $output, $return);
        
        if ($return === 0) {
            $this->info('✅ Backup sikeresen elkészítve: ' . $filename);
            $this->info('📂 Mentve ide: ' . $path);
            
            // Régi backupok törlése (30 napnál régebbiek)
            $this->cleanOldBackups($backupDir);
        } else {
            $this->error('❌ Backup sikertelen!');
        }
        
        return $return;
    }
    
    private function cleanOldBackups($backupDir)
    {
        $files = glob($backupDir . '/*.sql');
        $now = time();
        $deleted = 0;
        
        foreach ($files as $file) {
            if (is_file($file)) {
                // 30 napnál régebbi fájlok törlése
                if ($now - filemtime($file) >= 30 * 24 * 3600) {
                    unlink($file);
                    $deleted++;
                }
            }
        }
        
        if ($deleted > 0) {
            $this->info("🗑️ {$deleted} régi backup törölve (30 napnál régebbiek)");
        }
    }
}