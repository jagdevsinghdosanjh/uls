<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
    <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
    Successfully Logged in on:<?php
// Return current date from the remote server
$today = date("d/m/Y");
echo $today;
?>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>
