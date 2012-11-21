<?php 
try
{

$pdo = new PDO('mysql:dbname=filmydb;host=localhost', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
echo 'Blad polaczenia z baza danych: '.$e->getMessage();
}