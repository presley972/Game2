<?php
/**
 * Created by PhpStorm.
 * User: presleylupon
 * Date: 04/07/2018
 * Time: 14:07
 */
require 'vendor/autoload.php';

use Entity\Map;
use Entity\Player;
use Entity\Game;

try {
    $sizeBoard = $_GET['size'] ?? 10;
    $numberItemByPlayer = pow($sizeBoard,2)*0.2;
    $playerOne = new Player('toto',$numberItemByPlayer);
    $playerTwo = new Player('Cédrick',$numberItemByPlayer);
    $board = new Map($sizeBoard);
    $game = new Game($playerOne,$playerTwo,$board);
    $game->displayHtml();
} catch (Throwable $throwable) {
    ob_start();
    require __DIR__.'/view/error.php';
    ob_end_flush();
}

