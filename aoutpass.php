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
$username = "username";
$password = "kruti1827";
$dbname = "hostel";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, name, reason FROM outpass";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " <br> Name: ". $row["name"]. " <br> Reason " . $row["reason"] . "<br>";
    }
} else {
    echo "0 results";
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
