<?php

namespace DesignPatterns\CommandPattern;

// Receiver class contains actual logics to perform backup operations
class BackupService {
  public function backupDatabase() {
    echo "Database backup completed.\n";
  }

  public function backupFiles() { 
    echo "Files backup completed.\n";
  }

  public function backupLogs() { 
    echo "Logs backup completed.\n";
  }
}