<?php  
include 'connect.php';  
 
session_start(); // Pastikan Anda sudah memanggil session_start() di file lain yang memproses login  
  
if (!isset($_SESSION['email'])) {  
    // Jika pengguna belum login, tampilkan pesan kesalahan dan arahkan mereka kembali ke halaman login  
    echo "<script>alert('Maaf, Anda belum login!');</script>";  
    echo "<script>window.location.href = 'login.php';</script>"; // Gantilah 'login.php' dengan nama halaman login Anda  
    exit;  
}  
 
$id = $_GET['id'];  
$get_data = "SELECT * FROM produk WHERE id=$id";  
$result_data = mysqli_query($conn, $get_data);  
$row = mysqli_fetch_assoc($result_data);  
$nama = $row['nama'];  
$jenis = $row['jenis'];  
$harga = $row['harga'];  
$jumlah = $row['jumlah'];  
$total = $row['total'];  
 
if (isset($_POST['submit'])) {  
    $nama = $_POST['name'];  
    $jenis = $_POST['jenis'];  
    $harga = $_POST['harga'];  
    $jumlah = $_POST['jumlah'];  
    $total = $_POST['total'];  
    $sql = "UPDATE produk SET nama='$nama', jenis='$jenis', harga='$harga', jumlah='$jumlah', total='$total' WHERE id=$id";  
    $result = mysqli_query($conn , $sql);  
    if ($result) {  
        header('location:read.php');  
    } else {  
        die($conn->connect_error);  
    }  
}  
?> 
<!DOCTYPE html> 
<html lang="en"> 
 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Document</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> 
</head> 
 
<body class="min-vh-100 d-flex align-items-center"> 
    <div class='card w-50 m-auto p-3'> 
        <h3 class="text-center">Update</h3> 
        <form method="post"> 
            <div class="mb-3"> 
                <label for="nama" class="form-label">Nama</label> 
                <input type="text" class="form-control" id="nama" name="name" value="<?php echo $nama ?>"> 
            </div> 
            <div class="mb-3"> 
                <label for="jenis" class="form-label">jenis</label> 
                <input type="text" class="form-control" id="jenis" name="jenis" value="<?php echo $jenis ?>"> 
            </div> 
            <div class="mb-3"> 
                <label for="harga" class="form-label">harga</label> 
                <input type="text" class="form-control" id="harga" name="harga" value="<?php echo $harga ?>"> 
            </div> 
            <div class="mb-3"> 
                <label for="jumlah" class="form-label">jumlah</label> 
                <input type="text" class="form-control" id="jumlah" name="jumlah" value="<?php echo $jumlah ?>"> 
            </div> 
            <div class="mb-3"> 
                <label for="total" class="form-label">Total</label> 
                <input type="text" class="form-control" id="total" name="total" value="<?php echo $total ?>"> 
            </div> 
            <button type="submit" class="btn btn-primary" name="submit">Submit</button> 
        </form> 
    </div> 
</body> 
 
</html>