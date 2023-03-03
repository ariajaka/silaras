<?php 
if (isset($_GET['act'])) 
{
    $act = $_GET['act'];
    if ($act == 'view') 
    {
        include ('view/laporan_awal_rekom/view-laporan_awal_rekom.php');
    }
    else
    {
        include ('view/laporan_awal_rekom/view-laporan_awal_rekom.php');
    }
}
else
{
    include ('view/laporan_awal_rekom/view-laporan_awal_rekom.php');
}
?>