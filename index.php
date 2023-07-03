<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/font.css">
    <title>21880213-Dang Vu Ngoc Giang</title>
</head>
<body>
    <?php 
        $pathB = "./template/21880213_vungB.php";
        $pathC = "./template/21880213_vungC.php";
        $pathD = "./template/21880213_vungD.php";
    ?>
    <div class="grid-container" id="main-container">
        <div class="grid-item box-C">
            <?php
                include_once($pathC);
            ?>
        </div>
        <div class="grid-item box-A">
            <div class="box-A--text-area">
                <?php
                    date_default_timezone_set('Asia/Ho_Chi_Minh');
                    echo("<div class=\"left\"><b>Ngày : </b></div>" . "<div class=\"right\">" . date("d-m-Y") . "</div>");
                    echo("<div class=\"left\"><b>Giờ : </b></div>" . "<div class=\"right\">" . date("h:i:s a") . "</div>");
                ?>
                <hr>
                <div class="left"><b>Họ tên sinh viên : </b></div>
                <div class="right">Đặng Vũ Ngọc Giang</div>
                <div class="left"><b>MSSV : </b></div>
                <div class="right">21880213</div>
                <div class="left"><b>Email :</b></div>
                <div class="right">dangvngiang@gmail.com</div>
                <hr>
                <div class="box-A--profile-link">
                    <a class="box-A--link-icon" href="https://www.facebook.com/pnt.giang">
                        <i class=" fa-brands fa-facebook fa-lg"></i>
                    </a>
                </div>
            </div>
            <div class="box-A--pic-area box-B">
                <?php
                    include_once($pathB);
                ?>
            </div>
        </div>
        <div class="grid-item box-D">
            <?php
                include_once($pathD);
            ?>
        </div>
    </div>
    <script src="./js/index.js"></script>
</body>
</html>