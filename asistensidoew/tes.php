<!-- $conn = mysqli_connect('localhost', 'username', 'password', 'database_name');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$result = mysqli_query($conn, 'SELECT * FROM users');
while ($row = mysqli_fetch_assoc($result)) {
    // Do something with the row data
}
if (!$result) {
    die("Query failed: " . mysqli_error($conn));
} -->
<?php
// Database connection establishment
$con=mysqli_connect("localhost","stb227"," ","stb227");

// Check connection
if (mysqli_connect_errno($con)) {
    echo "MySQL database connection failed: " . mysqli_connect_error();
}
$nama = $_POST['nama'];
$stb = $_POST['stb'];
$kelas = $_POST['kelas'];
$makanan = $_POST['makanan'];
$minuman = $_POST['minuman'];


// Insert
mysqli_query($con,"INSERT INTO mhs (stb, nama, kelas)
    VALUES ($nama, $stb, $kelas)")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran</title>
</head>
<body>
    <div>
        <div>
            Harga bayar :
            <input type="number" name="number" id="number">
        </div>
        <div>
            id pesanan:
            <input type="text" name = "id">
            <?php
            $id_Pesanan = $_POST['stb'];
            echo ($id_Pesanan) ? $id_Pesanan : " ";
            ?>
        </div>
        <div>
            
        </div>
    </div>
</body>
</html>