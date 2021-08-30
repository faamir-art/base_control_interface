<?php
$database=mysqli_connect("localhost","root","","control_interface"); //after database created in phpmyadmin connection is established through query
if($database) //checking database connection
{
   echo "<h1 > F </h1>"; //printing respective letter as given in question
}
else{
   echo "Database not connected.";
}
?>

