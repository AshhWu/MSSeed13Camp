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

        // Temporary variable, used to store current query
$templine = '';
// Read in entire file
$lines = file('import.sql');
// Loop through each line
foreach ($lines as $line)
{
// Skip it if it's a comment
if (substr($line, 0, 2) == '--' || $line == '')
    continue;

// Add this line to the current segment
$templine .= $line;
// If it has a semicolon at the end, it's the end of the query
if (substr(trim($line), -1, 1) == ';')
{
    // Perform the query
    mysql_query($templine) or print('Error performing query \'<strong>' . $templine . '\': ' . mysql_error() . '<br /><br />');
    // Reset temp variable to empty
    $templine = '';
}
}
 echo "Tables imported successfully";

    }
    catch(Exception $e){
        die(print_r($e));
    }

    echo "Success: A proper connection to MySQL was made!" ;


?>