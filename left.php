<?php
$database=mysqli_connect("localhost","root","","control_interface");
if($database)
{
   echo "<h1 > L </h1>"; //printing respective letter as given in question
}
else{
   echo "Database not connected.";
}
?>