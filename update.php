<?php

include 'config.php';

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$addressx = $_POST["addressx"];
$city = $_POST["city"];
$postcode = $_POST["postcode"];
$email = $_POST["email"];
$nemail = $_POST["nemail"];
$pwd = $_POST["pwd"];
$npwd = $_POST["npwd"];

if($mysqli->query("UPDATE users set fname='$fname', lname='$lname', address='$addressx', city='$city', pin='$postcode', email='$nemail', password='$npwd' WHERE (email='$email' AND password='$pwd')")){
    echo '<h1>Success!</h1>';
    header("Refresh: 3; url=index.php");
} else {
    echo('SQL Query Error.');
}

?>