<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

include 'config.php';

$email = $_POST["email"];
$pwd= $_POST["pwd"];
$flag = 'true';
//$query = $mysqli->query("SELECT email, password from users");

$result = $mysqli->query('SELECT email,password from users');

if($result === FALSE){
    echo('SQL Query Error.');
}

if($result){
    while($obj = $result->fetch_object()) {
        if($obj->email === $email && $obj->password === $pwd) {

            $_SESSION['email'] = $email;
            $_SESSION['id'] = $obj->id;
            header("location:index.php");
        } else {
            if($flag === 'true') {
                redirect_login();
                $flag='false';
            }
        }
    }
}

function redirect_login() {
  echo '<h1>Invalid Login!</h1>';
  header("Refresh: 3; url=login.php");
}
?>
