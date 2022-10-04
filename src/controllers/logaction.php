<?php

    require 'src/db.php';

    //agafar $_REQUEST[], 1 i ['password]
    //comprova si existeixen a la base de dades
    //tenim dos possib
    //1. Existeix ==> dashboard i obrim sessió usuario
    //2. No existeix ==> o retornem a home o ens quedem al login
    
   
    
    $db=connectMysql($dsn, $dbuser, $dbpass);

    if(!empty($_POST['email'])&&!empty($_POST['password'])){
        if(isset($_POST['email'])&&isset($_POST['password'])){
            $email= $_REQUEST['email'];
            $password=$_REQUEST['password'];
            if(auth($db, $email, $password)){

                //desem sessió
                
                //redirigir a dashboard

            }
        }
    }