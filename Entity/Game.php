<?php
/**
 * Created by PhpStorm.
 * User: presleylupon
 * Date: 05/07/2018
 * Time: 15:03
 */

namespace Entity;


class Game
{
    private $playerOne;
    private $playerTwo;
    private $map;

    public function __construct(Player $playerOne, Player $playerTwo, Map $map)
    {

        $this->playerOne = $playerOne;
        $this->playerTwo = $playerTwo;
        $this->map = $map;
        $cell = $map->getCell(0,0);
        foreach ($playerOne->getPieces() as $piece){
            $movedToCell = false;
            do{
                try{
                    $cell = $cell->moveto($piece);
                    $movedToCell = true;
                }catch (ErrorPlacing $exception){
                    $cell = $map->getNextCell($cell);
                }
            }while($movedToCell === false);
        }
        $sizeMinusOne = $this->map->getBoardSize()-1;
        $cell = $map->getCell($sizeMinusOne,$sizeMinusOne);
        foreach ($playerTwo->getPieces() as $piece){
            $movedToCell = false;
            do{
                try{
                    $cell = $cell->moveto($piece);
                    $movedToCell = true;
                }catch (ErrorPlacing $exception){
                    $cell = $map->getPreviousCell($cell);
                }
            }while($movedToCell === false);
        }
    }

    public function displayHtml()
    {
        $this->map->displayHtml();
    }
}