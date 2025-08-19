<?php
session_start();

// Koneksi database
$host = "localhost";
$user = "root";   // default xampp
$pass = "";       // default kosong
$db   = "db_desa";

$koneksi = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Jika logout
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: index.php");
    exit;
}

// Jika sudah login → arahkan ke halaman sesuai role
if (isset($_SESSION['role'])) {
    if ($_SESSION['role'] == "admin") {
        echo "<h2>Selamat Datang Admin, ".$_SESSION['username']."!</h2>";
        echo "<a href='?logout'>Logout</a>";
        exit;
    } elseif ($_SESSION['role'] == "pak_rt") {
        echo "<h2>Halo Pak RT, ".$_SESSION['username']."!</h2>";
        echo "<a href='?logout'>Logout</a>";
        exit;
    } elseif ($_SESSION['role'] == "user") {
        echo "<h2>Selamat Datang Warga, ".$_SESSION['username']."!</h2>";
        echo "<a href='?logout'>Logout</a>";
        exit;
    }
}

// Proses login
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']); // sesuai db (MD5)

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($koneksi, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        $_SESSION['username'] = $row['username'];
        $_SESSION['role'] = $row['role'];

        header("Location: index.php");
        exit;
    } else {
        echo "<script>alert('Username atau Password salah!');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Multiuser</title>
</head>
<body>
    <h2>Login Sistem Desa</h2>
    <form method="post">
        <label>Username</label><br>
        <input type="text" name="username" required><br><br>

        <label>Password</label><br>
        <input type="password" name="password" required><br><br>

        <button type="submit" name="login">Login</button>
    </form>
</body>
</html>
