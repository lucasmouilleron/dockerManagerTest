<?php
$ENVIRONMENT = "local";
if (getenv("ENVIRONMENT") !== false) $ENVIRONMENT = getenv("ENVIRONMENT");
include __DIR__ . "/" . $ENVIRONMENT . ".config.php";
?>

<h1>Hello dockerManager !</h1>

<h2>Running revision <?php echo getenv("REVISION") ?>.</h2>
<h2>This is a config test : <?php echo TEST; ?></h2>
