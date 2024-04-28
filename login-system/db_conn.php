<?php
session_start();

$hostname = "localhost";
$username_db = "root";
$password_db = "";
$db_name = "net_db";
$conn = mysqli_connect($hostname, $username_db, $password_db, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['username']) && isset($_POST['password'])) {
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = validate($_POST['username']);
    $password = validate($_POST['password']);

    if (empty($username)) {
        header("location: login.php?error=Username is required");
        exit();
    } else if (empty($password)) {
        header("location: login.php?error=Password is required");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $row['username'];
            $_SESSION['password'] = $row['password'];
            header("location: dashboard.php");
        } else {
            header("location: login.php?error=Incorrect Username or Password");
            exit();
        }
    }
}

mysqli_close($conn);
?>
