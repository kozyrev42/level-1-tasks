<?php
session_start();
// используем таблицу из 13 задачи users-13
// создать пользователя можно в 13 задаче
// стартовая страница 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
        Подготовительные задания к курсу
    </title>
    <meta name="description" content="Chartist.html">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
    <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
    <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
    <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
    <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
    <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
    <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
    <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
    <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <!-- если сессия НЕ содержит пользователя -->
            <?php if(empty($_SESSION['user'])):?>
            <div class="col-md-4">
                <h2> Вы не авторизованы </h2>
                <div>
                    <a href="task_16_auth_form.php" class="btn btn-info">Войти</a>
                </div>
            </div>
            <?php endif;?>

            <!-- если сессия содержит пользователя -->
            <!-- выводим емаил пользователя -->
            <?php if(!empty($_SESSION['user'])):?>
            <div class="col-md-4">
                <h2> Вы вошли как <?php echo $_SESSION['user']['email']?> </h2>
                <div>
                    <a href="task_16_logout.php" class="btn btn-danger">Выйти</a>
                </div>
            </div>
            <?php endif;?>
        </div>
    </div>



    <script src="js/vendors.bundle.js"></script>
    <script src="js/app.bundle.js"></script>
    <script>
    // default list filter
    initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
    // custom response message
    initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
    </script>
</body>

</html>