<!-- <?php
    require 'koneksi.php';
    $id = $_POST["id"];
    $nama = $_POST["nama"];
    $ulasan = $_POST["ulasan"];
    $penilaian = $_POST["penilaian"];

    $query_sql = "INSERT INTO review ( nama,  ulasan, penilaian) 
                VALUES ( '$nama','$ulasan', '$penilaian')";

    if (mysqli_query($conn, $query_sql)) {
        header("Location: index.html");
    } else {
        echo "Pendaftaran Gagal : " . mysqli_error($conn);
    } 
