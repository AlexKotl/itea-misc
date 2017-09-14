<?php

    abstract class Camera implements CameraInterface {

        protected $aperture;
        protected $shutter;
        protected $shots;

        abstract public function shot();
        abstract public function displayShots();

        public function setAperture($aperture) {

            $this->aperture = $aperture;

        }

        public function setShutter($shutter) {

            $this->shutter = $shutter;

        }

    }

?>
