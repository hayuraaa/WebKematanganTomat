<?php
include "ceksensor.php";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
	die("Database Connection failed: " . $conn->connect_error);
}

//ambil data
// Mengambil total status "matang"
$sqlMatang = "SELECT COUNT(*) AS total_matang FROM tb_sensor WHERE sensor = 'matang'";
$resultMatang = $conn->query($sqlMatang);
$rowMatang = $resultMatang->fetch_assoc();
$totalMatang = $rowMatang['total_matang'];

// Mengambil total status "mentah"
$sqlMentah = "SELECT COUNT(*) AS total_mentah FROM tb_sensor WHERE sensor = 'mentah'";
$resultMentah = $conn->query($sqlMentah);
$rowMentah = $resultMentah->fetch_assoc();
$totalMentah = $rowMentah['total_mentah'];

// Mengambil total keseluruhan
$totalKeseluruhan = $totalMatang + $totalMentah;

// // Mengambil data dari query parameter (GET)
// if (!empty($_GET['status1'])) {
// 	$status1 = $_GET['status1'];
// 	$sql = "INSERT INTO tb_sensor (sensor) VALUES ('" . $status1 . "')";

// 	if ($conn->query($sql) === TRUE) {
// 		echo "OK";
// 	} else 
// 	{
// 		echo "Error: " . $sql . "<br>" . $conn->error;
// 	}
// } else {
// 	echo "aaasds";
// }
$conn->close();
