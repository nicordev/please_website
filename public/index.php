<?php

define('ROUTE_CURRENT_WEEK', '/what-is-the-current-week');
define('ROOT', __DIR__.'/..');

if ($_SERVER['REQUEST_URI'] === ROUTE_CURRENT_WEEK) {
    echo 'Current week: ' . (new DateTime())->format("W");
} else {
    require ROOT.'/template/home/home.html.php';
}