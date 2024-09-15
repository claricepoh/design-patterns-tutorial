<?php

namespace DesignPatterns\CommandPattern;

require_once 'Runnable.php';

// Concrete command class that defines the binding with receiver object
// And encapsulates database backup
class DatabaseBackup implements Runnable {
  private $service;

  public function __construct(BackupService $service) {
    $this->service = $service;
  }

  public function perform() {
    $this->service->backupDatabase();
  }
}