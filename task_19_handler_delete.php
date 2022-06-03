<?php 
$id_image=$_GET['id'];

require_once('connect_bd.php');

$query = "DELETE FROM `images-18` WHERE id=:id";

$statement = $pdo->prepare($query);

$statement->execute(['id' => $id_image]);

header ('location: task_19.php');