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
                        <div class="panel-content">
                            <div class="form-group">

                                <?php if (isset($_POST['submit'])) : ?>
                                    <?php
                                    $task = $_POST['task'];
                                    // подключение к БД
                                    require_once('connect_bd.php');

                                    /* сначала нужно сделать запрос в базу, для просмотра есть ли такая запись */
                                    $query = "SELECT * FROM `list-11` WHERE task=:task";
                                    $statement = $pdo->prepare($query);
                                    $statement->execute(['task' => $task]);
                                    $result = $statement->fetch(PDO::FETCH_ASSOC);
                                    // $result - будет false, если ответ придёт пустым
                                    ?>
                                    <?php if (!$result) : ?>
                                        <!-- если ответ НЕ пустой, делаем запись в бд -->
                                        <?php
                                        // запрос, с меткой накоторую передадим переменную
                                        $query = "INSERT INTO `list-11` (`task`) VALUES (:task)";

                                        // нужно подготовить запрос, для безопасной отправки в бд
                                        $statement = $pdo->prepare($query);

                                        // в запросе, на метку передаём переменную и выполняем его
                                        $statement->execute(['task' => $task]);
                                        ?>
                                    <?php else : ?>
                                        <!-- иначе, ответ не пустой, запись существует в бд, выводим ошибку -->
                                        <div class="alert alert-danger fade show" role="alert">
                                            You should check in on some of those fields below.
                                        </div> 
                                    <?php endif; ?>
                                <?php endif; ?>


                                <form method="POST" action="task_12.php">
                                    <label class="form-label" for="simpleinput">Text</label>
                                    <input name="task" type="text" id="simpleinput" class="form-control">
                                    <button class="btn btn-success mt-3" name="submit" type="submit">Submit</button>
                                </form>

                            </div>
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