<h1>Hello dockerManager !</h1>

Running revision <?php echo getenv("REVISION") ?>.

<?php
$ENVIRONMENT = "local";
if (getenv("ENVIRONMENT") !== false) $ENVIRONMENT = getenv("ENVIRONMENT");
include __DIR__ . "/" . $ENVIRONMENT . ".config.php";
?>

This is a config test : <?php echo TEST; ?>
