<?php

require_once 'BackupService.php';
require_once 'BackupScheduler.php';
require_once 'DatabaseBackup.php';
require_once 'FileBackup.php';
require_once 'LogBackup.php';

use DesignPatterns\CommandPattern\BackupService;
use DesignPatterns\CommandPattern\BackupScheduler;
use DesignPatterns\CommandPattern\DatabaseBackup;
use DesignPatterns\CommandPattern\LogBackup;
use DesignPatterns\CommandPattern\FileBackup;

// Client code
$backupService = new BackupService();
$scheduler = new BackupScheduler();

// Schedule backups
$scheduler->scheduleJob(new DatabaseBackup($backupService));
$scheduler->scheduleJob(new FileBackup($backupService));
$scheduler->scheduleJob(new LogBackup($backupService));

// Execute all types of backup
$scheduler->runJobs();
