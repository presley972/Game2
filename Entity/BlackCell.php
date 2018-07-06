<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: presleylupon
 * Date: 05/07/2018
 * Time: 16:27
 */

namespace Entity;

class BlackCell extends Cell
{
    private $piece = null;

    public function moveto(Piece $piece): Cell
    {
        if( $this->piece !== null ){
            throw new ErrorPlacing($this->row, $this->col);
        }
        $this->piece = $piece;
        return $this;
    }
    public function getPresence(): int
    {
        return (int) ($this->piece !== null);
    }
}