<?php 
include('../../config/config.php');
$id_user = $_GET['id'];

echo $id_user;

$delete = mysql_query("DELETE FROM user where id_user = '$id_user'");
if($delete){
	$info = base64_encode("SUKSES");
	$msg = base64_encode("Sukses menghapus user");
	header('location:../../index.php?mod=user&s=1&msg='.$msg);
}else{
	$info = base64_encode("GAGAL");
	$msg = base64_encode("Terjadi kesalahan gagal menghapus user");
	header('location:../../index.php?mod=user&s=0&msg='.$msg);
}
?>