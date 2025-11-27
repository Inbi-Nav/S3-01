<?php

class OlympicGamesStorage {
    private array $athletes = [];
    private array $events = [];
    private array $results = [];

    public function storeAthlete(array $athlete): void {
        $this->athletes[] = $athlete;
    }

    public function storeEvent(array $event): void {
        $this->events[] = $event;
    }

    public function storeResult(array $result): void {
        $this->results[] = $result;
    }

    public function getAll(): array {
        return [
            'athletes' => $this->athletes,
            'events'   => $this->events,
            'results'  => $this->results
        ];
    }
}
