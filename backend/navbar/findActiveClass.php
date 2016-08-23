<?php 
/* Check if the requestUri is the same as the currentpage
   If yes, update navbar to toggle currentpage
 */
function findActiveClass($requestUri)
{
    $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");

    if ($current_file_name == $requestUri)
        echo 'class="active"';
}

?>