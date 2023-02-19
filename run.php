<?php

include 'vendor/autoload.php';


$filePath = 'log.txt';
$logger = new Logger\Logger($filePath);

$logger->info("Info message");
$logger->alert("Alert message");
$logger->error("Error message");
$logger->debug("Debug message");
$logger->notice("Notice message");
$logger->warning("Warning message");
$logger->critical("Critical message");
$logger->emergency("Emergency message");

