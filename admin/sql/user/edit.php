<?php 
include('../../config/config.php');

if (isset($_POST['save'])) {
    $id = $_POST['id'];   
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
	$no_hp = $_POST['no_hp'];

    $statement = "UPDATE user SET nama='$nama',username='$username', password='$password', no_hp='$no_hp' WHERE id_user = $id";
    if ($update = mysql_query($statement)) {
        $success ="Berhasil merubah data";
        $msg = base64_encode($success);
        header('location:../../index.php?mod=user&s=1&msg='.$msg);
    }else{
        $success ="Tidak dapat merubah data";
        $msg = base64_encode($success);
        header('location:../../index.php?mod=user&s=0&msg='.$msg);
    }
}
?>