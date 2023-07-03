<?php
$sql_DKHoc = "select * from dkhoc dk join monhoc mh on dk.MaMH = mh.MaMonHoc";
$res_DKHoc = mysqli_query($db_connection, $sql_DKHoc);
$res_DKHoc_count = mysqli_num_rows($res_DKHoc);
$sosinhvien_dau_mon = array();
$sosinhvien_rot_mon = array();
$tenmon = array();

if($res_DKHoc_count > 0) {
    while($row = mysqli_fetch_assoc($res_DKHoc)) {
        if($row['Diem'] >= 5.0) {
            if(array_key_exists($row['MaMH'], $sosinhvien_dau_mon)) {
                $sosinhvien_dau_mon[$row['MaMH']]++;
            } else {
                $sosinhvien_dau_mon[$row['MaMH']] = 1;
            }
        } 
        if($row['Diem'] < 5.0) {
            if(array_key_exists($row['MaMH'], $sosinhvien_rot_mon)) {
                $sosinhvien_rot_mon[$row['MaMH']]++;
            } else {
                $sosinhvien_rot_mon[$row['MaMH']] = 1;
            }
        }
        if(!array_key_exists($row['MaMH'], $tenmon)) {
            $tenmon[$row['MaMH']] = $row['TenMon'];
        }
    }
}

foreach($tenmon as $mamh => $tenmh) {
    if(!array_key_exists($mamh, $sosinhvien_rot_mon)) {
        $sosinhvien_rot_mon[$mamh] = 0;
    }
    if(!array_key_exists($mamh, $sosinhvien_dau_mon)) {
        $sosinhvien_dau_mon[$mamh] = 0;
    }
}

$sql_mh = array();
$query_res_mh = array();
?>