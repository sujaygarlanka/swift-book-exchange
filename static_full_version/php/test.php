<?php
include "connection.php";

global $connection;
$query = "SELECT * FROM users";
$result = mysqli_query($connection, $query);

while($test = mysqli_fetch_assoc($result)){
    echo $test['email'];
    echo "<br>";
    
}
?>