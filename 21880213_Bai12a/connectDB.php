<?php
    $db_name = "epiz_33234477_qldangky_21880213";
    $db_host = "sql107.epizy.com";
    $db_username = "epiz_33234477";
    $db_password = "z7mwcuRVrhPdzR";

    $db_connection = mysqli_connect($db_host, $db_username, $db_password, $db_name);
    
    $db_connection->set_charset("utf8mb4");
    
    if(!$db_connection) {
        die("Kết nối tới database không được. Hãy thử lại sau.");
    }
?>