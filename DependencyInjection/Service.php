<?php

namespace DesignPatterns\DependecyInjection;

// Define interface for the dependencies, named as service
// Client deals with CommunicationService interface, by ignoring implementation details of each concrete service
// CommunicationService interface allows more services to be added without changing the client code
interface CommunicationService {
  public function send(): void;
}

// Actual implementation for concrete service (client's dependencies)
class Email implements CommunicationService {
  public function send(): void {
    echo "Sending communication via email";
  }
}

// Actual implementation for concrete service (client's dependencies)
class Sms implements CommunicationService {
  public function send(): void {
    echo "Sending communication through sms";
  }
}

// Actual implementation for concrete service (client's dependencies)
class Notice implements CommunicationService {
  public function send(): void {
    echo "Sending communication via internal notice system";
  }
}