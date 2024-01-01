<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$servername = "localhost";
$username = "komputas_kematangtomat";
$password = "glcl9tvCuG";
$database = "komputas_kematangtomat";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
$sql = mysqli_query($conn, "SELECT * FROM tb_sensor ORDER BY id DESC LIMIT 1");
// $sql=mysqli_query($conn, "select * from tb_sensor");
$data=mysqli_fetch_array($sql);
$nilai= $data["sensor"];

echo $nilai; 
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
//mysqli_close($conn);
