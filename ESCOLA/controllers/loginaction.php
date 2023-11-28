<?php

require 'src/conexion.php';
require 'controllers/db.php';


    //echo "loginaction";

    

    if (isset($_POST['record'])) {
        $email = $_POST['email']; 
        $password = $_POST['password'];
    
        
        setcookie('email', $email, time() + 60, '/'); 
        setcookie('password', $password, time() + 60, '/');
    }
    
    
    

    if(isset($_POST['email']) && isset($_POST['password'])){

        $email=$_POST['email'];
        filter_input(INPUT_POST,$email,FILTER_SANITIZE_EMAIL);
        $password=$_POST['password'];
        filter_input(INPUT_POST,$password,FILTER_SANITIZE_STRING);
        

        if(auth($dbh,$email,$password)){
        
       
            header('Location:?url=dashboard');

           
        }else{
            header('Location:?url=home');
        }    

    }else{
        header('Location:?url=home');
    }


?>