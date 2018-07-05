<?php
/**
 * Created by PhpStorm.
 * User: presleylupon
 * Date: 04/07/2018
 * Time: 14:07
 */
require 'vendor/autoload.php';

use Entity\Map;

try {
    $sizeBoard = $_GET['size'] ?? 10;
    $board = new Map($sizeBoard);
    $board->displayHtml();
} catch (Throwable $throwable) {
    ob_start();
    require __DIR__.'/view/error.php';
    ob_end_flush();
}

