<?php
//(user 'root' with no password) 
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'yes');
define('DB_NAME', 'admission');
 
//connect with database 
$con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// chake connection
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>