<?php
include 'koneksi.php';
$kdbrg=@$_GET['kdbrg'];
mysqli_query($kon,"delete from barang where br_id ='$kdbrg'") or die(mysqli_error());

?>

<script type="text/javascript">
	alert ("Data Berhasil Dihapus");
	window.location.href="?page=admin&aksi=tampil_barang";



</script>