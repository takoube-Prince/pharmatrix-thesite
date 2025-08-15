<?php
$standalone_page = ["404", "login", "signup"];

$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$routes = require "./routes/web.php";

$request_uri = rtrim($request_uri, "/") ?: "/";

if(array_key_exists($request_uri, $routes)){

    $page = $routes[$request_uri];
}else{

    http_response_code(404);
    $page = "404";
}
?>

<!DOCTYPE html>
<html lang="en">
    <?php if (in_array($page, $standalone_page)): ?>
        
        <?php include "./views/pages/{$page}.php" ?>
    <?php else: ?>

<head>
    <?php include "./views/components/head.php";?>

    <?php
        if ($page === 'acceuil') {
            echo '<style>
                        nav{
                            background-color: white;
                        }

                        nav .icon i{
                            color: #88807E;
                        }


                        .content{
                            width: 100%;
                            padding: 0vh 5vw 0vh 5vw;
                            background-image: url("./public/assets/images/doctor_tablette.jpg");
                            background-size: cover;
                            background-position: center;
                            position: relative;
                        }

                        .content::before{
                            content: \'\';
                            position: absolute;
                            top: 0;
                            left: 0;
                            width: 100%;
                            height: 100%;
                            background-color: rgba(0, 50, 0, 0.8);
                            z-index: 1;
                        }
                    </style>';
        } else {
            echo '<style>
                        nav{
                            background-color: #194F02;
                        }

                        nav .icon i{
                            color: white;
                        }

                        .content{
                            width: 100%;
                            padding: 0vh 5vw 0vh 5vw;
                            background-image: none;
                            background-color: white;
                        }

                        .content::before{
                            content: \'\';
                            width: 0;
                            height: 0;
                            background-color: none;
                            z-index: 0;
                        }
                    </style>';
        }
    ?>
</head>
<body>

    <div class="container">

        <nav>
            <?php include "./views/components/nav.php";?>
        </nav>

        <div class="content">
            <?php
                if ($page === '404') {
                    echo '<h2>404 - Page non trouvée</h2>';
                } else {
                    include "views/pages/{$page}.php";
                }
                ?>
        </div>

        <div class="info">
            <?php include "./views/components/footer.php";?>
        </div>
    </div>
</body>

    <?php endif; ?>

</html>