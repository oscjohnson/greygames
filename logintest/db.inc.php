<?php
function db_connect() {
    $host     = "mysql.itn.liu.se"; 
    $user     = "oscjo729_admin"; 
    $password = "oscjo729ewoin893q"; 
    $database = "oscjo729"; 
    $link_id = @mysql_connect($host, $user, $password) or die("Error: Could not contact the database server!");
    @mysql_select_db($database) or die("Error: There was a problem with the database!");
    return $link_id;
}
?>