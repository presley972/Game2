<?php
/**
 * Created by PhpStorm.
 * User: presleylupon
 * Date: 06/07/2018
 * Time: 09:49
 */

namespace Entity;


use Throwable;

class ErrorPlacing extends \LogicException
{
    public function __construct(int $row, int $col)
    {
        parent:: __construct('désolé pas ici! '.$row.' '. $col);
    }
}