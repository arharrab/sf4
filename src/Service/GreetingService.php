<?php

namespace App\Service;

use Psr\Log\LoggerInterface;

class GreetingService {

  private $logger;

  public function __construct(LoggerInterface $logger)
  {
    $this->logger = $logger;
  }


  public function greet(string $name = "Customer"): string {
    $this->logger->info("greeting $name");
    return "Bonjour M. $name";
  }

}
