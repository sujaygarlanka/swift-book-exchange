<?php
include 'functions.php';
include 'email.php';
session_start();
if(isset($_POST['bookID'])){
	$book = findBookHistory($_POST['bookID']);
	sendBoughtEmail($book);
	sendSoldEmail($book); 
    echo '';
}
?>