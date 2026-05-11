<?php
$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "admin" && $password == "123") {
    echo "success";
} else {
    echo "fail";
}
?>