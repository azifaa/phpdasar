<?php 
include 'connect.php';

session_start();

if (!isset($_SESSION['email'])) {
    echo "<script>alert('maaf, anda belum login!');</script>";
    echo "<script>window.location.href = 'login.php';</script>";
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body class="min-vh-100 d-flex align-items-center">
    <div class='card w-50 m-auto p-3'>
        <a href="logout.php" claas="btn btn-danger w-25">LOG OUT</a>
        <h3 class="text-center ">Data Produk</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Total</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php
                $sql = 'select * from produk';
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    while ($data = mysqli_fetch_assoc($result)) {
                        $id = $data['id'];
                        $nama = $data['nama'];
                        $jenis = $data['jenis'];
                        $harga = $data['harga'];
                        $jumlah = $data['jumlah'];
                        $total = $data['total'];
                        echo '
                            <tr>
                            <td>' . $nama . '</td>
                            <td>' . $jenis . '</td>
                            <td>' . $harga . '</td>
                            <td>' . $jumlah . '</td>
                            <td>' . $total . '</td>
                            <td claas="text-center">
                                <a href="update.php?id=' . $id . '" class="btn btn-sm btn-primary">Update</a>
                                <button onClick="hapus(' . $id . ')" class="btn btn-sm btn-danger">Delete</button>
                            </td>
                            </tr>
                        ';
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
    <script>
        function hapus(id) {
            console.log('Fungsi hapus dipanggil dengan id: ' + id);
            var yes = confirm('Yakin dihapus?');
            if (yes == true) {
                window.location.href = "delete.php?id=" + id;
            }
        }
    </script>
</body>

</html>