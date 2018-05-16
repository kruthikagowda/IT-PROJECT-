<?php
$dsn = 'mysql:host=localhost;dbname=hostel';
$username = 'root';
$password = 'kruti1827';
$options = [];
try {
$connection = new PDO($dsn, $username, $password, $options);
} catch(PDOException $e) {
}
