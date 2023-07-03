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
                    printf("<h1>Bài 12</h1>");
                ?>
                <?php
                    include_once("./connectDB.php");
                    include_once("./process_data.php");
                    $mamh = 5;
                    $sql_mh[$mamh] = "select * from sinhvien sv join dkhoc dk on sv.MSSV = dk.masv where dk.mamh = $mamh";
                    $query_res_mh[$mamh] = mysqli_query($db_connection, $sql_mh[$mamh]);
                ?>
                <hr>
                <h3>
                    <?php
                    print("<h3 class='text-warning'><strong>Môn {$tenmon[$mamh]}</strong></h3>");
                    ?>
                </h3>
                <a class="btn btn-danger btn-lg" href="./index.php">Trở về</a>
                
                <hr>
                <h4 class="text-warning"><strong>Danh sách sinh viên đậu</strong></h4>
                <?php
                    if ($sosinhvien_dau_mon[$mamh] > 0) {
                        print('<table class="table table-bordered table-hover fs-5 text-white">');
                        print('<tr><th scope="col">STT</th><th scope="col">MSSV</th><th scope="col">Họ Tên</th><th scope="col">Điểm môn học</th><th scope="col">ĐTB</th></tr>');
                        $count_dau = 0;
                        $sum_diemmh_dau = 0;
                        $sum_dtb_dau = 0;
                        while($row = mysqli_fetch_assoc($query_res_mh[$mamh])) {
                            if($row['Diem'] >= 5.0) {
                                $count_dau++;
                                $sum_dtb_dau += $row['DTB'];
                                $sum_diemmh_dau += $row['Diem'];
                                print("<tr><td>$count_dau</td><td>{$row['MSSV']}</td><td>{$row['TenSV']}</td><td>{$row['Diem']}</td><td>{$row['DTB']}</td></tr>");
                            }
                        }
                        print("</table>");
                        $avg_dtb_dau = $sum_dtb_dau / $count_dau;
                        $avg_diemmh_dau = $sum_diemmh_dau / $count_dau;
                        print("<h5>Điểm trung bình môn học của tất cả sinh viên đậu là: <strong>$avg_diemmh_dau</strong></h5>");
                        print("<h5>Trung bình của tất cả điểm trung bình của sinh viên đậu là: <strong>$avg_dtb_dau</strong></h5>");
                    } else {
                        print('<h5>Không có sinh viên nào đậu</h5>');
                    }
                ?>
                <hr>
                <h4 class="text-warning"><strong>Danh sách sinh viên rớt</strong></h4>
                <?php
                    if ($sosinhvien_rot_mon[$mamh] > 0) {
                        mysqli_data_seek($query_res_mh[$mamh], 0);
                        print('<table class="table table-bordered table-hover fs-5 text-white">');
                        print('<tr><th scope="col">STT</th><th scope="col">MSSV</th><th scope="col">Họ Tên</th><th scope="col">Điểm môn học</th><th scope="col">ĐTB</th></tr>');
                        $count_rot = 0;
                        $sum_diemmh_rot = 0;
                        $sum_dtb_rot = 0;
                        while($row = mysqli_fetch_assoc($query_res_mh[$mamh])) {
                            if($row['Diem'] < 5.0) {
                                $count_rot++;
                                $sum_dtb_rot += $row['DTB'];
                                $sum_diemmh_rot += $row['Diem'];
                                print("<tr><td>$count_rot</td><td>{$row['MSSV']}</td><td>{$row['TenSV']}</td><td>{$row['Diem']}</td><td>{$row['DTB']}</td></tr>");
                            }
                        }
                        print("</table>");
                        $avg_dtb_rot = $sum_dtb_rot / $count_rot;
                        $avg_diemmh_rot = $sum_diemmh_rot / $count_rot;
                        print("<h5>Điểm trung bình môn học của tất cả sinh viên đậu là: <strong>$avg_diemmh_rot</strong></h5>");
                        print("<h5>Trung bình của tất cả điểm trung bình của sinh viên đậu là: <strong>$avg_dtb_rot</strong></h5>");
                    } else {
                        print('<h5>Không có sinh viên nào rớt</h5>');
                    }
                ?>
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