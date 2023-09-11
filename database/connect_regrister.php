<?php  
$servername = "localhost:3306";  
$username_db = "root";  
$password_db = "";  
$dbname= "db_sekolah";  
  
$email = isset($_POST['email']) ? $_POST['email'] : null;
$username = isset($_POST['username']) ? $_POST['username'] : null;
$passsword = isset($_POST['passsword']) ? $_POST['passsword'] : null;
  
  
$conn = new mysqli($servername, $username_db, $password_db, $dbname);  
  
if ($conn->connect_error) {  
    die("Koneksi database gagal: " . $conn ->connect_error);  
}else{  
    $stmt = $conn->prepare("INSERT INTO admin(email, username, password) VALUES (?, ?, ?)");  
    $stmt->bind_param("sss", $email, $username, $password);  
    $stmt->execute();  
    echo "Registrasi berhasil";  
    $stmt->close();  
    $conn->close();  
  
}  
?>