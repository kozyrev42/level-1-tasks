<?php 
$id_image=$_GET['id'];

require_once('connect_bd.php');

// удаление файла из каталога 
$query = "SELECT * FROM `images-18` WHERE id=:id";
$statement = $pdo->prepare($query);
$statement->execute(['id' => $id_image]);
$result = $statement->fetch(PDO::FETCH_ASSOC);
// прописать путь до удаляемого файла
@unlink ("downloads/" . $result['image']);


// удаление из бд
$query = "DELETE FROM `images-18` WHERE id=:id";

$statement = $pdo->prepare($query);

$statement->execute(['id' => $id_image]);

header ('location: task_19.php');
