<?php

include 'config.php';

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$addressx = $_POST["addressx"];
$city = $_POST["city"];
$postcode = $_POST["postcode"];
$email = $_POST["email"];
$pwd = $_POST["pwd"];

if($mysqli->query("INSERT INTO users (fname, lname, address, city, pin, email, password) VALUES('$fname', '$lname', '$addressx', '$city', $postcode, '$email', '$pwd')")){
	echo 'Success!';
	echo '<br/>';
    header ("location:login.php");
}

?>