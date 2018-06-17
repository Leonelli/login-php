<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<?php
include 'define.php';
// Start the session
session_start();

// Defines username and password. Retrieve however you like,
$db = new PDO('sqlite:' . DB_SISTEMA);
$result = $db->query("SELECT * FROM UTENTI");
$db = null;

// Error message
$error = "";

// Checks to see if the user is already logged in. If so, refirect to correct page.
if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true) {
    $error = "success";
    header('Location: index.php');
}

// Checks to see if the username and password have been entered.
// If so and are equal to the username and password defined above, log them in.

$ok = false;
foreach ($result as $row) {
    if (isset($_POST['login-form-username']) && isset($_POST['login-form-password'])) {
        if ($_POST['login-form-username'] == $row['Utente'] && password_verify($_POST['login-form-password'], $row['Password'])) {
            ///$_POST['password'] == $row['Password']) {
            $ok = true;
            $_SESSION['ID'] = $row['ID'];
            $_SESSION['Livello'] = $row['Livello'];
            if (ok) {
                $_SESSION['User'] = $row['Utente'];
            }
        }
    }
}
if ($ok) {
    $_SESSION['loggedIn'] = true;
    header('Location: index.php');
}
if ($ok == false) {
    $_SESSION['loggedIn'] = false;
    $error = "Invalid username and password!";
}

if (isset($_POST['login-form-submit'])) {
    $USER = $_POST['login-form-username'];
    //cripto
    $PASSWORD = $_POST['login-form-password'];
    $PASSWORD = password_hash($PASSWORD, PASSWORD_BCRYPT);
    $TIME = date('Y-m-d H:i:s');
    $db = new PDO('sqlite:' . DB_SISTEMA);
    $verificato = $ok;
    $db->exec("INSERT INTO LOGS (Utente,Password,Verificato,Time) VALUES ('$USER','$PASSWORD'," . ($verificato ? 1 : 0) . ",'$TIME')");
    $db = null;
}
?>


<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Stylesheets
    ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic"
          rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css"/>
    <link rel="stylesheet" href="assets/css/style.css" type="text/css"/>
    <link rel="stylesheet" href="assets/css/dark.css" type="text/css"/>
    <link rel="stylesheet" href="assets/css/font-icons.css" type="text/css"/>
    <link rel="stylesheet" href="assets/css/animate.css" type="text/css"/>
    <link rel="stylesheet" href="assets/css/magnific-popup.css" type="text/css"/>

    <link rel="stylesheet" href="assets/css/responsive.css" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <!-- Document Title
    ============================================= -->
    <title>Login</title>

</head>

<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Content
    ============================================= -->
    <section id="content">

        <div class="content-wrap nopadding">

            <div class="section nopadding nomargin"
                 style="width: 100%; height: 100%; position: absolute; left: 0; top: 0; background: url('assets/images/parallax/home/7.jpg') center center no-repeat; background-size: cover;"></div>

            <div class="section nobg full-screen nopadding nomargin">
                <div class="container vertical-middle divcenter clearfix">

                    <div class="row center">
                        <a href="index.php"><img src="assets/images/logo-dark.png" alt="Canvas Logo"></a>
                    </div>

                    <div class="panel panel-default divcenter noradius noborder"
                         style="max-width: 400px; background-color: rgba(255,255,255,0.93);">
                        <div class="panel-body" style="padding: 40px;">
                            <form id="login-form" name="login-form" class="nobottommargin" method="post"
                                  action="login.php">
                                <h3>Login to your Account</h3>

                                <div class="col_full">
                                    <label for="login-form-username">Username:</label>
                                    <input type="text" id="login-form-username" placeholder="Username"
                                           name="login-form-username" value="" class="form-control not-dark"/>
                                </div>

                                <div class="col_full">
                                    <label for="login-form-password">Password:</label>
                                    <input type="password" id="login-form-password" placeholder="Password"
                                           name="login-form-password" value="" class="form-control not-dark"/>
                                </div>

                                <div class="col_full nobottommargin">
                                    <button class="button button-3d button-black nomargin" id="login-form-submit"
                                            name="login-form-submit" value="login">Login
                                    </button>
                                    <!--<a href="#" class="fright">Forgot Password?</a>-->
                                </div>
                            </form>

                        </div>
                    </div>

                    <div class="row center dark">
                        <small>2018 Login project</small>
                    </div>

                </div>
            </div>

        </div>

    </section><!-- #content end -->

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- External JavaScripts
============================================= -->
<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/plugins.js"></script>

<!-- Footer Scripts
============================================= -->
<script type="text/javascript" src="assets/js/functions.js"></script>

</body>
</html>
