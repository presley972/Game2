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
    /**
     * BlackCell constructor.
     */


    public function moveto(Piece $piece) :void
    {
        // TODO: Implement moveto() method.
        if( $this->piece == null ){

            throw new \LogicException('désolé pas ici!');
        }
        $this->piece = $piece;
    }
}