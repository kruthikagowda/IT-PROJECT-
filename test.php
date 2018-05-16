<html>
<head>
<style>
body
{
background-image:url()
}
div.container
{ width:100% border:1px black;
}
header,footer
{padding:1em; color:yellow; background-color:black;clear:left; text-align:center;
}
ul
{   list-styple-type:none; margin:0; padding:0; overflow:hidden; background-color:black;
}
li{ float:left;
}
li a
{display:block; color:yellow; text-align:center; padding:14px 16px; text-decoration: none;
}
li a:hover:not(.active)
{
background-color:white;
}
ab .active
{
background-color:white;
}
</style>
</head>
<title>login</title>
<body>
<div class="container">
<header>
<h1>BOOKBEE</h1>
</header>
<br/>
<ul> 
<li> 
<a href="home1L.html">HOME</a>
</li> 
 
<li> 
<a href="test1.php">LOGIN</a>
</li>
</ul>
<br/><br/>
<h2>LOGIN</h2>
<form action="" method="POST">
<fieldset>StudentID: <input type="text" placeholder="StudentID" name="StudentID" required> </p> <p>Password: <input type="Password" placeholder="Password" name="Password" required> </p> <p> <a href="branchL.html"><input type="submit" name="submit" value="Login"></a></p></fieldset></form></center>

<?php
if(isset($_POST["submit"])){
 if(!empty($_POST['StudentID']) && !empty($_POST['Password'])){
 $StudentID= $_POST['StudentID'];
 $Password = $_POST['Password'];
 //DB Connection
 $conn = new mysqli('localhost', 'root', '9964208393') or die(mysqli_error());
 //Select DB From database
 $db = mysqli_select_db($conn, 'bookbee') or die("database error");
 //Selecting database
 $query = mysqli_query($conn, "SELECT * FROM login WHERE StudentID='".$StudentID."' AND Password='".$Password."'") or die("table");
 $n = mysqli_num_rows($query);
 if($n!=0)
 {
 while($row = mysqli_fetch_assoc($query))
 {
 $StudentID=$row['StudentID'];
 
 $Password=$row['Password'];
 echo "<br/>".$StudentID."<br/>".$Password."<br/>";
 }
 if($StudentID == $StudentID && $Password == $Password)
 {
 session_start();
 $_SESSION['sess_StudentID']=$StudentID;
 //Redirect Browser
 header("Location:branchL.html");
 }
 }
 else
 {
 echo "Invalid Student Id or Password!";
 }
 }
 else
 {
 echo "Required All fields!";
 }
}
?>


</body>
</html>


