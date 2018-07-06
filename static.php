<?php
/**
 * Created by PhpStorm.
 * User: presleylupon
 * Date: 05/07/2018
 * Time: 10:15
 */

class Test {

    public static $counter = 0;

    public function __construct()
    {
        self::$counter++;
    }
}

for ($i=0; $i<rand(10, 200); $i++){

new Test();
}


echo Test::$counter;

