<?php
session_start();
$db_host="localhost";
$db_user="root";
$db_password="tiger";
$db_name="2015cse112";
$name=$_POST['name'];
$id=$_POST['id'];
$reason=$_POST['reason'];
		
$con=mysqli_connect($db_host,$db_user,$db_password,$db_name) or die("Error querying database");
$query="insert into outpass values('$id','$name','$reason');";
$result=mysqli_query($con,$query) or die("Error querying database");

echo "Done Successfully<br />";

?>