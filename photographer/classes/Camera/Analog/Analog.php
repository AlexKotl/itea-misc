<?php

    namespace Camera;

    class Analog extends \Camera {

        public function shot() {
            $this->setAperture(rand(14,160) / 10);
            $this->setShutter(rand(1,40) * 10);

            $this->shots[] = md5(rand());
            echo "Shot was taken: Aperture {$this->aperture}, Shutter {$this->shutter} " . PHP_EOL;
        }

        public function setAperture($aperture) {
            // sometimes hardware failed to work
            if (rand() % 7 === 0) {
                throw new \Exception("Cannot set aperture");
            }
            else {
                $this->aperture = $aperture;
            }


        }

        public function displayShots() {
            echo "Opening film... ";

            throw new \Exception("You've light a film!!! Never open it on the light.");
        }

    }

?>
