<?php
// Konfigurasi koneksi ke database
$servername = "localhost";
$database = "kopi";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Membuat database
$sql_create_db = "CREATE DATABASE IF NOT EXISTS pesanan_db";
if ($conn->query($sql_create_db) === TRUE) {
    echo "Database berhasil dibuat atau sudah ada.";
} else {
    echo "Error creating database: " . $conn->error;
}

// Memilih database yang akan digunakan
$conn->select_db("pesanan_db");

// Membuat tabel pesanan
$sql_create_table = "CREATE TABLE IF NOT EXISTS pesanan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(255) NOT NULL,
    pesanan VARCHAR(255) NOT NULL,
    jumlah_pesanan INT NOT NULL,
    no_hp VARCHAR(20) NOT NULL
)";
if ($conn->query($sql_create_table) === TRUE) {
    echo "Tabel pesanan berhasil dibuat atau sudah ada.";
} else {
    echo "Error creating table: " . $conn->error;
}

// Menutup koneksi
$conn->close();
?>
