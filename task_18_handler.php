<?php

$image_name=$_FILES['image']['name'];
//var_dump($_FILES);

// 1. сформировать уникальное наименование
$uniq_image_name = uniqid() . $image_name;

// 2. сохранить картинку в постоянную папку
// формируем путь сохранения
// откуда
$tmp_name = $_FILES['image']['tmp_name'];

//куда
$target = "downloads/" . $uniq_image_name;

// перемещаем в постоянную папку
move_uploaded_file($tmp_name, $target);

// записать в базу имя загруженнго файла
require_once('connect_bd.php');

$query = "INSERT INTO `images-18` (image) VALUES (:image)";

// нужно подготовить запрос, для безопасной отправки в бд
$statement = $pdo->prepare($query);

// в запросе, на метки передаём переменные, и выполняем его
$statement->execute(['image' => $uniq_image_name]);

// после загрузки возвращаемся на главную
header ('location: task_18.php');

//$extension = pathinfo($image_name)["extension"];