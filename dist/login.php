<?php
//
//require_once("php/session.php");
//
//require_once("php/func.php");
//$auth_user = new USER();
//$user_req = new USER();
//
//$user_id = $_SESSION['user_session'];
//
//$stmt = $auth_user->runQuery("SELECT * FROM users WHERE id=:id");
//$stmt->execute(array(":id"=>$user_id));
//
//$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
//
?>

<!doctype html>
<html id="LoginForm" class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
</head>

<body id="LoginForm">
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->


  <!-- Content begin -->

<div class="container">
    <br/><br/>
    <div class="login-form">

        <div class="main-div">
            <a href="index.php">
                <img src="img/back-arrow.png" id="back-arrow"/>
            </a>
            <div class="panel">
                <h2>User Login</h2>
                <p>Please enter your email and password</p>
            </div>
                <form id="Login">
                    <div class="form-group">
                        <input type="email" class="form-control" id="inputEmail" placeholder="Email Address">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                    </div>
                    <div class="forgot">
                        <a href="reset.php">Forgot password?</a>
                        <a id="register-link" href="register.php">Register now</a>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>

  <script type="text/javascript" src="assets/js/bootstrap.js"></script>


  <script src="js/vendor/modernizr-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>
