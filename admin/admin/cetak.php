<?php
include 'koneksi.php';
$kdid = @$_GET['kdid'];
$sql = mysqli_query($kon,"select * from tb_user where kode_user = '$kduser'") or die(mysql_error());
$data = mysqli_fetch_array($sql);

?>