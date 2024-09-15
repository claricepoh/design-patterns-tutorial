<?php

namespace DesignPatterns\CommandPattern;

// Invoker class that stores command objects and execute them
class BackupScheduler {
  private $jobs = [];

  // Add a job (command object)
  public function scheduleJob(Runnable $job) {
    $this->jobs[] = $job;
  }

  // Exceute all jobs
  public function runJobs() {
    foreach ($this->jobs as $job) {
        $job->perform();
    }
  }
}