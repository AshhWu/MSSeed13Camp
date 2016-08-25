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
        $conn = new PDO( "mysql:host=$connectstr_dbhost;dbname=$connectstr_dbname", $connectstr_dbusername, $connectstr_dbpassword);
        $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    }
    catch(Exception $e){
        die(print_r($e));
    }

    echo "Success: A proper connection to MySQL was made!" ;
    echo "<p>".$connectstr_dbhost."<\p>";
    echo "<p>".$connectstr_dbusername."<\p>";
    echo "<p>".$connectstr_dbpassword."<\p>";

?>