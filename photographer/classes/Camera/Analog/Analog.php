<?php

    namespace Camera;

    class Analog extends \Camera {

        public function shot() {
            echo "Shot was taken. " . PHP_EOL;
        }

        public function displayShots() {
            echo "Opening film...";

            throw new \Exception("You've light a film!!! Never open it on the light.");
        }

    }

?>
