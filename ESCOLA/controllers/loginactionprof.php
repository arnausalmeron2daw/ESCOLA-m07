<?php

require 'src/conexion.php';
require 'controllers/db.php';

    

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
        

        if(authprof($dbh,$email,$password)){
        
       
            header('Location:?url=dashboardprof');

           
        }else{
            header('Location:?url=home');
        }    

    }else{
        header('Location:?url=home');
    }


?>
