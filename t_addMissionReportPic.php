<?php

if($_FILES["file"]["error"]>0)
{
    echo "Error: ".$_FILES["file"]["error"];
}
else
{
    echo "file: ".$_FILES["file"]["name"]."<br/>";
    echo "type: ".$_FILES["file"]["type"]."<br/>";
    echo "size: ".($_FILES["file"]["size"]/1024)."Kb<br />";
    echo "tmp_name: ".$_FILES["file"]["tmp_name"]."<br/>";
    
    if (file_exists("./TaipeiRun/".$_FILES["file"]["name"])){
        echo "exist!!";
    }else{
        move_uploaded_file($_FILES["file"]["tmp_name"],"./TaipeiRun/".$_FILES["file"]["name"]);
    }
}

?>
