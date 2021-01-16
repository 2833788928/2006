<?php
        //pdo数据库操作
       function getpdo(){
        $host="127.0.0.1";
        $user="root";
        $pass="root";
        $db="test";
        $dbh=new PDO($host,$user,$pass,$db);

       }

         
