<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("sql302.epizy.com", "epiz_28586994", "Saxm8ksiSgl4I7", "epiz_28586994_assignment001");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
} ?>
