<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/style.css? v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="header1">
                <div class="logouser">
                    <img src="../../assets/images/logoad.png" alt="Ảnh">
                </div>
                <div class="searchuser">
                    <input type="text" name="tensp" placeholder="Tìm kiếm...">
                    <button><a href=""><i class="fa-solid fa-magnifying-glass"></i></a></button>
                </div>
                <div class="user">
                    <div class="cart">
                        <a href="?act=giohang"><i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i></a>
                    </div>
                    <div class="account">
                        <?php
                        if (isset($_SESSION["user"]) || isset($_SESSION["admin"])) {
                        ?>
                            <a href="?act=trangcanhan"><i class="fa-regular fa-user" style="color: #ffffff;"></i></a>
                            <a href="?act=dangxuat"><i class="fa-solid fa-right-from-bracket" style="color: #ffffff;"></i></a>
                        <?php
                        } else {
                        ?>
                            <a href="?act=taikhoan"><i class="fa-regular fa-user" style="color: #ffffff;"></i></a>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="menubg">
                <div class="menuuser">
                    <ul>
                        <li><a href="?act=trangchu">Trang Chủ</a></li>
                        <li><a href="">Giới Thiệu</a></li>
                        <li><a href="">Sản Phẩm</a></li>
                        <li><a href="">Theo Dõi Đơn Hàng</a></li>
                        <li><a href="">Phụ Kiện Khác</a></li>
                    </ul>
                </div>
            </div>
            <div class="menuuser1">
                <div class="bm">
                    <div class="banner">
                        <a href="">
                            <img src="../../assets/images/bannerusser.jpg" alt="">
                        </a>

                    </div>
                    <?php
                    if (!isset($_SESSION["admin"])) {
                    ?>
                        <div class="danhmucus">
                            <a href="">
                                <div class="icondm">
                                    <span class="material-symbols-outlined">ev_charger</span>
                                </div>
                                <div class="namedm">
                                    <p>Bộ Sạc/Củ Sạc</p>
                                </div>
                            </a>
                            <a href="">
                                <div class="icondm">
                                    <span class="material-symbols-outlined">cable</span>
                                </div>
                                <div class="namedm">
                                    <p>Cáp Sạc</p>
                                </div>
                            </a>
                            <a href="">
                                <div class="icondm">
                                    <span class="material-symbols-outlined">speaker</span>
                                </div>
                                <div class="namedm">
                                    <p>Loa Bluetooth</p>
                                </div>
                            </a>
                            <a href="">
                                <div class="icondm">
                                    <span class="material-symbols-outlined">memory</span>
                                </div>
                                <div class="namedm">
                                    <p>Bộ Nhớ</p>
                                </div>
                            </a>
                            <a href="">
                                <div class="icondm">
                                    <span class="material-symbols-outlined">smartphone</span>
                                </div>
                                <div class="namedm">
                                    <p>Ốp Lưng</p>
                                </div>
                            </a>
                            <a href="">
                                <div class="icondm">
                                    <span class="material-symbols-outlined">headphones</span>
                                </div>
                                <div class="namedm">
                                    <p>Tai Nghe</p>
                                </div>
                            </a>
                            <a href="">
                                <div class="icondm">
                                    <span class="material-symbols-outlined">biotech</span>
                                </div>
                                <div class="namedm">
                                    <p>Giá Đỡ Điện Thoại</p>
                                </div>
                            </a>
                            <a href="">
                                <div class="icondm">
                                    <span class="material-symbols-outlined">phone_iphone</span>
                                </div>
                                <div class="namedm">
                                    <p>Cường Lực</p>
                                </div>
                            </a>
                        </div>
                    <?php
                    } else {
                    ?>
                        <div class="danhmucus">
                            <a href="?act=qldanhmuc">
                                <div class="icondm">
                                    <i class="fa-solid fa-list" style="color: #ffffff;"></i>
                                </div>
                                <div class="namedm">
                                    <p>Danh Mục</p>
                                </div>
                            </a>
                            <a href="?act=qlsanpham">
                                <div class="icondm">
                                    <i class="fa-brands fa-product-hunt" style="color: #fcfcfc;"></i>
                                </div>
                                <div class="namedm">
                                    <p>Sản Phẩm</p>
                                </div>
                            </a>
                            <a href="?act=qldonhang">
                                <div class="icondm">
                                    <i class="fa-solid fa-money-bill" style="color: #ffffff;"></i>
                                </div>
                                <div class="namedm">
                                    <p>Đơn Hàng</p>
                                </div>
                            </a>
                            <a href="?act=qlkhachhang">
                                <div class="icondm">
                                    <i class="fa-solid fa-user" style="color: #ffffff;"></i>
                                </div>
                                <div class="namedm">
                                    <p>Khách Hàng</p>
                                </div>
                            </a>
                            <a href="?act=qlbinhluan">
                                <div class="icondm">
                                <i class="fa-solid fa-comment" style="color: #ffffff;"></i>
                                </div>
                                <div class="namedm">
                                    <p>Bình Luận</p>
                                </div>
                            </a>
                            <a href="?act=qlmagiamgia">
                                <div class="icondm">
                                    <i class="fa-solid fa-tag" style="color: #ffffff;"></i>
                                </div>
                                <div class="namedm">
                                    <p>Mã Giảm Giá</p>
                                </div>
                            </a>
                            <a href="?act=qlthongke">
                                <div class="icondm">
                                <i class="fa-solid fa-chart-simple"></i>
                                </div>
                                <div class="namedm">
                                    <p>Thống Kê</p>
                                </div>
                            </a>
                        </div>
                    <?php
                    }
                    ?>

                </div>
            </div>
        </div>