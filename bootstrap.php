<?php
session_start();
define('URL', 'http://localhost:8898/zuikis-main/box/'); // <--- konstanta
define('DIR', __DIR__ . '/');
require DIR . 'app/functions.php';


_d($_SESSION, 'SESIJA--->');

// http://localhost/zuikis/box/  