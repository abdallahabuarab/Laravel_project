<?php

use Faker\Core\Number;

class  Car {
    public static $name = "BMW";



}

class BMW extends Car {

    public static $name = "New BMW";

    public  function getName($name) : Car
    {
        return $name;
    }


}


class Btata  {

    public static $name = "New Btata";


}

$carObj = new Btata();
$car = new BMW();



print_r(($car->getName($car)));
