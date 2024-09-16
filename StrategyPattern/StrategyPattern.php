<?php

// The strategy interface defines a common action (send method) that shares among concrete strategy classes 
interface CommunicationMethod {
  public function send(): void;
}

// Implement concrete strategy classes
// Each concrete strategy class implements the CommunicationMethod interface with a specific communication method
class Email implements CommunicationMethod {
  public function send(): void {
    echo "Sending communication via email";
  }
}

class Sms implements CommunicationMethod {
  public function send(): void {
    echo "Sending communication through sms";
  }
}

class Notice implements CommunicationMethod {
  public function send(): void {
    echo "Sending communication via internal notice system";
  }
}

// Create context class that stores a reference to a CommunicationMethod object
// And, delegates the communication action to the chosen communication method 
class Communicator {
  private $commMethod;

  public function __construct(CommunicationMethod $method) {
    $this->commMethod = $method;
  }

  public function setCommunicationMethod(CommunicationMethod $method) {
    $this->commMethod = $method;
  }

  public function send() {
    $this->commMethod->send();
  }
}

// Use the strategy pattern in client code
echo "Testing Concrete Strategy Email: \n";
$communicator = new Communicator(new Email());
$communicator->send();
echo "\n\n";

// Switching to other communication method
echo "Testing Concrete Strategy Sms: \n";
$communicator->setCommunicationMethod(new Sms());
$communicator->send();
echo "\n\n";

echo "Testing Concrete Strategy Notice: \n";
$communicator->setCommunicationMethod(new Notice());
$communicator->send();
echo "\n\n";