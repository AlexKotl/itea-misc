<?php

    include("interfaces/CameraInterface.php");
    include("classes/Camera/Camera.php");
    include("classes/Camera/Digital/Digital.php");
    include("classes/Camera/Analog/Analog.php");

    $digitalCamera = new Camera\Digital();
    $analogCamera = new Camera\Analog();

    // test digital camera
    echo "Photographer with DIGITAL camera taking shots: " . PHP_EOL;

    for ($i = 1; $i <= 20; $i++) {
        $digitalCamera->shot();
    }

    $digitalCamera->displayShots();

    echo PHP_EOL . PHP_EOL;

    // test analog camera
    echo "Photographer with ANALOG camera taking shots: " . PHP_EOL;

    for ($i = 1; $i <= 20; $i++) {
        try {
            $analogCamera->shot();
        }
        catch (Exception $e) {
            echo "Fail: {$e->getMessage()}" . PHP_EOL;
        }
    }

    try {
        $analogCamera->displayShots();
    }
    catch (Exception $e) {
        echo "Fail: {$e->getMessage()}" . PHP_EOL;
    }

?>
