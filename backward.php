<?php
$database=mysqli_connect("localhost","root","","control_interface");
if($database)//checking database connection
{
   echo "<h1 > B </h1>"; //printing respective letter as given in question
}
else{
   echo "Database not connected.";
}
?>