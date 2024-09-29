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
    Successfully Logged in @<?php
// Return current date from the remote server
$timestamp = time();
echo(date("F d, Y h:i:s", $timestamp));
?>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>
