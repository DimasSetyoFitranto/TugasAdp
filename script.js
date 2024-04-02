// Toggle class active
const navbarNav = document.querySelector('.navbar-nav');
document.querySelector('#hamburger-menu').onclick = () => {
    navbarNav.classList.toggle('active');
};

// Klik di luar sidebar untuk menghilangkan nav
const hamburger = document.querySelector('#hamburger-menu');
document.addEventListener('click', function(e){
    if (!hamburger.contains(e.target) && !navbarNav.contains(e.target)) {
        navbarNav.classList.remove('active');
    }
});

document.addEventListener("DOMContentLoaded", function() {
    const pesanan = document.getElementById("pesanan");
    const jumlahPesanan = document.getElementById("jumlah_pesenan");
    const totalHarga = document.getElementById("total_harga");

    // Daftar harga untuk setiap produk
    const hargaProduk = {
        "Americano": 11000,
        "Cappucino": 13000,
        "Espresso": 8000,
        "Latte": 12000,
        "Caramel Macchiato": 13000,
        "Mocca Coffe": 13000,
        "Coffe Tarik": 14000,
        "Coffe Aren": 14000,
        "Red Velvet": 16000,
        "Matcha Green Caramel": 18000,
        "Hazelnut": 17000,
        "Chocolate Caramel": 17000,
        "Pandan Ice Caramel": 20000,
        "Chocolate Milk": 22000,
        "Chocolate Cheese": 23000,
        "Vanilla Latte Caramel": 24000,
        "Nasi Goreng": 20000,
        "Mie Goreng": 22000,
        "Sate Ayam": 30000,
        "Gado-Gado": 20000,
        "Bakso": 15000,
        "Soto Ayam": 15000,
        // Tambahkan harga produk lainnya di sini
    };

    // Event listener untuk memperbarui total harga
    pesanan.addEventListener("change", updateTotal);
    jumlahPesanan.addEventListener("change", updateTotal);

    function updateTotal() {
        const selectedProduct = pesanan.value;
        const quantity = jumlahPesanan.value;
        const pricePerItem = hargaProduk[selectedProduct];
        const totalPrice = pricePerItem * quantity;
        totalHarga.value = totalPrice;
    }
});

