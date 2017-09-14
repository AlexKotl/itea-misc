<?php

    interface CameraInterface
    {
        public function shot();
        public function setAperture($aperture);
        public function setShutter($shutter);
        public function displayShots();
    }

?>
