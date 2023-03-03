<?php 
if (isset($_GET['act'])) 
{
    $act = $_GET['act'];
    if ($act == 'view') 
    {
        include ('view/laporan_awal/view-laporan_awal.php');
    }
    elseif ($act == 'add') 
    {
        include ('view/laporan_awal/add-laporan_awal.php');
    }
    elseif ($act == 'edit') 
    {
        include ('view/laporan_awal/edit-laporan_awal.php');
    }
    elseif ($act == 'hapus') 
    {
        $hapus = true;
        if ($hapus == true) 
        {
            if (isset($_GET['id'])) 
            {
                $id = $_GET['id'];
                $query = mysql_query("SELECT id_la FROM laporan_awal WHERE id_la = '$id'");
                $data = mysql_fetch_assoc($query);
            }
                echo '<div class="panel panel-danger animated fadeInDownBig" id="notif" style="z-index:9999;position:absolute;margin:auto;background:rgb(42,42,42);color:white;margin-left:10%;margin-top:8%;">
                      <div class="panel-heading"><i class="fa fa-warning"><strong> Warning</strong></i></div>
                      <center><div class="panel-body">
                        <p>Yakin ingin menghapus laporan dengan nomor laporan awal kasus '.$data['id_la'].' ?</p>
                        <p style="font-style:italic;font-size:12px;color:red"><i class="fa fa-warning"></i> Data yang dihapus tidak dapat dikembalikan lagi</p>
                        <a class="btn btn-danger" href="sql/laporan_awal/delete.php?id='.$id.'" id="ya" id="hapus">YA</a>
                        <button class="btn btn-success" id="tidak" onclick="$("#notif").hide();">TIDAK</button>
                      </div></center>
                    </div>';
        }
            include ('view/laporan_awal/view-laporan_awal.php');
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