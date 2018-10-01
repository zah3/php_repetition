<?php
/*
 * it's not good practise to write 2 classes in same file
 * but it's made for better see current example of usage
 */
/**
 * Created by PhpStorm.
 * User: zachariasz
 * Date: 2018-10-01
 * Time: 20:48
 */

class vehicle {

    public function __construct(){
        echo "I'm a vehicle<br>";
    }
}

class car extends vehicle {

    public function __construct(){
        echo "I'm a car!<br>";
    }
}

class tank extends vehicle {
    public function __construct(){
        parent::__construct();
        echo "and I'm also tank!<br>";
    }
}
echo 'making vehicle<br>';
$vehicle = new vehicle();
echo 'making a car<br>';
$car = new car();
echo 'making a tank<br>';
$tank = new tank();
