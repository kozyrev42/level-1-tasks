<?php
// скрипт выхода из приложения
session_start();
// очистка сессии
unset($_SESSION['user']);
// возвращаемся на главную
header ('location: task_16_index.php');