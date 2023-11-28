<?php

  require 'config.php';

   function connectMysql(string $dsn,string $userdb,string $passdb){
        try{
            $db = new PDO($dsn, $userdb, $passdb);
            $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $db->setAttribute( PDO::ATTR_EMULATE_PREPARES, false );
            $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

        }catch(PDOException $e){
            die( $e->getMessage());
            
        }
        return $db;
    }

    $dbh = ConnectMysql($dsn,$dbname,$dbpass);



    ?>