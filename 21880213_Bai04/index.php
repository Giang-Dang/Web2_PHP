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
        include_once('./Data4_21880213.php');
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
                <h3 class="no-margin">Bài 4</h3>
                <hr>
                <p class="font-size-1-5em line-height-1-5em">
                    <b>- Tổng số sinh viên có trong dữ liệu: </b>
                    <?php
                        $countSV = count($DSSV_21880213);
                        print("$countSV");
                    ?>
                </p>
                <p class="font-size-1-5em line-height-1-5em">
                    <b>- Số lượng sinh viên tốt nghiệp (có ĐTB >= 5.0): </b>
                    <?php
                        $countSVTN = 0;
                        foreach ($DSSV_21880213 as $sv) {
                            if($sv->dtb >= 5.0) {
                                $countSVTN++;
                            }
                        }
                        print("$countSVTN");
                    ?>
                </p>
                <p class="font-size-1-5em line-height-1-5em">
                    <b>- Số lượng sinh viên chưa tốt nghiệp (có ĐTB < 5.0): </b>
                    <?php
                        $countSVCTN = $countSV - $countSVTN;
                        print("$countSVCTN");
                    ?>
                </p>
                <a class="text-warning" href="./21880213_BaiTap04/">Link đến danh sách sinh viên</a>
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
</body>
</html>