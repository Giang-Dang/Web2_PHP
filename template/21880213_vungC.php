<div class="box-C--title">
<?php
    $URL_ROOT_PATH = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/Web2-ASM02-21880213';
    print("<a href=\"" . $URL_ROOT_PATH . "\">Trang chủ " . "</a>");
?>
</div>
<hr>
<div class="box-C--text-area">
    <ul>
    <?php
        $urlHeadPath = is_dir('./template') ? "./" : "../";

        for($i = 1; $i <= 13; $i++) {
            //12a
            if($i == 12) {
                //12a
                $url = $urlHeadPath . "21880213_Bai" . $i ."a/index.php";
                $output = "<li class=\"box-C--link-item\"><a href=\"" . $url . "\">Bài " . $i . "a</a></li>";
                printf($output);
                continue;
            }
            //11a,b
            if($i == 11) {
                //11a
                $url = $urlHeadPath . "21880213_Bai" . $i ."a/index.php";
                $output = "<li class=\"box-C--link-item\"><a href=\"" . $url . "\">Bài " . $i . "a</a></li>";
                printf($output);
                //11b
                $url = $urlHeadPath . "21880213_Bai" . $i ."b/index.php";
                $output = "<li class=\"box-C--link-item\"><a href=\"" . $url . "\">Bài " . $i . "b</a></li>";
                printf($output);
                continue;
            }
            //10a
            if ($i == 10) {
                $url = $urlHeadPath . "21880213_Bai" . $i . "a/index.php";
                $output = "<li class=\"box-C--link-item\"><a href=\"" . $url . "\">Bài " . $i . "a</a></li>";
                printf($output);
                continue;
            }
            //7b
            if($i == 7) {
                $url = $urlHeadPath . "21880213_Bai" . $i ."b/index.php";
                $output = "<li class=\"box-C--link-item\"><a href=\"" . $url . "\">Bài " . $i . "b</a></li>";
                printf($output);
                continue;
            }
            //other cases
            $url = $urlHeadPath . "21880213_Bai" . sprintf("%02d", $i) ."/index.php";
            $output = "<li class=\"box-C--link-item\"><a href=\"" . $url . "\">Bài " . sprintf("%02d", $i) . "</a></li>";
            printf($output);
        }
    ?>
    </ul>
</div>