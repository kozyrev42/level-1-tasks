<?php
    session_start();
    $message = $_POST['message'];

    if (!empty($message)) { 
        // если $message - не пестой, сохраняем в переменную сессии
        $_SESSION['message'] = $message;
    }

    // возращаемся на главную
    header ('location: task_14.php');
    