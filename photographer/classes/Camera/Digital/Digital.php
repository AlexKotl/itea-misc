<?php

    namespace Camera;

    class Digital extends \Camera {

        public function __construct() {
            $this->setAperture("auto");
            $this->setShutter("auto");
        }

        public function shot() {
            $this->shots[] = md5(rand());
            echo "Shot was taken: Aperture {$this->aperture}, Shutter {$this->shutter} " . PHP_EOL;
        }

        public function displayShots() {
            echo "Displaying shots..." . PHP_EOL;

            foreach ($this->shots as $value) {
                echo " - Photo: {$value}" . PHP_EOL;
            }
        }

    }

?>
