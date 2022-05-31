<?php
    session_start();
    $_SESSION['count']=$_SESSION['count']+1;
    header ('location: task_15.php');
?>