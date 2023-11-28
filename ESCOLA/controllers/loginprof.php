<?php
    //CONTROLADOR LOGIN
   require 'src/render.php';

   if (isset($_COOKIE['email']) && isset($_COOKIE['password'])) {
    $email = $_COOKIE['email'];
    $password = $_COOKIE['password'];

    header('Location:?url=dashboardprof');

    
} else {
    $email = ''; 
    $password = '';
}

   echo render('loginprof',['title'=>'LoginProf-render']);






?>