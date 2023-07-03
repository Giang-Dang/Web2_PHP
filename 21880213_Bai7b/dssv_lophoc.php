<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">

    <title>21880213-Bai tap 04</title>
</head>
<body>
    <?php
        include_once('./data.php');
    ?>
    <div class="mx-5 p-5">
      <h1>
        <?php
          if(isset($_GET['tenlop'])){
            echo "Danh sách sinh viên lớp {$_GET['tenlop']}";
          } else {
            echo "Danh sách tất cả sinh viên";
          }
          
        ?>
      </h1>
      <hr>
      <div class="student-list-area--large table-responsive mx-5">
          <table class="student-list-table table table-bordered table-striped table-hover">
              <thead>
                  <tr>
                    <th>STT</th>
                    <th>MSSV</th>
                    <th>Avatar</th>
                    <th>Họ tên</th>
                    <th>Điểm trung bình</th>
                    <th>Lớp</th>
                  </tr>
              </thead>
              <tbody>
              <?php
                $stt = 0;
                if(isset($_GET['tenlop'])) {                  
                  for($i = 0; $i < count($arrDSSV); $i++) {
                    if($arrDSSV[$i]['Lop'] == $_GET['tenlop']) {
                      $stt++;
                      printf('<tr>');
                      printf("<td>$stt</td>");
                      printf("<td>{$arrDSSV[$i]['MSSV']}</td>");
                      printf("<td class=\"fit-content\"><img class=\"avatar-image\" src=\"{$arrDSSV[$i]['URL']}\" alt=\"{$arrDSSV[$i]['MSSV']}\"></td>");
                      printf("<td>{$arrDSSV[$i]['HoTen']}</td>");
                      printf("<td>{$arrDSSV[$i]['DTB']}</td>");
                      printf("<td>{$arrDSSV[$i]['Lop']}</td>");
                      printf('</tr>');
                    }
                  }
                } else {
                  for($i = 0; $i < count($arrDSSV); $i++) {
                    $stt++;
                    printf('<tr>');
                    printf("<td>$stt</td>");
                    printf("<td>{$arrDSSV[$i]['MSSV']}</td>");
                    printf("<td class=\"fit-content\"><img class=\"avatar-image\" src=\"{$arrDSSV[$i]['URL']}\" alt=\"{$arrDSSV[$i]['MSSV']}\"></td>");
                    printf("<td>{$arrDSSV[$i]['HoTen']}</td>");
                    printf("<td>{$arrDSSV[$i]['DTB']}</td>");
                    printf("<td>{$arrDSSV[$i]['Lop']}</td>");
                    printf('</tr>');
                  }
                }
              ?>
              </tbody>
          </table>
      </div>
      <hr>
      <div class="footer-nav">
        <a class="btn btn-danger btn-lg" href="../index.php"><b><< Trở về Trang Chủ Host</b></a>
        <a class="btn btn-danger btn-lg" href="./index.php"><b><< Trở về trang Bài 7b</b></a>
      </div>
    </div>
</body>
</html>