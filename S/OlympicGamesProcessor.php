<?php

class OlympicGamesProcessor {

    private OlympicGamesStorage $storage;

    public function __construct(OlympicGamesStorage $storage) {
        $this->storage = $storage;
    }

    public function processOlympicData(array $athleteData, array $eventsData, array $resultsData): void {

        foreach ($athleteData as $athlete) {
            $this->storage->storeAthlete([
                'name'    => $athlete['name'],
                'country' => $athlete['country']
            ]);
        }

        foreach ($eventsData as $event) {
            $this->storage->storeEvent([
                'event' => $event['event'],
                'date'  => $event['date']
            ]);
        }

        foreach ($resultsData as $result) {
            $this->storage->storeResult([
                'athlete' => $result['athlete'],
                'event'   => $result['event'],
                'medal'   => $result['medal']
            ]);
        }
    }
}
