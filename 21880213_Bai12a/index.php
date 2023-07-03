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
    <?php
        include_once("./connectDB.php");
        include_once("./process_data.php");
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
                    printf("Bài 12");
                ?>
                <hr>
                <table class="table table-bordered table-hover text-white fs-5 lh-sm">
                    <tr>
                        <th scope="row">Họ và tên: </th>
                        <td>Đặng Vũ Ngọc Giang</td>
                    </tr>
                    <tr>
                        <th scope="row">MSSV: </th>
                        <td>21880213</td>
                    </tr>
                    <tr>
                        <th scope="row">Thời gian làm bài: </th>
                        <td>22:30 01/04/2023</td>
                    </tr>
                    <tr>
                        <th scope="row">Email: </th>
                        <td>dangvngiang@gmail.com</td>
                    </tr>
                    <tr>
                        <th scope="row">Facebook: </th>
                        <td><a class="text-warning" href="https://www.facebook.com/pnt.giang/">Link</a></td>
                    </tr>
                </table>
                <hr>
                <table class="table table-bordered table-hover text-white fs-5 lh-sm">
                    <tr>
                        <th scope="col">Mã môn</th>
                        <th scope="col">Tên môn</th>
                        <th scope="col">Số lượng sinh viên đậu</th>
                        <th scope="col">Số lượng sinh viên rớt</th>
                        <th scope="col">Link đến danh sách sinh viên</th>
                    </tr>
                    <?php
                    foreach($tenmon as $mamh => $tenmh) {
                        $link = "./DSSV_MSSV_Mon_$mamh.php";
                        print('<tr>');
                        print("<td>$mamh</td>");
                        print("<td>$tenmh</td>");
                        print("<td>{$sosinhvien_dau_mon[$mamh]}</td>");
                        print("<td>{$sosinhvien_rot_mon[$mamh]}</td>");
                        print("<td><a class='text-warning' href=$link>xem chi tiết</a></td>");
                        print('</tr>');
                    }
                    ?>
                </table>
            </div>
            <div class="box-A--pic-area box-B">
                <img class="box-B--profile-image" src="../images/profile_pic.jpg" alt="Profile picture">
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