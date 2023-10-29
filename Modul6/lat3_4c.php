<!DOCTYPE html>
<html>
<head>
<title>Order Summary</title>
</head>
<body>
<p><u>Order Summary</u></p>
<?php
if(isset($_COOKIE['cd_order']) && isset($_COOKIE['dvd_order'])) {
    $cd_order = $_COOKIE['cd_order'];
    $dvd_order = $_COOKIE['dvd_order'];
    
    echo "Ordered CD: " . $cd_order . " pieces <br>";
    echo "Ordered DVD: " . $dvd_order . " pieces <br>";
    
    echo '<a href="Lat3_4a.php">Edit Order</a>';
} else {
    echo "<p>No orders yet.</p>";
}
?>
</body>
</html>
