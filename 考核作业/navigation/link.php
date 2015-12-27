<?php

try{  
        $dbh = new PDO('mysql:dbname=mysql;host=localhost','root','');
    }catch( PDOException $e){
        echo '链接失败'.$e->getMessage();
        exit;}
    $dbh -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $dsn = 'mysql:host=localhost;dbname=mysql';
    $username = 'root';
    $passwd = '';
    $dbh = new PDO($dsn,$username,$passwd,array( PDO::ATTR_PERSISTENT=> true));

    ?>