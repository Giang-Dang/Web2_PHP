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
                    printf("Bài 11b");
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
                <h3>Tạo Database</h3>
                    <img src="./img/TaoDB.png" alt="TaoDB.png">
                <hr>
                <h3>Câu 1</h3>
                    <img src="./img/Cau1_a.png" alt="Cau1_a.png">
                    <img src="./img/Cau1_b.png" alt="Cau1_b.png">
                <hr>
                <h3>Câu 2</h3>
                    <img src="./img/Cau2_a.png" alt="Cau2_a.png">
                    <img src="./img/Cau2_b.png" alt="Cau2_b.png">  
                <hr>
                <h3>Câu 3</h3>
                    <img src="./img/Cau3_a.png" alt="Cau3_a.png">
                    <img src="./img/Cau3_b.png" alt="Cau3_b.png"> 
                <hr>
                <h3>Câu 4</h3>
                    <img src="./img/Cau4_a.png" alt="Cau4_a.png">
                    <img src="./img/Cau4_b.png" alt="Cau4_b.png">
                <hr>
                <h3>Câu 5</h3>
                    <img src="./img/Cau5_a.png" alt="Cau5_a.png">
                    <img src="./img/Cau5_b.png" alt="Cau5_b.png">
                <hr>
                <h3>Câu 6</h3>
                    <img src="./img/Cau6_a.png" alt="Cau6_a.png">
                    <img src="./img/Cau6_b.png" alt="Cau6_b.png">
                <hr>
                <h3>Câu 7</h3>
                <h4>Không chụp kết quả thực thi do chưa biết giá trị của biến</h4>
                    <img src="./img/Cau7.png" alt="Cau7.png">
                <hr>
                <h3>Câu 8</h3>
                <h4>Không chụp kết quả thực thi do chưa biết giá trị của biến</h4>
                    <img src="./img/Cau8.png" alt="Cau8.png">
                <hr>
                <h3>Câu 9</h3>
                    <img src="./img/Cau9_a.png" alt="Cau9_a.png">
                    <img src="./img/Cau9_b.png" alt="Cau9_b.png">
                <hr>
                <h3>Câu 10</h3>
                <h4>Hình = hình ảnh gốc + hình ảnh bổ sung</h4>
                    <img src="./img/Cau10_a.png" alt="Cau10_a.png">
                    <img src="./img/Cau10_b.png" alt="Cau10_b.png">
                    <img src="./img/Cau10_c.png" alt="Cau10_c.png">
                <hr>
                <h3>Câu 11</h3>
                <h4>Hình = hình ảnh gốc + hình ảnh bổ sung</h4>
                    <img src="./img/Cau11.png" alt="Cau11.png">
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