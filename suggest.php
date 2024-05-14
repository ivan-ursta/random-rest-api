<?php

require_once 'ActivityProviderInterface.php';
require_once 'BoredApiActivityProvider.php';
require_once 'OutputHandlerInterface.php';
require_once 'FileOutputHandler.php';
require_once 'ConsoleOutputHandler.php';
require_once 'ActivityAdvisor.php';

// Usage
$participants = isset($argv[1]) ? (int)$argv[1] : '';
$type = isset($argv[2]) ? $argv[2] : "";
$sender = isset($argv[3]) ? $argv[3] : "console";

$validTypes = ["education", "recreational", "social", "diy", "charity", "cooking", "relaxation", "music", "busywork"];
if (!in_array($type, $validTypes)) {
    die("Invalid type. Valid types are: " . implode(", ", $validTypes) . "\n");
}

$validSenders = ["file", "console"];
if (!in_array($sender, $validSenders)) {
    die("Invalid sender. Valid senders are: " . implode(", ", $validSenders) . "\n");
}

$activityProvider = new BoredApiActivityProvider();
$outputHandler = $sender === "file" ? new FileOutputHandler() : new ConsoleOutputHandler();

$activityAdvisor = new ActivityAdvisor($activityProvider, $outputHandler);
$activityAdvisor->getAndOutputActivity($participants, $type);
