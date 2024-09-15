<?php

namespace DesignPatterns\CommandPattern;

// Concrete command class that defines binding with receiver object
// And encapsulates file backup
class FileBackup implements Runnable {
  private $service;

  public function __construct(BackupService $service) {
    $this->service = $service;
  }

  public function perform() {
    $this->service->backupFiles();
  }
}