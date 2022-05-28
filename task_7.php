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

                <?php
                /* мое решения */
                $links = [
                    [
                        "class" => "breadcrumb-item",
                        "link" => "<a href='#'>Главная</a>"
                    ],
                    [
                        "class" => "breadcrumb-item",
                        "link" => "<a href='#'>PHP</a>"
                    ],
                    [
                        "class" => "breadcrumb-item  active",
                        "link" => "Функции"
                    ]
                ];

                /* массив для Второго решения решения */
                $links2 = [
                    [
                        "title" => "Главная",
                        "href" => "#",
                        "is-link" => true
                    ],
                    [
                        "title" => "PHP",
                        "href" => "#",
                        "is-link" => true
                    ],
                    [
                        "title" => "Функции",
                        "href" => "",
                        "is-link" => false,
                    ]
                ]
                ?>

                <div class="panel-container show">
                    <div class="panel-content">
                        <!-- мое решение -->
                        <ol class="breadcrumb page-breadcrumb">
                            <?php foreach ($links as $link) : ?>
                                <li class="<?php echo $link['class']; ?>"><?php echo $link['link']; ?></li>
                            <?php endforeach; ?>
                        </ol>

                        <!-- второе решение -->
                        <ol class="breadcrumb page-breadcrumb">
                            <?php foreach ($links2 as $link) : ?>
                                <?php if ($link['is-link']) : ?>
                                    <!-- проверяем, является ли элемент ссылкой -->
                                    <!-- если ссылка, то вывод в одном формате -->
                                    <li class="breadcrumb-item"><a href="<?php echo $link['href']; ?>"><?php echo $link['title']; ?></a></li>
                                <?php else : ?>
                                    <!-- иначе, если не ссылка, то в другом формате -->
                                    <li class="breadcrumb-item  active"><?php echo $link['title']; ?></li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ol>
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