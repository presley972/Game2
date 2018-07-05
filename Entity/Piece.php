<?php
/**
 * Created by PhpStorm.
 * User: presleylupon
 * Date: 04/07/2018
 * Time: 15:25
 */

namespace Entity;


abstract class Piece
{
    public function display()
    {
        echo get_class($this);
    }

}