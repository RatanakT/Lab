<?php
include 'vendor/autoload.php';
$pdo = new PDO('mysql:dbname=webform', 'root', 'root');
$fluent = new \Envms\FluentPDO\Query($pdo);
?>