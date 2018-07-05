<?php
/**
 * Created by PhpStorm.
 * User: presleylupon
 * Date: 04/07/2018
 * Time: 15:07
 */

namespace Entity;


class Pion extends Piece
{
    public function display(){
        parent::display();
        echo ' class pion ';
    }
}