<?php

    namespace Camera;

    class Digital extends \Camera {

        public function shot() {
            echo "Shot was taken. " . PHP_EOL;
        }

        public function displayShots() {
            echo "Loading shots...";
        }

    }

?>
