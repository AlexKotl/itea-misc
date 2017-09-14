<?php

    include("interfaces/CameraInterface.php");
    include("classes/Camera/Camera.php");
    include("classes/Camera/Digital/Digital.php");

    $digitalCamera = new Camera\Digital();

    $digitalCamera->shot();

?>
