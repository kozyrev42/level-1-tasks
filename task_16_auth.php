<?php
session_start();
// обработчик формы авторизации

$email = $_POST['email'];
$password = $_POST['password'];


require_once('connect_bd.php');
// проверка есть ли в базе емаил
// запрос, с меткой на которую передадим переменную
$query = "SELECT * FROM `users-13` WHERE email=:email";
// нужно подготовить запрос, для безопасной отправки в бд
$statement = $pdo->prepare($query);
// в запросе, на метку передаём переменную и выполняем его
$statement -> execute(['email' => $email]);
// $result - может содержать запись из таблицы
$result = $statement->fetch(PDO::FETCH_ASSOC);
//var_dump($result);
// если данные пришли, значит такой емаил в бд есть, нужно перейти проверки пароля

if (empty($result)) { // если $result пустой выполняем блок
    // Ошибка в переменной Сессии true, то есть активна
    $_SESSION['error'] = true;
    // возращаемся к форме
    header ('location: task_16_auth_form.php');
    // прекращаем дальнейщее исполнение скрипта
    exit;
}




// запрос в бд, сравниваем пароли
/* $query = "SELECT * FROM `users-13` WHERE email=:email";
$statement = $pdo->prepare($query);
$statement -> execute(['email' => $email]);
$result = $statement->fetch(PDO::FETCH_ASSOC); */


// пароли не равны, записываем в сессию Ошибку
// возращаем на форму входа
// прерываем сценарий
// exit;


// если всё хорошо
// записывем в сессию емаил
// возвращаем на главную
// header ('location: task_16_index.php');