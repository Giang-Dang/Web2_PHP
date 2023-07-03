<?php
# Lấy dữ liệu điều hướng
$page = 'trangchu';
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}

# chuẩn bị dữ liệu chung
$page_title = 'Dang Vu Ngoc Giang - 21880213';
$nav_items = '
    <li><a href="./index.php" class="active"><strong>Host sinh viên</strong></a></li>
    <li><a href="./template_02.php?page=trangchu" class="active"><strong>Trang chủ</strong></a></li>
    <li><a href="./template_02.php?page=sanpham" class="active"><strong>Sản phẩm</strong></a></li>
';
$template_file_path = './resource/template_02/';
$features_items = '';
$left_sidebar = '';
$carousel_items = '';

# Chuẩn bị data riêng cho website
switch ($page) {
    case 'trangchu':
        $left_sidebar = '';

        $carousel_items = '
            <div class="item active">
                <div class="col-sm-6">
                    <h1><span>S</span>inh viên</h1>
                    <h2>Đặng Vũ Ngọc Giang - 21880213</h2>
                    <p>Email: dangvngiang@gmail.com. </p>
                    <button type="button" class="btn btn-default get">Get it now</button>
                </div>
                <div class="col-sm-6">
                </div>
            </div>

            <div class="item">
                <div class="col-sm-6">
                    <h1><span>S</span>inh viên</h1>
                    <h2>Đặng Vũ Ngọc Giang - 21880213</h2>
                    <p>Email: dangvngiang@gmail.com. </p>
                    <button type="button" class="btn btn-default get">Get it now</button>
                </div>
                <div class="col-sm-6">
                </div>
            </div>
        ';
        $features_items = '';
        break;

    case 'sanpham':
        $left_sidebar = '';
        $carousel_items = '
            <div class="item active">
                <div class="col-sm-6">
                    <h1><span>E</span>-Shopping</h1>
                    <h2>Hardware</h2>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
                    <button type="button" class="btn btn-default get">Get it now</button>
                </div>
                <div class="col-sm-6">
                </div>
            </div>

            <div class="item">
                <div class="col-sm-6">
                    <h1><span>E</span>-Shopping</h1>
                    <h2>Hardware</h2>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
                    <button type="button" class="btn btn-default get">Get it now</button>
                </div>
                <div class="col-sm-6">
                </div>
            </div>
        ';

        $features_items = '
            <h2 class="title text-center">Features Items</h2>
        ';

        include('./resource/template_02/products.php');
        foreach ($products as $product) {
            $name = $product['name'];
            $price = $product['price'];
            $image = $product['image'];

            $product_html = "
                <div class='col-sm-4'>
                    <div class='product-image-wrapper'>
                        <div class='single-products'>
                            <div class='productinfo text-center'>
                                <img src='$image' alt='$name' />
                                <h2>$$price</h2>
                                <p>$name</p>
                                <a href='#' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a>
                            </div>
                            <div class='product-overlay'>
                                <div class='overlay-content'>
                                    <h2>$$price</h2>
                                    <p>$name</p>
                                    <a href='#' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class='choose'>
                            <ul class='nav nav-pills nav-justified'>
                                <li><a href='#'><i class='fa fa-plus-square'></i>Add to wishlist</a></li>
                                <li><a href='#'><i class='fa fa-plus-square'></i>Add to compare</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            ";
            $features_items .= $product_html;
        }
        break;
    default:
        $nav_items = '';
        $left_sidebar = '';
        $features_items = '';
        $carousel_items = '
            <div class="item active">
                <div class="col-sm-6">
                    <h1><span>S</span>inh viên</h1>
                    <h2>Đặng Vũ Ngọc Giang - 21880213</h2>
                    <p>Email: dangvngiang@gmail.com. </p>
                    <button type="button" class="btn btn-default get">Get it now</button>
                </div>
                <div class="col-sm-6">
                </div>
            </div>

            <div class="item">
                <div class="col-sm-6">
                    <h1><span>S</span>inh viên</h1>
                    <h2>Đặng Vũ Ngọc Giang - 21880213</h2>
                    <p>Email: dangvngiang@gmail.com. </p>
                    <button type="button" class="btn btn-default get">Get it now</button>
                </div>
                <div class="col-sm-6">
                </div>
            </div>
        ';
        break;
}



# nạp giao diện
include('./resource/template_02/index.php');
