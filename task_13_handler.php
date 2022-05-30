<?php
    session_start();
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    require_once('connect_bd.php');

    // запрос, с меткой на которую передадим переменную
    $query = "SELECT * FROM `users-13` WHERE email=:email";

    // нужно подготовить запрос, для безопасной отправки в бд
    $statement = $pdo->prepare($query);

    // в запросе, на метку передаём переменную и выполняем его
    $statement -> execute(['email' => $email]);

    $result = $statement->fetch(PDO::FETCH_ASSOC);
    
    // данные пришли, значит такой емаил в бд есть
    if (!empty($result)) { // если $result - не пустой
        // Ошибка в переменной Сессии true, то есть активна
        $_SESSION['error'] = true;
        // возращаемся на главную
        header ('location: task_13.php');
        // прекращаем дальнейщее исполнение скрипта
        exit;
    }
    
    // если данные по запросу НЕ пришли
    // значит можно записать емаил в бд
    // шифруем пароль
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // запрос, с меткой накоторую передадим переменную
    $query = "INSERT INTO `users-13` (email, password) VALUES (:email, :password)";

    // нужно подготовить запрос, для безопасной отправки в бд
    $statement = $pdo->prepare($query);

    // в запросе, на метки передаём переменные, и выполняем его
    $statement->execute(['email' => $email, 'password' => $hashed_password]);

    // возращаемся на главную
    header ('location: task_13.php');
?>