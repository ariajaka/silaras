<?php 
if (isset($_GET['act'])) 
{
    $act = $_GET['act'];
    if ($act == 'view') 
    {
        include ('view/laporan_awal/view-laporan_awal.php');
    }
    elseif ($act == 'baru') 
    {
        include ('view/laporan_awal/add-laporan_awal_baru.php');
    }
    elseif ($act == 'add') 
    {
        include ('view/laporan_awal/add-laporan_awal.php');
    }
    else
    {
        include ('view/laporan_awal/view-laporan_awal.php');
    }
}
else
{
    include ('view/laporan_awal/view-laporan_awal.php');
}
?>