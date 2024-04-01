<?php
require 'koneksi.php';

// Pastikan formulir sudah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $no_hp = $_POST["no_hp"];
    $jumlah_pesenan = $_POST["jumlah_pesenan"];
    $harga = 0; // Variabel untuk menyimpan harga per item
    $total_harga = 0; // Variabel untuk menyimpan total harga

    // Tentukan harga per item berdasarkan pesanan yang dipilih
    switch ($email) {
        case "Americano":
            $harga = 11000;
            break;
        case "Cappucino":
            $harga = 13000;
            break;
        case "Espresso":
            $harga = 8000;
            break;
        case "Latte":
            $harga = 12000;
            break;
        case "Caramel Macchiato":
            $harga = 12000;
            break;
        
        case "Mocca Coffe":
            $harga = 13000;
            break;
        case "Coffe Tarik":
            $harga = 14000;
            break;
        case "Coffe Aren":
            $harga = 14000;
            break;
        case "Red Velvet":
            $harga = 16000;
            break;
        case "Matcha Green Caramel":
            $harga = 18000;
            break;
        case "Hazelnut":
            $harga = 16000;
            break;
        case "Chocolate Caramel":
            $harga = 17000;
            break;
        case "Pandan Ice Caramel":
            $harga = 20000;
            break;
        case "Chocolate Milk":
            $harga = 22000;
            break;
        case "Chocolate Cheese":
            $harga = 23000;
            break;
        case "Vanilla Latte Caramel":
            $harga = 24000;
            break;
        // Tambahkan case untuk item lainnya dengan harga per item yang sesuai
        // ...
        default:
            $harga_per_item = 0; // Harga default jika tidak ada pesanan yang cocok
    }

    // Hitung total harga
    $total_harga = $harga * $jumlah_pesenan;

    // Buat dan jalankan query SQL untuk memasukkan data ke database
    $query_sql = "INSERT INTO kopi (nama, email, no_hp, jumlah_pesenan, total_harga) 
                VALUES ('$nama','$email', '$no_hp', '$jumlah_pesenan', '$total_harga')";

    if (mysqli_query($conn, $query_sql)) {
        // Jika pemasukan data berhasil, arahkan kembali ke halaman beranda atau tampilkan pesan sukses
        header("Location: index.html");
        echo "Pesanan Anda berhasil dikirim!";
        exit(); // Pastikan untuk keluar setelah mengarahkan pengguna atau menampilkan pesan sukses
    } else {
        // Jika terjadi kesalahan, tampilkan pesan error
        echo "Pendaftaran Gagal : " . mysqli_error($conn);
    }
} else {
    // Jika formulir tidak disubmit, tampilkan pesan kesalahan
    echo "<p>Maaf, terjadi kesalahan. Silakan coba lagi.</p>";
}
?>
