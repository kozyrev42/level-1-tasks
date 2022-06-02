<?php // обработчик формы авторизации
session_start();

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

// проверяем, пришли ли данные по запросу
if (empty($result)) { // если $result пустой, такого емаила нет, выполняем блок
    // Ошибка в переменной Сессии true, передаём ошибку
    $_SESSION['error'] = true;
    // возращаемся к форме
    header ('location: task_17_auth_form.php');
    // прекращаем дальнейщее исполнение скрипта
    exit;
}

// хэшировынный пароль из базы
$hash_password=$result['password'];

// проверяем соответствует-ли введеный пароль, хешу пароля из бд
// результат записываем в $verify
$verify=password_verify($password, $hash_password);

// если $verify = false, значит пароли не равны, передаём ошибку
if (!$verify) { 
    $_SESSION['error'] = true;
    header ('location: task_17_auth_form.php');
    exit;
}

// если проверки пройдены, записывем в сессию данные пользователя
$_SESSION['user']=['email'=>$result['email'],'id'=>$result['id']];
header ('location: task_17_index.php');