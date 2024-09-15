<?php

require_once 'SingletonPattern.php';

use DesignPatterns\SingletonPattern\ConfigurationManager;

// Get the singleton instance
$configMgr = ConfigurationManager::getInstance();
$anotherConfigMgr = ConfigurationManager::getInstance();

// Access config settings
$dbHost = $configMgr->get('db_host');
$dbName = $configMgr->get('db_name');

echo "Database host: ".$dbHost."\n";
echo "Database name: ".$dbName."\n";

// Both $configMgr and $anotherConfigMgr are the same instance
var_dump($configMgr === $anotherConfigMgr);
