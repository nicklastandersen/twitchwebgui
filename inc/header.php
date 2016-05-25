<?php
$pagename = "Twitch Web GUI";

require_once 'functions.php';

?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $pagename; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/stylesheets/style.css">
</head>

<body>

<header id="header" class="site-header sticky">

    <div id="service-menu">
        <nav class="navbar navbar-default">
                <div class="container">
                    <div class="row">
                        <ul class="nav navbar-nav menu-inline">
                            <li><a href="profile.php"><span class="glyphicon glyphicon-lock"></span> Sign in</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-pencil"></span> Register</a></li>
                        </ul>
                    </div>
                </div>
        </nav>
    </div>

    <div class="container">
        <div class="row">
            <div class="site-branding">
                <a href="/">
                    <img src="assets/images/Twitch_logo.png" alt="Twitch">
                </a>            </div>

          <div id="primary-menu">

              <?php include_once 'parts/menu.php'; ?>

          </div>
        </div>
    </div>
</header>

<main id="main">