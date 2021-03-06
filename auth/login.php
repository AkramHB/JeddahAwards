<?php
    session_start();
    if (!empty($_POST["form-username"]) && !empty($_POST["form-password"])) {

        $un = $_POST['form-username'];
        $p = $_POST['form-password'];
        
        if($un == "admin" && $p == "0550496601"){
            $_SESSION["admin"] = "admin";
            echo "<script> location.href='displayind.php'; </script>";
            exit;
        }

    }
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>صفحة دخول المشتركين | جائزة جدة للإبداع 1440هـ</title>

    <!-- CSS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="../assets1/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets1/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets1/css/form-elements.css">
    <link rel="stylesheet" href="../assets1/css/style.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="../assets1/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets1/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets1/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets1/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets1/ico/apple-touch-icon-57-precomposed.png">

    <style>
        @import url(http://fonts.googleapis.com/earlyaccess/droidarabickufi.css);
        * {
            font-family: 'Droid Arabic Kufi', serif !important;
        }
    </style>

</head>

<body>

    <!-- Top content -->
    <div class="top-content">

        <div class="inner-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text">
                        <img src="../assets1/img/backgrounds/11.png" class="img-fluid">

                        <div class="description">
                            <h3 style="color: #fff;">
                                أهــلاً بــكم <br><br> جـائــزة جـــدة للإبـــداع للعام 1440 هـ</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 form-box">
                        <div class="form-top">
                            <div class="form-top-left">
                                <h3>تسجيل الدخول إلى حسابك</h3>
                                <p> فضلا قم بإدخال بياناتك</p>
                            </div>
                            <div class="form-top-right">
                                <img src="../assets1/img/backgrounds/sign-in.png">
                            </div>
                        </div>
                        <div class="form-bottom">
                            <form role="form" action="login.php" method="post" class="login-form">
                                <div class="form-group">
                                    <label class="sr-only" for="form-username">Username</label>
                                    <input type="text" name="form-username" placeholder="اسم المستخدم " class="form-username form-control" id="form-username">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-password">Password</label>
                                    <input type="password" name="form-password" placeholder="كلمة السر " class="form-password form-control" id="form-password">
                                </div>
                                <button type="submit" class="btn">تسجـيل الـدخول</button>
                            </form>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>


    <!-- Javascript -->
    <script src="../assets1/js/jquery-1.11.1.min.js"></script>
    <script src="../assets1/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets1/js/jquery.backstretch.min.js"></script>
    <script src="../assets1/js/scripts.js"></script>

    <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

</body>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110676516-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-110676516-1');
</script>

</html>