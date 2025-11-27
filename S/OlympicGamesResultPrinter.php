<?php

class OlympicGamesResultPrinter {

    private OlympicGamesStorage $storage;

    public function __construct(OlympicGamesStorage $storage) {
        $this->storage = $storage;
    }

    public function printResults(): void {
        $data = $this->storage->getAll();

        echo "Olympic Games Results:\n";

        foreach ($data['events'] as $event) {
            echo "Event: {$event['event']} on {$event['date']}\n";

            foreach ($data['results'] as $result) {
                if ($result['event'] === $event['event']) {

                    $country = '';
                    foreach ($data['athletes'] as $athlete) {
                        if ($athlete['name'] === $result['athlete']) {
                            $country = $athlete['country'];
                            break;
                        }
                    }

                    echo "- {$result['athlete']} from {$country} won {$result['medal']}\n";
                }
            }
        }
    }
}
