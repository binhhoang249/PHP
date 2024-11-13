
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    session_start();
    if (isset($_SESSION['informations'])) {
        $lastInfo = end($_SESSION['informations']);
        echo "Xin chào: " . $lastInfo['name'] . "<br>";
        echo "Tên đăng nhập là: " . $lastInfo['name_login'] . "<br>";
    } else {
        echo "Không có thông tin đăng nhập.";
    }
    ?>
    <a href="sell.php">Cancel</a>
</body>
</html>
