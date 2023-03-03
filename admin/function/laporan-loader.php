<?php 
if (isset($_GET['act'])) 
{
    $act = $_GET['act'];
    if ($act == 'view') 
    {
        include ('view/laporan/view-laporan.php');
    }
}
else
{
    include ('view/laporan/view-laporan.php');
}
?>