<?php

namespace DesignPatterns\CommandPattern;

// Declare command interface for executing an operation
// Define a common method that all backup jobs (concrete commands) must implement
interface Runnable {
  public function perform();
}