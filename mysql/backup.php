<?php
    $dbc;
    $host = "localhost";
    $dbname = "actfast";
    $user = "root";
    $pass = "sysadmin";

    require('mysqldump.php');

    $mysqldump = new MySql($host,$dbname,$user,$pass);
    $file_to_load = 'actfast.sql';
    $mysqldump->backup_tables();
    
?>