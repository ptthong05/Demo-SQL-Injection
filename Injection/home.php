<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>


</body>
</html>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f4f4;
        }

        /* Thanh menu */
        .navbar {
            background: #2c3e50;
            color: white;
            padding: 12px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .menu a {
            color: white;
            margin-right: 20px;
            text-decoration: none;
            font-weight: bold;
        }

        .menu a:hover {
            text-decoration: underline;
        }

        /* Tài khoản */
        .account {
            position: relative;
            cursor: pointer;
        }

        .dropdown {
            display: none;
            position: absolute;
            right: 0;
            background: white;
            min-width: 160px;
            box-shadow: 0 0 8px rgba(0,0,0,0.2);
            border-radius: 5px;
            overflow: hidden;
        }

        .dropdown a {
            display: block;
            padding: 12px;
            color: #333;
            text-decoration: none;
        }

        .dropdown a:hover {
            background: #f1f1f1;
        }

        .account:hover .dropdown {
            display: block;
        }

        /* Nội dung */
        .content {
            padding: 30px;
        }
    </style>
</head>
<body>

<!-- Thanh điều hướng -->
<div class="navbar">
    <!-- Menu trái -->
    <div class="menu">
        <a href="#">Trang chủ</a>
        <a href="#">Giới thiệu</a>
        <a href="#">Liên hệ</a>
    </div>

    <!-- Góc phải -->
    <div class="account">
        Xin chào, <b><?= $_SESSION['name'] ?></b>
        <div class="dropdown">
            <a href="logout.php">Logout</a>
            <a href="delete_account.php"
                onclick="return confirm('Bạn có chắc chắn xoá tài khoản không?');">
                Xóa tài khoản
            </a>
        </div>
    </div>

</div>

    
</div>

<!-- Nội dung -->
<div class="content">
    <h2>Đây là trang chủ</h2>
</div>

</body>
</html>