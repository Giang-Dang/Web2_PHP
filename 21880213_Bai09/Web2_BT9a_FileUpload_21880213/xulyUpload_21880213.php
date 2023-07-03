<?php
$fileExtensionDirectory = [
    'HinhAnh' => ['gif', 'jpg', 'png', 'bmp'],
    'AmThanh' => ['wav', 'mp3'],
    'Video' => ['mp4'],
    'TaiLieu' => ['docx', 'pdf', 'xlsx', 'pptx'],
    'TapTinNen' => ['zip', '7z', 'rar']
];

$phpFileUploadErrors = [
    0 => 'There is no error, the file uploaded with success.',
    1 => 'Lỗi 1: The uploaded file exceeds the upload_max_filesize directive in php.ini.',
    2 => 'Lỗi 2: The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.',
    3 => 'Lỗi 3: The uploaded file was only partially uploaded.',
    4 => 'Lỗi 4: No file was uploaded.',
    6 => 'Lỗi 6: Missing a temporary folder',
    7 => 'Lỗi 7: Failed to write file to disk.',
    8 => 'Lỗi 8: A PHP extension stopped the file upload.',
];

$errorMessage = '';
$successMessage = '';
$uploadFile = $_FILES['uploadFile'];

// Check if the uploaded file has errors. If there are errors, display an error message.
$uploadFileErrorCode = $uploadFile['error'];
if ($uploadFileErrorCode) {
    $errorMessage = $phpFileUploadErrors[$uploadFileErrorCode];
}

// get file extension 
$splitFileNameStrings = explode('.', $uploadFile['name']);
$uploadFileExtension = end($splitFileNameStrings);

// Get the name of the folder in which the current file is stored.
$destinationFolderName = '';
$isExtensionSupported = false;
foreach ($fileExtensionDirectory as $type => $extensions) {
    $isTypeFound = false;
    foreach($extensions as $ext) {
        if ($ext == $uploadFileExtension) {
            $destinationFolderName = $type;
            $isExtensionSupported = true;
            $isTypeFound = true;
            break;
        }
    }
    
    if($isTypeFound) {
        break;
    }
}

if(!$isExtensionSupported && $errorMessage == ''){

    $errorMessage = 'Upload không thành công do file "' . $uploadFile['name'] . '" thuộc định dạng không được hỗ trợ.<br>Xin chọn file khác.';
}


$storePath = './Upload/' . $destinationFolderName . '/';

// Check if the file already exists in its destination folder.
foreach(glob($storePath.'*.*') as $fileName) {
    if ($fileName == ($storePath . $uploadFile['name']) && $errorMessage == '') {
        $errorMessage = 'Upload không thành công do đã có file cùng tên "' . $uploadFile['name'] . '" được upload.<br>Xin chọn file khác.';
    }
}

if($errorMessage == '') {
    // move the file to the classified folder
    move_uploaded_file($uploadFile['tmp_name'], $storePath . $uploadFile['name']);
    // Update the uploaded file information in thongtin.txt
    $wTextFile = fopen($storePath.'thongtin.txt', 'a');
    $uploadFile += ['path' => $storePath . $uploadFile['name']];
    $writeData = serialize($uploadFile);
    $isWriteFileSuccess = fwrite($wTextFile, $writeData . PHP_EOL);
    fclose($wTextFile);

    if(!$isWriteFileSuccess) {
        $errorMessage = 'Lưu File "' . $uploadFile['name'] . '" không thành công.';
    }
    else {
        $successMessage = 'Lưu File "' . $uploadFile['name'] . '" thành công.';
    }
}

// read data from thongtin.txt file in AmThanh Folder
// Upload/AmThanh/
$infoFilePath = 'Upload/AmThanh/thongtin.txt';
$soundFiles = [];
if(file_exists($infoFilePath))
{
    $i = 0;
    foreach(file($infoFilePath) as $line) {
        $soundFiles += [$i => unserialize($line)];
        $i++;
    }
}


// read data from thongtin.txt file in Video Folder
// Upload/Video/
$infoFilePath = 'Upload/Video/thongtin.txt';
$videoFiles = [];
if(file_exists($infoFilePath))
{
    $i = 0;
    foreach(file($infoFilePath) as $line) {
        $videoFiles += [$i => unserialize($line)];
        $i++;
    }
}
// read data from thongtin.txt file in HinhAnh Folder
// Upload/HinhAnh/
$infoFilePath = 'Upload/HinhAnh/thongtin.txt';
$imageFiles = [];
if(file_exists($infoFilePath))
{
    $i = 0;
    foreach(file($infoFilePath) as $line) {
        $imageFiles += [$i => unserialize($line)];
        $i++;
    }
}

// read data from thongtin.txt file in TaiLieu Folder
// Upload/TaiLieu/
$infoFilePath = 'Upload/TaiLieu/thongtin.txt';
$documentFiles = [];
if(file_exists($infoFilePath))
{
    $i = 0;
    foreach(file($infoFilePath) as $line) {
        $documentFiles += [$i => unserialize($line)];
        $i++;
    }
}

// read data from thongtin.txt file in TapTinNen Folder
// Upload/TapTinNen/
$infoFilePath = 'Upload/TapTinNen/thongtin.txt';
$compressedFiles = [];
if(file_exists($infoFilePath))
{
    $i = 0;
    foreach(file($infoFilePath) as $line) {
        $compressedFiles += [$i => unserialize($line)];
        $i++;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/bai09.css">
    <title>21880213-BT09a</title>
</head>
<body>
    <div class="d-flex flex-column vh-100 overflow-scroll">
        <nav class="navbar navbar-expand-lg navbar-primary bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand text-white" href="../index.php">Host của sinh viên</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-white active" aria-current="page" href="./index.php">Bài tập 09</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="px-5 py-3 bg-light h-100 w-100 flex-grow-1 d-flex flex-column">
            <div class="">
                <h2 class="text-primary mb-4">Thông tin upload file:</h2>
                <h5 class="text-danger">
                    <?php
                        echo $errorMessage;
                    ?>
                </h5>
                <h5 class="text-success">
                    <?php
                        echo $successMessage;
                    ?>
                </h5>
            </div>
            <hr>
            <div class="flex-grow-1 d-flex flex-column">
                <h2 class="text-primary mb-4">Thông tin folder lưu trữ file:</h2>
                <!-- Tab links -->
                <div class="nav nav-tabs">
                    <button class="nav-link" onclick="openTabLink(event, 'AmThanh')" id="defaultOpen">Âm thanh</button>
                    <button class="nav-link" onclick="openTabLink(event, 'HinhAnh')">Hình Ảnh</button>
                    <button class="nav-link" onclick="openTabLink(event, 'Video')">Video</button>
                    <button class="nav-link" onclick="openTabLink(event, 'TaiLieu')">Tài liệu</button>
                    <button class="nav-link" onclick="openTabLink(event, 'TapTinNen')">Tập tin nén</button>
                </div>
                <!-- Tab content -->
                <div class="overflow-scroll flex-grow-1">
                    <div id="AmThanh" class="tabcontent audio-grid-container">
                        <div class="row">
                            <?php
                            foreach ($soundFiles as $file) {
                                print('<div class="audio-grid col-6 col-md-4 col-lg-3">');
                                print('<div class="audio-grid-content bg-primary bg-gradient m-2">');
                                print('<div>');
                                print('<audio controls>');
                                print("<source src='" . $file['path'] . "' type='" . $file['type'] . "'>");
                                print("Your browser does not support the audio element.");
                                print('</audio>');
                                print("<a href='" . $file['path'] . "' download><h5 class='text-white text-break'>". $file['name'] . "</h5></a>");
                                print("</div>");
                                print("</div>");
                                print("</div>");
                            }
                            ?>
                        </div>
                    </div>

                    <div id="HinhAnh" class="tabcontent image-grid-container">
                        <div class="row">
                            <?php
                            foreach ($imageFiles as $file) {
                                print('<div class="image-grid col-6 col-md-4 col-lg-3">');
                                print('<div class="image-grid-content bg-primary bg-gradient m-2">');
                                print('<div>');
                                print("<img class='image-fit' src='". $file['path'] . "' alt='". $file['name'] . "'>");
                                print("<a href='" . $file['path'] . "' download><h5 class='text-white text-break'>". $file['name'] . "</h5></a>");
                                print("</div>");
                                print("</div>");
                                print("</div>");
                            
                            }
                            ?>
                        </div>
                    </div>

                    <div id="Video" class="tabcontent video-grid-container">
                        <div class="row">
                            <?php
                            foreach ($videoFiles as $file) {
                                print('<div class="video-grid col-6 col-md-4 col-lg-3">');
                                print('<div class="video-grid-content bg-primary bg-gradient m-2">');
                                print('<div>');
                                print('<video width="320" height="240" controls>');
                                print("<source src='" . $file['path'] . "' type='" . $file['type'] . "'>");
                                print("Your browser does not support the audio element.");
                                print('</video>');
                                print("<a href='" . $file['path'] . "' download><h5 class='text-white text-break'>". $file['name'] . "</h5></a>");
                                print("</div>");
                                print("</div>");
                                print("</div>");
                            }
                            ?>
                        </div>
                    </div>

                    <div id="TaiLieu" class="tabcontent doc-grid-container">
                        <div class="row">
                            <?php
                            foreach ($documentFiles as $file) {
                                print('<div class="doc-grid col-6 col-md-4 col-lg-3">');
                                print('<div class="doc-grid-content bg-primary bg-gradient m-2">');
                                print('<div>');
                                print("<a href='" . $file['path'] . "' download><h5 class='text-white text-break'>". $file['name'] . "</h5></a>");
                                print("</div>");
                                print("</div>");
                                print("</div>");
                            
                            }
                            ?>
                        </div>
                    </div>

                    <div id="TapTinNen" class="tabcontent compressed-grid-container">
                    <div class="row">
                            <?php
                            foreach ($compressedFiles as $file) {
                                print('<div class="compressed-grid col-6 col-md-4 col-lg-3">');
                                print('<div class="compressed-grid-content bg-primary bg-gradient m-2">');
                                print('<div>');
                                print("<a href='" . $file['path'] . "' download><h5 class='text-white text-break'>". $file['name'] . "</h5></a>");
                                print("</div>");
                                print("</div>");
                                print("</div>");
                            
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <!-- End tab content -->
                
            </div>
            <hr>
            <div class="d-flex flex-row-reverse">
                
                <a class="btn btn-lg btn-danger" href="./index.php">Trở về</a>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="./js/bai09.js"></script>
    <script>
        document.getElementById('defaultOpen').click();
    </script>
</body>
</html>