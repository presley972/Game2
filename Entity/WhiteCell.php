<?php
/**
 * Created by PhpStorm.
 * User: presleylupon
 * Date: 05/07/2018
 * Time: 16:27
 */

namespace Entity;


class WhiteCell extends Cell
{
    public function moveto(Piece $piece): Cell
    {
        throw new ErrorPlacing($this->row, $this->col);
    }
    public function getPresence(): int
    {
        return 0;
    }
}