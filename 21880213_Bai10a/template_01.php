<?php
// functions
function setNavItemActive(&$nav_item)
{
    if (strpos($nav_item, "nav-item") !== false) {
        $nav_item = str_replace('nav-item', 'nav-item active', $nav_item);
    }
}

function createNavItem($homepage_file_name, $nav_name, $nav_page, $is_active = false)
{
    $nav_item = '
        <li class="nav-item">
            <a class="nav-link" href="./{{homepage_file_name}}?page={{nav_page}}">{{nav_name}} <span class="sr-only">(current)</span></a>
        </li>
        ';

    if ($is_active) {
        $nav_item = str_replace('nav-item', 'nav-item active', $nav_item);
    }

    $nav_item = str_replace('{{homepage_file_name}}', $homepage_file_name, $nav_item);
    $nav_item = str_replace('{{nav_name}}', $nav_name, $nav_item);
    $nav_item = str_replace('{{nav_page}}', $nav_page, $nav_item);

    return $nav_item;
}

function createRandomTranscript()
{
    $subjects = [
        'Nhập môn lập trình',
        'Kỹ thuật lập trình',
        'Phương pháp lập trình hướng đối tượng',
        'Cấu trúc dữ liệu và giải thuật',
        'Cơ sở dữ liệu',
        'Hệ điều hành',
        'Nhập môn công nghệ phần mềm',
        'Cơ sở trí tuệ nhân tạo',
        'Lập trình web 2',
        'Thiết kế phần mềm',
        'Kiểm thử phần mềm',
        'Hệ quản trị cơ sở dữ liệu',
        'Chuyên đề tổ chức dữ liệu',
        'Chuyên đề thiết kế phần mềm nâng cao'
    ];

    $transcript = array();
    $subjectCount = rand(count($subjects) - 5, count($subjects) - 1);

    for ($i = 0; $i < $subjectCount; $i++) {
        $subjectIndex = rand(0, count($subjects) - 1);
        if (!array_key_exists($subjects[$subjectIndex], $transcript)) {
            $transcript[$subjects[$subjectIndex]] = rand(0, 100) / 10;
        }
    }

    return $transcript;
}

//

$page_title = 'Đặng Vũ Ngọc Giang - 21880213';

//navbar
$nav_brand = "Bài tập 10a";
$hostsv_navitem = '
    <li class="nav-item">
        <a class="nav-link" href="./index.php">Host Sinh Viên <span class="sr-only">(current)</span></a>
    </li>
';
$home_navitem = createNavItem('template_01.php', 'Home', 'home');
$myGrade_navitem = createNavItem('template_01.php', 'My Grade', 'mygrade');
$nav_items = $hostsv_navitem . $home_navitem . $myGrade_navitem;


$current_page = $_GET['page'] ?? 'home';

$slider_info_h1 = '';
$slider_info_h2 = '';
$how_section = '';

switch ($current_page) {
    case 'home':
        setNavItemActive($home_navitem);
        $slider_info_h1 = 'Đặng Vũ Ngọc Giang - 21880213';
        $slider_info_h2 = 'TLR3';
        $how_section = '
        <div class="d-flex justify-content-center align-items-center">
            <table class="w-25 table table-bordered table-striped">
                <tr>
                    <th>Họ tên: </th>
                    <td>Đặng Vũ Ngọc Giang</td>
                </tr>
                <tr>
                    <th>MSSV: </th>
                    <td>21880213</td>
                </tr>
                <tr>
                    <th>Email: </th>
                    <td>dangvngiang@gmail.com</td>
                </tr>
                <tr>
                    <th>Kỹ thuật: </th>
                    <td>TLR3</td>
                </tr>
            </table>
        </div>
        
        ';
        break;

    case 'mygrade':
        setNavItemActive($myGrade_navitem);
        $slider_info_h1 = 'My Grade';
        $slider_info_h2 = 'TLR3';
        $transcript = createRandomTranscript();

        $transcript_table_data = '';

        foreach ($transcript as $subject => $grade) {
            $transcript_table_data .= "
            <tr>
                <td>$subject</td>
                <td>$grade</td>
            </tr>
            ";
        }
        $how_section = '
        <div class="d-flex justify-content-center align-items-center">
            <table class="w-50 table table-bordered table-striped">
            <tr>
                <th>Môn học</th>
                <th>Điểm</th>
            </tr>
        ' . $transcript_table_data .
            ' 
            </table>
        </div>
        ';
        break;

    default:
        setNavItemActive($home_navitem);
        $slider_info_h1 = 'Đặng Vũ Ngọc Giang - 21880213';
        $slider_info_h2 = 'TLR3';
        $how_section = '
        <table>
            <tr>
                <th>Họ tên: </th>
                <th>MSSV: </th>
                <th>Email: </th>
                <th>Kỹ thuật: </th>
            </tr>
            <tr>
                <td>Đặng Vũ Ngọc Giang</td>
                <td>21880213</td>
                <td>dangvngiang</td>
                <td>TLR3</td>
            </tr>
        </table>
        ';
        break;
}




$index_file_path = './resource/template_01/';
$template = file_get_contents($index_file_path . 'index.html');

$template = str_replace('{{page_title}}', $page_title, $template);
$template = str_replace('{{index_file_path}}', $index_file_path, $template);
$template = str_replace('{{navbar_brand}}', $nav_brand, $template);
$template = str_replace('{{navbar_items}}', $nav_items, $template);
$template = str_replace('{{slider_info_h1}}', $slider_info_h1, $template);
$template = str_replace('{{slider_info_h2}}', $slider_info_h2, $template);
$template = str_replace('{{how_section}}', $how_section, $template);

echo $template;
