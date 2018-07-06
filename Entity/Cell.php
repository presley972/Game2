<?php
/**
 * Created by PhpStorm.
 * User: presleylupon
 * Date: 05/07/2018
 * Time: 16:30
 */

namespace Entity;


abstract class Cell
{
    /**
     * @var int
     */
    protected $row;
    /**
     * @var int
     */
    protected $col;

    public abstract function moveto(Piece $piece): Cell;

    public function __construct(int $row, int $col)
    {

        $this->row = $row;
        $this->col = $col;
    }

    /**
     * @return string
     */
    public function getCoordinate(): string
    {
        return $this->row.', '.$this->col;
    }

    /**
     * @return int
     */
    public function getRow(): int
    {
        return $this->row;
    }

    /**
     * @return int
     */
    public function getCol(): int
    {
        return $this->col;
    }

    public abstract function getPresence():int;
}