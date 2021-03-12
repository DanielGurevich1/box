<?php 
require __DIR__.'/bootstrap.php';

//POST scenarijus
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_GET['id'] ?? 0;
    $id = (int) $id;
    deleteBox($id); // trina
    header('Location: '.URL);
    die;
}


header('Location: '.URL);
die;