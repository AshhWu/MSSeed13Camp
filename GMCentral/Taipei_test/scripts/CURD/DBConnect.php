<?php
    
    $connectstr_dbhost = '';
    $connectstr_dbname = 'msseed13';
    $connectstr_dbusername = '';
    $connectstr_dbpassword = '';
    
    foreach ($_SERVER as $key => $value) {
        if (strpos($key, "MYSQLCONNSTR_localdb") !== 0) {
            continue;
        }
        
        $connectstr_dbhost = preg_replace("/^.*Data Source=(.+?);.*$/", "\\1", $value);
        $connectstr_dbusername = preg_replace("/^.*User Id=(.+?);.*$/", "\\1", $value);
        $connectstr_dbpassword = preg_replace("/^.*Password=(.+?)$/", "\\1", $value);
    }
    
    try{
        $conn = new mysqli($connectstr_dbhost, $connectstr_dbusername, $connectstr_dbpassword, $connectstr_dbname);
    }
    catch(Exception $e){
        die(print_r($e));
    }

?>