<html>
<head>
<title>Outpass</title>
<style>
body {
 background-image: url("campus.jpeg");
 background-repeat:no-repeat;
 background-size: 1400px 930px;
 color: white;
}
b.serif {
    font-family:"Times New Roman",Timer, serif;	
    color:black;
}
fieldset { 
    display: block;
    margin-left: 250px;
    margin-right:250px;
    padding-top: 30px;
    padding-bottom: 0px;
    background-color:#bce5ec;
    
    border-color:#F0F8FF;
}
.button {
    text-align:center;
    background-color:transparent;
    padding: 14px 18px;
    border-radius: 12px;
}
.button1 {
    background-color: transparent;
    color:#F0F8FF;
}

.button1:hover {
    background-color:#A9A9A9;
    color: black;
    
}
.col-container {
    display: table;
    width: 50%;
    font-family: "Raleway", Arial, Helvetica, sans-serif;
    font-size: 20px;
    color:#A9A9A9;
}
.col {
    display: table-cell;
    font-style: normal;
    font-family: "Times New Roman",serif;
    color:black;
}

</style>
</head>
<body>
<center>
<br/><br/><br/>
<center>
<fieldset>
<br/>
<font size="5" color="teal"><b>OUTPASS</b></font>
<br/><br/><br/>
<div class="col-container">
<center>
<?php
$servername = "localhost";
$username = "root";
$password = "kruti1827";
$dbname = "hostel";

$id=$_POST['id'];
$name=$_POST['name'];
$checkIn=$_POST['ci'];
$checkOut=$_POST['co'];

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO status(id, name, check_in, check_out) VALUES ($id, $name, $checIn, $checkOut)";
$result = $conn->query($sql);

echo "Successful";
}

$conn->close();
?> 

</center>
</div>

<button onclick="window.location.href='main.html'" class="button button1"><b>Back</b></button>
<br/><br/><br/>
</fieldset>
<center>
<br/><br/><br/>
</body>
</html>