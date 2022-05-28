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

<body class="mod-bg-1 mod-nav-link ">
    <main id="js-page-content" role="main" class="page-content">
        <div class="col-md-6">
            <div id="panel-1" class="panel">
                <div class="panel-hdr">
                    <h2>
                        Задание
                    </h2>
                    <div class="panel-toolbar">
                        <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                        <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                    </div>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <div class="d-flex flex-wrap demo demo-h-spacing mt-3 mb-3">
                            <?php
                            $host = '127.0.0.1';
                            $db_user = 'root';
                            $db_password = '';
                            $db_name = 'my_php';
                            $driver = 'mysql';
                            $charset = 'utf8';
                            $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]; // массив с дополнительными настройками подключения. В данном примере мы установили отображение ошибок, связанных с базой данных, в виде исключений
                            $dsn = "$driver:host=$host;dbname=$db_name;charset=$charset";

                            // создаём объект PDO
                            $pdo = new PDO($dsn, $db_user, $db_password, $options);

                            // запрос
                            $query = 'SELECT * FROM `peoples`';

                            // получаем ответ, кладём в $statement
                            $statement = $pdo->query($query);
                            // преобразуем Ответ в Массив
                            // fetchAll - Ответ преобразуется в один большой Массив
                            // PDO::FETCH_ASSOC - чтобы в результирующем массиве остались только ассоциативные элементы
                            $peoples = $statement->fetchAll(PDO::FETCH_ASSOC);
                            ?>

                            <?php foreach ($peoples as $people) : ?>
                                <div class="<?php echo $people['is-banned'] == "true" ? "banned" : "" ?> rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                                    <img src="<?php echo $people['photo-src']; ?>" alt="<?php echo $people['photo-alt']; ?>" class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                                    <div class="ml-2 mr-3">
                                        <h5 class="m-0">
                                            <?php echo $people['people-name']; ?>
                                            <small class="m-0 fw-300">
                                                <?php echo $people['position']; ?>
                                            </small>
                                        </h5>
                                        <a href="<?php echo $people['link-tw']; ?>" class="text-info fs-sm" target="_blank"><?php echo $people['link-tw-text']; ?></a> -
                                        <a href="<?php echo $people['link-boot']; ?>" class="text-info fs-sm" target="_blank" title="Contact Sunny"><i class="fal fa-envelope"></i></a>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


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