<?php 
include 'config/connect.php';

$username = $_POST['username']; 
$password = $_POST['password'];

$query = "SELECT * FROM Siswa WHERE ussername ='$username' AND password ='$password'"; 
$result = mysqli_query($is_connect, $query);

if (mysqli_num_rows($result) > 0) {
    session_start();
    $_SESSION['username'] = $username; 
    header('location: index.php'); 
} else {
    echo "Username or password is incorrect";
}
?>
