<?php

require 'src/conexion.php';
require 'controllers/db.php';

    //echo "Register action";

    if(isset($_POST['nombre'])  && isset($_POST['email']) && isset($_POST['password'])){

        $nombre=$_POST['nombre'];
        filter_input(INPUT_POST,$nombre,FILTER_SANITIZE_STRING);
        $email=$_POST['email'];
        filter_input(INPUT_POST,$email,FILTER_SANITIZE_EMAIL);
        $password= password_hash($_POST['password'], PASSWORD_DEFAULT);
        filter_input(INPUT_POST,$password,FILTER_SANITIZE_STRING);

        
if(insert($dbh,"alumnos",['nombre' => $nombre, 'email' => $email, 'password' => $password])){
    header('Location:?url=home');
}
        


    }else{
        header('Location:?url=home');
    }
