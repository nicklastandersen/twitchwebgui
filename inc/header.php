<?php
$pagename = "PersonalWeather";

require_once 'functions.php';

?>

<!DOCTYPE html>
<html ng-app="weatherApp" class="ng-scope">
<head>
    <meta charset="UTF-8">
    <title><?php echo $pagename; ?> | </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/stylesheets/style.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular-route.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular-resource.js"></script>
    <script src="assets/lib/iso-3166-country-codes-angular/iso-3166-country-codes-angular.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="assets/js/controllers.js"></script>
    <script src="assets/js/directives.js"></script>
    <script src="assets/js/filters.js"></script>
    <script src="assets/js/services.js"></script>


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
                <a href="index.php">
                    <img src="assets/images/logo.png" alt="PersonalWeather">
                </a>
            </div>

          <div id="primary-menu">

              <?php include_once 'parts/menu.php'; ?>

          </div>
        </div>
    </div>
</header>

<main id="main">