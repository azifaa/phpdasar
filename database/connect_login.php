<?php  
$servername = "localhost:3306";  
$username_db = "root";  
$password_db = "";  
$dbname= "db_sekolah"; 

$email = $_POST['email'];
$password = $_POST['password'];

$conn = new mysqli($servername, $username_db, $password_db, $database_name);

if ($con->connect_error) {
    die("KONESI DATABASE GAGAL: " . $conn->connect_error);
}else{
    $stmt = $conn->prepare("select ' FROM ADMIN where email = ? ");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if ($stmt_result->num_rows > 0) {
        $data = $stmt_result->fetch_assoc();
        if ($data['password'] === $password) {
           echo "<h2>Login Berhasil, Halo " . $data['username'] . "</h2>";
        } else {
            echo "<h2>Email Atau Password salah</h2>";
        }
    } else {
        echo "<h2>Email Atau Password salah</h2>";
    }
}
?>              