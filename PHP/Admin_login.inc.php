<?php

if(isset($_POST["login-submit"])){

    require "../SQL/dbConnect.php";

    $user = $_POST['user'];
    $password = $_POST['password'];

   