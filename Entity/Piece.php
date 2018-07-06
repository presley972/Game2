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
    private $number;

    public function __construct(int $pieceNumber)
    {
        $this->number = $pieceNumber;
    }

    public function display()
    {
        echo get_class($this);
    }

    public function getNumber(): int
    {
        return $this->number;
    }

}