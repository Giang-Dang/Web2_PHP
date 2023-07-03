<?php
  session_start();
  include('./Lib_21880213.php');
  $DSSV_21880213 = TaoDuLieu::taoDSSV(rand(20, 100));
  $_SESSION['dssv'] = serialize($DSSV_21880213);
  header('Location: ./index.php');
  exit();
?>