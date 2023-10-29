<?php
session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login.php");
    exit();
}

$cd_order = isset($_COOKIE['cd_order']) ? $_COOKIE['cd_order'] : 0;
$dvd_order = isset($_COOKIE['dvd_order']) ? $_COOKIE['dvd_order'] : 0;

if(isset($_POST['cd_order']) && isset($_POST['dvd_order'])) {
    $cd_order = $_POST['cd_order'];
    $dvd_order = $_POST['dvd_order'];
    
    setcookie("cd_order", $cd_order);
    setcookie("dvd_order", $dvd_order);
    header("Location: Lat3_4c.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Order Form</title>
</head>
<body>
<form action="Lat3_4b.php" method="post">
    <p> Order CD, amount:
    <input type="text" name="cd_order" value="<?php echo $cd_order; ?>" size="2" maxlength="2">
    </p>
    <p> Order DVD, amount:
    <input type="text" name="dvd_order" value="<?php echo $dvd_order; ?>" size="2" maxlength="2">
    </p>
    <input type="submit" value="Add To Cart" name="submit">
</form>
<a href="logout.php">Logout</a> 
</body>
</html>
