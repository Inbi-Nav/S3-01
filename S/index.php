<?php

require_once 'OlympicGamesStorage.php';
require_once 'OlympicGamesProcessor.php';
require_once 'OlympicGamesResultPrinter.php';

$storage = new OlympicGamesStorage();
$processor = new OlympicGamesProcessor($storage);
$printer = new OlympicGamesResultPrinter($storage);

$athletesData = [
    ['name' => 'Usain Bolt', 'country' => 'Jamaica'],
    ['name' => 'Michael Phelps', 'country' => 'USA']
];

$eventsData = [
    ['event' => '100m Sprint', 'date' => '2024-08-01'],
    ['event' => 'Swimming', 'date' => '2024-08-02']
];

$resultsData = [
    ['athlete' => 'Usain Bolt', 'event' => '100m Sprint', 'medal' => 'Gold'],
    ['athlete' => 'Michael Phelps', 'event' => 'Swimming', 'medal' => 'Gold']
];

$processor->processOlympicData($athletesData, $eventsData, $resultsData);

$printer->printResults();
