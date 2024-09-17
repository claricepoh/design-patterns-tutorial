<?php

namespace DesignPatterns\DependecyInjection;

require_once 'Service.php';

/**
 * Without Dependency Injection 
 */

// Communicator class that depends on a communication service
class Communicator {
  private $commService;

  public function __construct() {
    // The service is instantiated inside constructor
    // Introduction of hard dependency that makes testing difficult
    // Communicator class is very tighly coupled to the Email service.
    // And, other services cannot be used without modifying Communicator class 
    $this->commService = new Email();
  }

  public function sendCommunication() {
    $this->commService->send();
  }
}

/**
 * Client code
 */
echo "Communication via email service: \n";
$communicator = new Communicator();
$communicator->sendCommunication();
echo "\n\n";
