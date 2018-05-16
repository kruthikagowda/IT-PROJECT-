<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<style>
div.container {
    width: 100%;
    border: 1px black;
}
header, footer {
    padding: 1em;
    color: white;
    background-color: teal;
    clear: left;
    text-align: center;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: teal;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color:black;
}
ab 

.active {
    background-color:blue;
}
</style>
</head>
<title>LogIn</title>
<body>

<div class="container">

<header>
   <h1>BookBee</h1>
</header>
<br/>
<ul>
  <li><a href="home1L.html">Home</a></li>
  <li><a href="test1.php">login</a></li>
</ul>
<br/>
<br/>

<h2>Login</h2>
<form action="" method="post">
<fieldset>
<p>Student-ID: <input type="text"  placeholder="StudentID" name="StudentID" required></p>
<p>Password: <input type="password"  placeholder="Password" name="password" required></p>
<p>emailid: <input type="text"  placeholder="emailid" name="email" required></p>
<p><input type="submit" name="submit" value="create account"></p> 
	
</fieldset>
</form>
</center>


<?php
if(isset($_POST["submit"])){
 if(!empty($_POST['StudentID']) && !empty($_POST['password'])&& !empty($_POST['email']))
{
$StudentID = $_POST['StudentID'];
$password = $_POST['password'];
$email = $_POST['email'];
$conn = new mysqli('localhost', 'root', '9964208393') or die (mysqli_error()); // DB Connection
$db = mysqli_select_db($conn, 'bookbee') or die("DB Error"); // Select DB from database
//Selecting Database
$numrows=0;
if($numrows==0)
{
//Insert to Mysqli Query
$sql = "INSERT INTO login(StudentID,password,email) VALUES('$StudentID','$password','$email')";
$result = mysqli_query($conn, $sql);
//Result Message
if($result){
echo "Your Account Created Successfully";
}
else
{
echo "Failure!";
}
}
else
{
echo "That Username already exists! Please try again.";
}
}
else
{
?>
<!--Javascript Alert -->
<script>alert('Required all felds');</script>
<?php
}
}
?>
</body>
</html>

