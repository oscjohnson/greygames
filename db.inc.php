<?php
function db_connect() {
    $host     = "INSERT_HOST"; 
    $user     = "INSERT_USER";
    $password = "INSERT_PASSWORD"; 
    $database = "INSERT_DATABASE"; 
    $link_id = @mysql_connect($host, $user, $password) or die("Error: Could not contact the database server!");
    @mysql_select_db($database) or die("Error: There was a problem with the database!");
    return $link_id;
}
?>
