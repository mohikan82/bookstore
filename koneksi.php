<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "storebook";

// Create connection
$koneksi = new mysqli($servername, $username, $password, $database);

// Check connection
if ($koneksi->connect_error) {
  die("Koneksi gagal: " . $koneksi->connect_error);
}
echo "Koneksi tersambung";
?>