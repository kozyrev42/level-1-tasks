<?php
require_once('connect_bd.php');

// при каждой итерации, функции передаётся Имя файла и временное расположение
// count($_FILES['image']['name']) - считает сколько элементов в массиве ['image']['name']
for ($i=0; $i < count($_FILES['image']['name']); $i++) {
    upload_file($_FILES['image']['name'][$i], $_FILES['image']['tmp_name'][$i],$pdo);
    // $_FILES['image']['name'][$i] - обращаемся к первому элементу массива ['image']['name']
}

function upload_file($image_name, $tmp_name, $pdo) {
    // получим расширение файла
    $extension = pathinfo($image_name)["extension"];
    // формируем уникальное имя файла
    $uniq_image_name = uniqid() .".".  $extension;
    //куда
    $target = "downloads/" . $uniq_image_name;
    // перемещаем в постоянную папку
    move_uploaded_file($tmp_name, $target);

    // записать в базу имени загруженего файла
    $query = "INSERT INTO `images-18` (image) VALUES (:image)";
    // нужно подготовить запрос, для безопасной отправки в бд
    $statement = $pdo->prepare($query);
    // в запросе, на метки передаём переменные, и выполняем его
    $statement->execute(['image' => $uniq_image_name]);
    // после загрузки возвращаемся на главную
}

header ('location: task_20.php');