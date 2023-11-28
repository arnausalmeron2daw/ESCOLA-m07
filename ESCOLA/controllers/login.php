<?php
    //CONTROLADOR LOGIN
   require 'src/render.php';

   if (isset($_COOKIE['email']) && isset($_COOKIE['password'])) {
    $email = $_COOKIE['email'];
    $password = $_COOKIE['password'];

    header('Location:?url=dashboard');

    
} else {
    $email = ''; 
    $password = '';
}

   echo render('login',['title'=>'Login-render']);






?>