<?php
$ENVIRONMENT = "local";
if (getenv("ENVIRONMENT") !== false) $ENVIRONMENT = getenv("ENVIRONMENT");
include __DIR__ . "/" . $ENVIRONMENT . ".config.php";
?>

<h1>Hello dockerManager !</h1>

<h2>Running revision <?php echo getenv("REVISION") ?>.</h2>
<h2>This is a config test : <?php echo TEST; ?></h2>

<?php
echo "here";
$servername = "127.0.0.1";
$username = "mysql";
$password = "thepass";
$dbname = "main";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);
echo "connected";
$sql = "SELECT * FROM test";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        print_r($row);
    }
} else  echo "0 results";
$conn->close();
echo "here2";
?>
