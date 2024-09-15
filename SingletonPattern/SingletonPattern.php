<?php

namespace DesignPatterns\SingletonPattern;

class ConfigurationManager {

  // Store the single instance of ConfigurationManager
  private static $instance = null;

  private $config = [];

  // Private constructor to prevent instantiation of new instances outside the class 
  private function __construct() {
    $this->config = $this->loadConfig();
  }

  // Static method to get the single instance of ConfigurationManager
  public static function getInstance() {
    if (self::$instance === null) {
      self::$instance = new ConfigurationManager();
    }
    return self::$instance;
  }

  // Load configuration data (could be from a file, environment, etc)
  private function loadConfig() {
    return [
      'db_host' => getenv('DB_HOST') ?: 'localhost',
      'db_name' => getenv('DB_NAME') ?: 'my_database',
      'api_key' => getenv('API_KEY') ?: 'default_api_key',
      'cache_enabled' => true,
    ];
  }

  public function get($key, $default = null) {
    return isset($this->config[$key]) ? $this->config[$key] : $default;
  }
}