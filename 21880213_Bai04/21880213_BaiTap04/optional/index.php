<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">

    <title>21880213-Bai tap 04</title>
</head>
<body>
    <?php
        session_start();
        include('./Lib_21880213.php');
        $DSSV_21880213 = array();
        if(isset($_SESSION['dssv'])) {
            $DSSV_21880213 = unserialize($_SESSION['dssv']);
        } else {
            $DSSV_21880213 = TaoDuLieu::taoDSSV(rand(20, 100));
            $_SESSION['dssv'] = serialize($DSSV_21880213);
        }
    ?>
    <div class="mx-5 p-5">
        <h1><b>Bài tập 04 (yêu cầu mở rộng thêm - optional)</b></h1>
        <hr>
        <table class="table table-bordered fit-content">
            <tr>
                <th>Tống số sinh viên có trong dữ liệu: </th>
                <td>
                    <?php
                        $countSV = count($DSSV_21880213);
                        print("$countSV");
                    ?>
                </td>
                <td>&nbsp;</td>
            </tr>

            <tr>
                <th>Số lượng sinh viên tốt nghiệp (có ĐTB >= 5.0): </th>
                <td>
                <?php
                    $countSVTN = 0;
                    foreach ($DSSV_21880213 as $sv) {
                        if($sv->dtb >= 5.0) {
                            $countSVTN++;
                        }
                    }
                    print("$countSVTN");
                ?>
                </td>
                <td>
                    <a class="btn btn-success" href="./ds_svtotnghiep_21880213.php">Danh sách sinh viên tốt nghiệp >></a>
                </td>
            </tr>
            
            <tr>
                <th>Số lượng sinh viên chưa tốt nghiệp (có ĐTB < 5.0): </th>
                <td>
                    <?php
                        $countSVCTN = $countSV - $countSVTN;
                        print("$countSVCTN");
                    ?>
                </td>
                <td>
                    <a class="btn btn-success" href="./ds_svchuatotnghiep_21880213.php">Danh sách sinh viên chưa tốt nghiệp >></a>
                </td>
            </tr>
        </table>
        <a class="btn btn-danger btn-lg" href="../"><< Trở về</a>
        <a class="btn btn-success btn-lg" href="./taomoidssv.php">Tạo mới dữ liệu</a>
        <hr>
        <h3>Danh sách sinh viên</h3>
        <div class="student-list-optional-area table-responsive mx-5">
            <table class="student-list-table table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>MSSV</th>
                        <th>Avatar</th>
                        <th>Họ tên</th>
                        <th>Điểm trung bình</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $stt = 0;
                    foreach ($DSSV_21880213 as $sv) {
                        $stt++;
                        printf('<tr>');
                        printf("<td>$stt</td>");
                        printf("<td>$sv->mssv</td>");
                        printf("<td class=\"fit-content\"><img class=\"avatar-image\" src=\"$sv->avatarUrl\" alt=\"$sv->mssv\"></td>");
                        printf("<td>$sv->hoTen</td>");
                        printf("<td>$sv->dtb</td>");
                        printf('</tr>');
                    }
                ?>
                </tbody>
            </table>
        </div>
    </div>
    
</body>
</html>