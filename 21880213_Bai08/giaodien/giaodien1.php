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

    <link rel="stylesheet" href="./css/bai08.css">
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
                    printf("Bài 8");
                ?>
                <hr>
                <section class="bg-body text-dark fs-5">
                    <?php
                        echo $menu;
                    ?>
                    <div class="Vung-G-TopC m-3">
                        <?php
                            echo $VungG_TopC;
                        ?>
                    </div>
                    <?php
                        echo $hr_TopC_BottomC;
                    ?>
                    <?php
                        echo $VungG_BottomC_header;
                    ?>
                    <div class="Vung-G-BottomC d-flex justify-content-around flex-wrap pt-1 pb-4 line-height-1-5em">
                        <?php
                            echo $VungG_BottomC_1;
                            echo $VungG_BottomC_2;
                            echo $VungG_BottomC_3;
                            echo $VungG_BottomC_4;
                            echo $VungG_BottomC_5;
                            echo $VungG_BottomC_6;
                        ?>
                    </div>
                </section>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>