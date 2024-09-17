<?php

namespace DesignPatterns\DependecyInjection;

require_once 'Service.php';

/**
 * With Dependency Injection
 * Communicator class receives an instance of communication service through its constructor or setter method
 */

// Communicator class that depends on a communication service
// Decouple from the concrete implementation of the communication services (e.g Email, Sms, Notice)
class Communicator {
  private $commService;

  // Inject dependencies via constructor
  public function __construct(CommunicationService $service) {
    $this->commService = $service;
  }

  // Inject dependencies via setter
  public function setCommunicationService(CommunicationService $service) {
    $this->commService = $service;
  }

  public function sendCommunication() {
    $this->commService->send();
  }
}

/**
 * Client code
 */

// Use the Communicator class with different services injected
echo "Communication via email service: \n";
$communicator = new Communicator(new Email());
$communicator->sendCommunication();
echo "\n\n";

// Switching to other communication service without modifying Communicator class
echo "Communication via sms service: \n";
$communicator->setCommunicationService(new Sms());
$communicator->sendCommunication();
echo "\n\n";

echo "Communication via internal notice service \n";
$communicator->setCommunicationService(new Notice());
$communicator->sendCommunication();
echo "\n\n";