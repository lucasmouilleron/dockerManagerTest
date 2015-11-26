<?php
$ENVIRONMENT = "local";
if (getenv("ENVIRONMENT") !== false && in_array(getenv("ENVIRONMENT"), array("local", "preprod"))) $ENVIRONMENT = getenv("ENVIRONMENT");
include __DIR__ . "/" . $ENVIRONMENT . ".config.php";
?>

<h1>Hello other page !</h1>

<h2>Running revision <?php echo getenv("REVISION") ?>.</h2>
<h2>This is a config test : <?php echo TEST; ?></h2>
