<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pesanan</title>
</head>
<body>
    <h1>Konfirmasi Pesanan Anda</h1>
    <form action="submit_contact.php" method="post">
    
        <h2>Detail Pesanan:</h2>
        <ul>
            <li><strong>Nama:</strong> <?php echo $_POST['nama']; ?></li>
            <li><strong>Pesanan:</strong> <?php echo $_POST['pesanan'] ; ?></li>
            <li><strong>Jumlah Pesanan:</strong> <?php echo $_POST['jumlah_pesenan']; ?></li>
            <li><strong>Nomor HP:</strong> <?php echo $_POST['no_hp']; ?></li>
            <li><strong>Total Harga:</strong> <?php echo calculateTotalPrice($_POST['pesanan'], $_POST['jumlah_pesenan']); ?></li>
        </ul>
        
        
        <p>Terima kasih telah melakukan pemesanan. Kami akan segera memproses pesanan Anda.</p>
        <a href="index.html">Kembali ke beranda</a>
        
    </form>
    
    
    
    <?php
    function calculateTotalPrice($item, $quantity) {
        
        // Tambahkan logika untuk menghitung total harga berdasarkan item dan jumlahnya
        $harga = 0;
        switch ($item) {
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
                $harga = 13000;
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
            case "Soto Ayam":
                $harga = 15000;
                break;
            case "Nasi Goreng":
                $harga = 20000;
                break;
    
            // Tambahkan lebih banyak kasus untuk item lain jika diperlukan
            default:
                $harga = 0;
        }
        return $harga * $quantity;
    }
    ?>
</body>
</html>
