<?php
session_start();
$_SESSION["H_id"]=0;
$link = mysqli_connect("localhost", "root", "kruti", "hostel") or die("Connection Error");
$hid=$_POST['H_id'];
$query="select hostel_id from confirm where hostel_id = '$H_id'";
$res=mysqli_query($link,$query) or die("ERROR");
$r=mysqli_fetch_array($res);
if($r[0]==$password){
session_start();
$_SESSION["H_id"]=$id;
$_SESSION["Name"]=1;
header("location: enroll.php");
}

elseif($r[0]==NULL)
{
die("invalid user");
}
else
{
die ("invalid password");
}
?>
