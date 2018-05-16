<?php
//if(isset($_POST['enroll']))
//{
$link = mysqli_connect('localhost','root','kruti1827','hostel') or die("Connection Error");
$Name=$_POST['Name'];
$H_id=$_POST['H_id'];
$gender=$_POST['gender'];
$Password=$_POST['Password'];
$Email=$_POST['Email'];
$Contact_N=$_POST['Contact_N'];


$q1= "INSERT INTO Register (Name,H_id,gender,Password,Email,Contact_N) VALUES('$Name','$H_id','$gender','$Password','$Email','$Contact_N')";
mysqli_query($link,$q1) ;
//echo "Done";
header("location: login.html");
//}
?>
