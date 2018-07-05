<?php
/**
 * Created by PhpStorm.
 * User: presleylupon
 * Date: 05/07/2018
 * Time: 14:19
 */

namespace Entity;


class Player
{
    private $name;

    private $item = [];
    /**
     * Player constructor.
     */
    public function __construct(string $name, int $numberItem)
    {
        $this->name = $name;

        $item=[];

        for ($pion = 0; $pion < $numberItem; $pion++ ){
            $item[$pion]= new Pion();
        }

        $this->item = $item;
    }

    public function getPieces()
    {
        return $this->item;
    }
}