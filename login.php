<?php
if(isset($_POST["submit"])){
 if(!empty($_POST['name']) && !empty($_POST['password']))
{
$name = $_POST['name'];
$password = $_POST['password'];

$conn = new mysqli('localhost', 'root', 'kruti1827') or die (mysqli_error()); // DB Connection
$db = mysqli_select_db($conn, 'hostel') or die("DB Error"); // Select DB from database
//Selecting Database
$numrows=0;
if($numrows==0)
{
//Insert to Mysqli Query
$sql = "INSERT INTO login(name,password) VALUES('$name','$password's)";
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
