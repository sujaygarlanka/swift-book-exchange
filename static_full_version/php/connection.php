<?php

$connection = mysqli_connect('localhost','root','duke2016!','textbook_exchange');
if(!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}

?>
