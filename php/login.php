<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if($username == "admin" && $password == "1234"){
    $_SESSION['username'] = $username;
    echo "success";
} else {
    echo "fail";
}