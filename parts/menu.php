<?php $page = basename($_SERVER['SCRIPT_NAME']); ?>

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

            <a class="navbar-brand" href="index.php">PersonalWeather</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li <?php if ($page == 'index.php') { echo ' class="active"'; } ?>><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home <span class="sr-only">(current)</span></a></li>
                <li class="dropdown">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Weather <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#/forecast">Weather by City</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#/storm">Weather by Country</a></li>
                    </ul>
                </li>
                <li <?php if ($page == 'about.php') { echo ' class="active"'; } ?>><a href="about.php">About</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div>
</nav>