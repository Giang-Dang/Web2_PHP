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
      $DSSV_21880213 = unserialize($_SESSION['dssv']);
    ?>
    <div class="mx-5 p-5">
      <h1>Danh sách sinh viên chưa tốt nghiệp (yêu cầu mở rộng thêm - optional)</h1>
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
                  </tr>
              </thead>
              <tbody>
              <?php
                $stt = 0;
                foreach ($DSSV_21880213 as $sv) {
                  if($sv->dtb < 5.0) {
                    $stt++;
                    printf('<tr>');
                    printf("<td>$stt</td>");
                    printf("<td>$sv->mssv</td>");
                    printf("<td class=\"fit-content\"><img class=\"avatar-image\" src=\"$sv->avatarUrl\" alt=\"$sv->mssv\"></td>");
                    printf("<td>$sv->hoTen</td>");
                    printf("<td>$sv->dtb</td>");
                    printf('</tr>');
                  }
                }
              ?>
              </tbody>
          </table>
      </div>
      <hr>
      <div class="footer-nav">
        <a class="btn btn-danger btn-lg" href="./index.php"><b><< Trở về</b></a>
      </div>
    </div>
</body>
</html>