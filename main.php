<?php
include_once 'dbconfig.php';

$user_id = $_SESSION['user_session'];

$mysqli = new mysqli("localhost", "root", "", "dblogin");

//$stmt = $DB_con->prepare("SELECT * FROM users");
//$stmt->execute();
//$userRow = $stmt->fetch(PDO::FETCH_ASSOC);


$query = "SELECT * FROM users";

if ($result = $mysqli->query($query)) {

    /* fetch object array */
    while ($row = $result->fetch_row()) {
        echo $row[1]+'<br>';
    }

    $result->close();
}
?>
