<?php
/**
 * Created by PhpStorm.
 * User: presleylupon
 * Date: 05/07/2018
 * Time: 09:58
 */

namespace Entity;


use Throwable;

class BoardOutOfBoundariesException extends \LogicException
{
    public function __construct(int $row, int $col, int $size)
    {
        parent::__construct('Unable to access cell '.$row.' '.$col.' '.$size );
    }
}