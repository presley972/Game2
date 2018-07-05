<?php
/**
 *
 * Created by PhpStorm.
 * User: presleylupon
 * Date: 04/07/2018
 * Time: 14:25
 */
namespace Entity;

class Map
{
    private $board;
    public function __construct($sizeBoard)
    {
        $board = [];
        for ($row=0; $row<$sizeBoard; $row++){
            $board[$row]=[];
            for ($col=0; $col<$sizeBoard; $col++){
                $board[$row][$col]=$row.",".$col;
            }
        }
        $this->board= $board;
    }


    public function getCell(int $row, int $col): string {
        if(!isset($this->board[$row][$col])){
            throw new BoardOutOfBoundariesException($row,$col,count($this->board));
        }
        return $this->board[$row][$col];
    }

    public function displayHtml()
    {
        $sizeBoard = count($this->board);
        $board = $this;
        ob_start();
        try {
            require __DIR__."/../view/board.php";
        }catch (\Throwable $exception) {
            ob_clean();
            throw $exception;
        }
        ob_end_flush();
    }
}