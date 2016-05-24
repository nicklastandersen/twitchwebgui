<?php include('Twitch Interface/twitch_interface.php'); ?>
<?php require_once 'inc/header.php';?>

    <div class="container">
        <div class="row">

            <h1>Velkommen til Forsiden.</h1>
<?php
            $interface = new twitch;

            $stream = $interface->getStreamObject('rocketbeanstv');

        $allEmotes = $interface->chat_getEmoticons('rocketbeanstv', -1, 0, true);

            print_r($allEmotes);


?>

            <p><?php echo$stream['created_at'] ;?></p>



        </div>
    </div>



<?php require_once 'inc/footer.php';?>