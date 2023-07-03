<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/font.css">
    <title>21880213-Dang Vu Ngoc Giang</title>
</head>
<body>
    <?php 
        $pathB = "../template/21880213_vungB.php";
        $pathC = "../template/21880213_vungC.php";
        $pathD = "../template/21880213_vungD.php";
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
                    printf("Bài 11a");
                ?>
                <hr>
                <h3>Danh sách sinh viên trong nhóm</h3>
                <table class="table table-bordered fs-5 text text-white">
                    <tr>
                        <th>MSSV</th>
                        <th>Họ và tên</th>
                    </tr>
                    <tr>
                        <td>21880213</td>
                        <td>Đặng Vũ Ngọc Giang</td>
                    </tr>
                    <tr>
                        <td>21880219</td>
                        <td>Nguyễn Thị Hoàng</td>
                    </tr>
                </table>
                <hr>
                <h3>Yêu cầu 1</h3>
                    <img src="./img/YC01_01.png" alt="YC01_01.png">
                    <img src="./img/YC01_02.png" alt="YC01_02.png">
                    <img src="./img/YC01_03.png" alt="YC01_03.png">
                <hr>
                <h3>Yêu cầu 2</h3>
                    <img src="./img/YC02_01.png" alt="YC02_01.png">
                    <img src="./img/YC02_02.png" alt="YC02_02.png">
                    <img src="./img/YC02_03.png" alt="YC02_03.png">
                    <img src="./img/YC02_05.png" alt="YC02_05.png">
                    <img src="./img/YC02_04.png" alt="YC02_04.png">
                    
                <hr>
                <h3>Yêu cầu 3</h3>
                <img src="./img/YC03_01.png" alt="YC03_01.png">
                <img src="./img/YC03_02.png" alt="YC03_02.png">
                <img src="./img/YC03_03.png" alt="YC03_03.png">
                <img src="./img/YC03_04.png" alt="YC03_04.png">
            </div>
            <div class="box-A--pic-area box-B">

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