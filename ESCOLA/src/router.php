<?php

    require 'routes.php';
    function getRoute($routes){
        if(isset($_REQUEST['url'])){
            $url = $_REQUEST['url'];

            if(in_array($url,$routes)){
                return $url;
    
            }
            return null;
        }

    }
