<?php
session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    header("location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>DASHBOARD</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
    <p>This is the dashboard. You can put your dashboard content here.</p>
    <a href="logout.php">Logout</a>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script>
        // Initialization for ES Users
        import { Dropdown, Collapse, initMDB } from "mdb-ui-kit";
        initMDB({ Dropdown, Collapse });
    </script>
</body>
</html>
