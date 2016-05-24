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
                            <li><a href="index.php">About Us<span class="sr-only">(current)</span></a></li>
                            <li><a href="profile.php">Log In</a></li>
                            <li><a href="#">Register</a></li>
                        </ul>
                    </div>
                </div>
        </nav>
    </div>

    <div class="container">
        <div class="row">
            <div class="site-branding">
                <h1><?php echo $pagename;?></h1>
            </div>

          <div id="primary-menu">
            <nav class="navbar navbar-default">

                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <a class="navbar-brand" href="index.php">Twitch</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
                            <li><a href="profile.php">Profile</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </nav>
          </div>
        </div>
    </div>
</header>

<main id="main">