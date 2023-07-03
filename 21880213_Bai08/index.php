<?php
#Lấy dữ liệu điều hướng
$p = 'trangchu';
if(isset($_GET['p']))
    $p = $_GET['p'];

#Chuẩn bị dữ liệu chung
$menu = '<nav class="navbar navbar-dark bg-primary navbar-expand-sm" style="background-color: #e3f2fd;">
<div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link fs-4 text-white" aria-current="page" href="./index.php?p=trangchu">Trang chủ</a>
        </li>
        <li class="nav-item">
            <a class="nav-link fs-4 text-white" href="./index.php?p=gioithieu">Giới thiệu</a>
        </li>
        <li class="nav-item">
            <a class="nav-link fs-4 text-white" href="./index.php?p=hinhanh">Hình ảnh</a>
        </li>
    </ul>
    </div>
</div>
</nav>';

#Chuẩn bị data cho website
$VungG_TopC = '';
$hr_TopC_BottomC = '';
$VungG_BottomC_1 = '';
$VungG_BottomC_2 = '';
$VungG_BottomC_3 = '';
$VungG_BottomC_4 = '';
$VungG_BottomC_5 = '';
$VungG_BottomC_6 = '';

switch ($p) {
    case 'trangchu':
        $VungG_TopC = '
            <div class="left"><b>Họ tên sinh viên : </b></div>
            <div class="right">Đặng Vũ Ngọc Giang</div>
            <div class="left"><b>MSSV : </b></div>
            <div class="right">21880213</div>
            <div class="left"><b>Email :</b></div>
            <div class="right">dangvngiang@gmail.com</div>
        ';
        $hr_TopC_BottomC = '<hr>';
        $VungG_BottomC_header ='';
        $VungG_BottomC_1 = '
            <a href="https://www.facebook.com/pnt.giang/"><i class="fa-brands fa-facebook fa-2xl"></i></a>
        ';
        $VungG_BottomC_2 = '
            <a href="https://github.com/Giang-Dang"><i class="fa-brands fa-github fa-2xl"></i></a> 
        ';
        $VungG_BottomC_3 = '
            <a href="https://www.linkedin.com/in/giang-dang-vn/"><i class="fa-brands fa-linkedin fa-2xl"></i></a>
        ';
        $VungG_BottomC_4 = '
            <a href="https://www.twitter.com/"><i class="fa-brands fa-twitter fa-2xl"></i></a>
        ';
        $VungG_BottomC_5 = '
            <a href="https://www.whatsapp.com/"><i class="fa-brands fa-whatsapp fa-2xl"></i></a>
        ';
        $VungG_BottomC_6 = '
            <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram fa-2xl"></i></a>
        ';
        break;
    case 'gioithieu':
        $VungG_TopC = '
            <div class="creative_heading">
                <h2 class="text-center" style="color: #2196f3;">Giới Thiệu Chương Trình</h2>
                <div class="gioi-thieu">
                    <p style="text-align:center">Tuyển sinh liên tục từ năm 2006,  <span style="font-weight:bold">Trường Đại Học Khoa Học Tự Nhiên TP.Hồ Chí Minh</span>&nbsp;là một trong những đơn vị đầu tiên triển khai Đại học từ xa qua mạng.</p>
                    <p style="text-align:center">Mô hình học tiên tiến - uy tín - chất lượng,  <span style="font-weight:bold">Cử nhân CNTT từ xa qua mạng của Trường ĐH Khoa Học Tự Nhiên</span> thật sự là lựa chọn tối ưu cho những ai muốn nâng tầm tri thức, làm chủ công nghệ với nhiều cơ hội thành công hơn.</p>
                </div>
            </div>
        ';
        $hr_TopC_BottomC = '<hr>';
        $VungG_BottomC_header ='<h2 class="text-center" style="color: #2196f3;">Danh sách Môn học</h2>';
        $VungG_BottomC_1 = '
            <div class="fs-6 mx-3 px-3" style="flex: 1;">
                <h4>Kiến thức giáo dục đại cương</h4>
                <ul>
                    <li>Xác suất thống kế</li>
                    <li>Thực hành xác xuất thống kê</li>
                    <li>Toán học tổ hợp</li>
                    <li>Lý thuyết đồ thị</li>
                </ul>
            </div>
        ';
        $VungG_BottomC_2 = '
            <div class="fs-6 mx-3 px-3" style="flex: 1;">
                <h4>Kiến thức cơ sở ngành</h4>
                <ul>
                    <li>Nhập môn lập trình</li>
                    <li>Kỹ thuật lập trình</li>
                    <li>PP lập trình hướng đối tượng</li>
                    <li>Cấu trúc dữ liệu và giải thuật</li>
                    <li>CS Dữ liệu</li>
                    <li>Hệ điều hành</li>
                    <li>Hệ thống máy tính</li>
                    <li>Nhập môn công nghệ phần mềm</li>
                    <li>Cơ sở trí tuệ nhân tạo</li>
                </ul>
            </div>
        ';
        $VungG_BottomC_3 = '
            <div class="fs-6 mx-3 px-3" style="flex: 1;">
                <h4>Kiến thức ngành</h4>
                <ul>
                    <li>Hệ quản trị cơ sở dữ liệu</li>
                    <li>Lập trình web 2</li>
                    <li>Thiết kế phần mềm</li>
                    <li>Kiểm thử phần mềm</li>
                </ul>
            </div>
        ';
        $VungG_BottomC_4 = '
            <div class="fs-6 mx-3 px-3" style="flex: 1;">
                <h4>Kiến thức tốt nghiệp</h4>
                <ul>
                    <li>Chuyên đề tổ chức dữ liệu</li>
                    <li>Chuyên đề thiết kế phần mềm nâng cao</li>
                </ul>
            </div>
        ';
        $VungG_BottomC_5 = '';
        $VungG_BottomC_6 = '';
        break;
    case 'hinhanh':
        $VungG_TopC = '';
        $hr_TopC_BottomC = '';
        $VungG_BottomC_header ='';
        $VungG_BottomC_1 = '
        <div class="image-container img-thumbnail">
            <img class="image-fit" src="./pic/pic_01.jpg" alt="pic_01.jpg">
        </div>
        ';
        $VungG_BottomC_2 = '
        <div class="image-container img-thumbnail">
            <img class="image-fit" src="./pic/pic_02.jpg" alt="pic_02.jpg">
        </div>
        ';
        $VungG_BottomC_3 =  '
        <div class="image-container img-thumbnail">
            <img class="image-fit" src="./pic/pic_03.jpg" alt="pic_03.jpg">
        </div>
        ';
        $VungG_BottomC_4 =  '
        <div class="image-container img-thumbnail">
            <img class="image-fit" src="./pic/pic_04.jpg" alt="pic_04.jpg">
        </div>
        ';
        $VungG_BottomC_5 =  '
        <div class="image-container img-thumbnail">
            <img class="image-fit" src="./pic/pic_05.jpg" alt="pic_05.jpg">
        </div>
        ';
        $VungG_BottomC_6 =  '
        <div class="image-container img-thumbnail">
            <img class="image-fit" src="./pic/pic_06.jpg" alt="pic_06.jpg">
        </div>
        ';
        break;
    default:
        # code...
        break;
}
#Nạp giao diện
include("./giaodien/giaodien1.php");
?>