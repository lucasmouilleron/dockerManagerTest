<?php
$ENVIRONMENT = "local";
if (getenv("ENVIRONMENT") !== false) $ENVIRONMENT = getenv("ENVIRONMENT");
include __DIR__ . "/" . $ENVIRONMENT . ".config.php";
?>

<h1>Hello dockerManager !</h1>

<h2>Running revision <?php echo getenv("REVISION") ?>.</h2>
<h2>This is a config test : <?php echo TEST; ?></h2>

<h2>This is database data : </h2>
<?php

$conn = new mysqli(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DATABASE);
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);
$sql = "SELECT * FROM test";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        print_r($row);
    }
} else  echo "0 results";
$conn->close();
?>
