	<?php include('../../config/config.php') ?>
    <?php 
    include ('../../sql/laporan_awal_rekom/cetak.php');
    ?>
<!doctype html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laporan Awal Kasus</title>
        <link rel="stylesheet" href="../../../assets/css/style.css">
        <link rel="author" href="humans.txt">
  
    </head>
<body>
  
<center><h3>BALAI PENGAWAS OBAT DAN MAKANAN DI JAMBI<br>SEKSI PENINDAKAN</h3></center>
    <center><h3><b><u>LAPORAN AWAL KASUS</u></b></h3></center>
        <table width="100%" border="0" align="center">
            <tr align="left" height="30" style="padding:5px 7px 5px 7px;font-size:14px">
        <td width="15%" >Nomor Laporan</td>
          <td width="5%" >:</td>
          <td width="80%"><?php echo $id_la; ?></td>
      </tr>
      <tr align="left" height="30" style="padding:5px 7px 5px 7px;font-size:14px">
        <td width="15%" >Nama Pelapor</td>
          <td width="5%" >:</td>
          <td width="80%">
            <?php 
                                  $sql="SELECT * from laporan_awal a INNER JOIN user b ON a.nama_pelapor=b.username where a.nama_pelapor='$nama_pelapor'"; 
                                  $query = mysql_query($sql)or die("Query failed with error: ".mysql_error());
                                  $data1= mysql_fetch_assoc($query);
                                  
                                  echo $data1['nama']; 
                                  
                                ?>       
          </td>
      </tr>
      <tr align="left" height="30" style="padding:5px 7px 5px 7px;font-size:14px">
        <td width="15%" >No HP Pelapor</td>
          <td width="5%" >:</td>
          <td width="80%">
            <?php 
                                  $sql="SELECT * from laporan_awal a INNER JOIN user b ON a.nama_pelapor=b.username where a.nama_pelapor='$nama_pelapor'"; 
                                  $query = mysql_query($sql)or die("Query failed with error: ".mysql_error());
                                  $data1= mysql_fetch_assoc($query);
                                  
                                  echo $data1['no_hp']; 
                                  
                                ?>
          </td>
      </tr>
            <tr align="left" height="30" style="padding:5px 7px 5px 7px;font-size:14px">
        <td width="15%" >Nama Sarana</td>
          <td width="5%" >:</td>
          <td width="80%"><?php echo $nama_sarana; ?></td>
      </tr>
      <tr align="left" height="30" style="padding:5px 7px 5px 7px;font-size:14px">
        <td width="15%" >Nama Pemilik Sarana</td>
        <td width="5%" >:</td>
        <td width="80%"><?php echo $nama_pemilik_sarana; ?></td>
      </tr>
      <tr align="left" height="30" style="padding:5px 7px 5px 7px;font-size:14px">
        <td width="15%" >Nomor HP Sarana</td>
        <td width="5%" >:</td>
        <td width="80%"><?php echo $no_hp; ?></td>
      </tr>
      <tr align="left" height="30" style="padding:5px 7px 5px 7px;font-size:14px">
        <td width="15%" >Link Akun Medsos</td>
        <td width="5%" >:</td>
        <td width="80%"><?php echo $link_akun_medsos; ?></td>
      </tr>
      <tr align="left" height="30" style="padding:5px 7px 5px 7px;font-size:14px">
        <td width="15%" >Jenis Platform</td>
        <td width="5%" >:</td>
        <td width="80%"><?php echo $jenis_platform; ?></td>
      </tr>
      <tr align="left" height="30" style="padding:5px 7px 5px 7px;font-size:14px">
        <td width="15%" >Platform</td>
        <td width="5%" >:</td>
        <td width="80%"><?php echo $platform; ?></td>
      </tr>
      <tr align="left" height="30" style="padding:5px 7px 5px 7px;font-size:14px">
        <td width="15%" >Alamat Sarana</td>
        <td width="5%" >:</td>
        <td width="80%"><?php echo $alamat_sarana; ?></td>
      </tr>
      <tr align="left" height="30" style="padding:5px 7px 5px 7px;font-size:14px">
        <td width="15%" >Jenis Pelanggaran</td>
        <td width="5%" >:</td>
        <td width="80%"><?php 
            $sql1="SELECT a.jenis_pelanggaran FROM detail_pelanggaran_la a INNER JOIN laporan_awal b ON a.id_la=b.id_la WHERE b.id_la='$id'";  
            $query1 = mysql_query($sql1);
            while ($data2= mysql_fetch_array($query1)){
                echo '<li>'; echo $data2['jenis_pelanggaran']; echo '<br>';
            }
            ?></td>
      </tr>
      <tr align="left" height="30" style="padding:5px 7px 5px 7px;font-size:14px">
        <td width="15%" >Produk yang dijual</td>
        <td width="5%" >:</td>
        <td width="80%"><?php 
            $sql1="SELECT a.produk_dijual FROM detail_produk_la a INNER JOIN laporan_awal b ON a.id_la=b.id_la WHERE b.id_la='$id'";  
            $query1 = mysql_query($sql1);
            while ($data2= mysql_fetch_array($query1)){
                echo '<li>'.$data2['produk_dijual'].'</li>';
            }
            ?></td>
      </tr>
      <tr align="left" height="30" style="padding:5px 7px 5px 7px;font-size:14px">
        <td width="15%" >Nama Produk</td>
        <td width="5%" >:</td>
        <td width="80%"><?php echo $nama_produk; ?></td>
      </tr>
      <tr align="left" height="30" style="padding:5px 7px 5px 7px;font-size:14px">
        <td width="15%" >Kandungan</td>
        <td width="5%" >:</td>
        <td width="80%"><?php echo $kandungan; ?></td>
      </tr>
      <tr align="left" height="30" style="padding:5px 7px 5px 7px;font-size:14px">
        <td width="15%" >Produsen</td>
        <td width="5%" >:</td>
        <td width="80%"><?php echo $produsen; ?></td>
      </tr>
      <tr align="left" height="30" style="padding:5px 7px 5px 7px;font-size:14px">
        <td width="15%" >Golongan</td>
        <td width="5%" >:</td>
        <td width="80%"><?php echo $golongan; ?></td>
      </tr>
      <tr align="left" height="30" style="padding:5px 7px 5px 7px;font-size:14px">
        <td width="15%" >Kelas Terapi</td>
        <td width="5%" >:</td>
        <td width="80%"><?php echo $kelas_terapi; ?></td>
      </tr>
      <tr align="left" height="30" style="padding:5px 7px 5px 7px;font-size:14px">
        <td width="15%" >Status</td>
        <td width="5%" >:</td>
        <td width="80%"><?php echo $status; ?></td>
      </tr>
      <tr align="left" height="30" style="padding:5px 7px 5px 7px;font-size:14px">
        <td width="15%" >Informasi Awal</td>
        <td width="5%" >:</td>
        <td width="80%"><?php echo $informasi_awal; ?></td>
      </tr>
      <tr align="left" height="30" style="padding:5px 7px 5px 7px;font-size:14px">
        <td width="15%" >Saran/Rekomendasi Tindak Lanjut</td>
        <td width="5%" >:</td>
        <td width="80%">
           <?php 
            $sql1="SELECT a.rekomendasi from detail_rekomendasi_la a INNER JOIN laporan_awal b ON a.id_la=b.id_la where b.id_la='$id'";  
            $query1 = mysql_query($sql1);
            while ($data2= mysql_fetch_array($query1)){
                echo '<li>'; echo $data2['rekomendasi']; echo '<br>';
            }
            ?>
        </td>
      </tr>
      <tr align="left" height="30" style="padding:5px 7px 5px 7px;font-size:14px">
        <td width="15%" >Pembuat Rekomendasi</td>
        <td width="5%" >:</td>
        <td width="80%">
           <?php 
                                  $sql="SELECT DISTINCT a.nip_perekomendasi, b.nama from detail_rekomendasi_la a INNER JOIN user b ON a.nip_perekomendasi=b.username where a.id_la='$id_la'"; 
                                  $query = mysql_query($sql)or die("Query failed with error: ".mysql_error());
                                  $data1= mysql_fetch_assoc($query);
                                  
                                  echo $data1['nama']; 
                                  
                                ?>
        </td>
      </tr>
      <tr>
    <td valign="top">
        <span>Tanggal Lapor</span>
    </td>
    <td valign="top">
        <span>:</span>
    </td>
    <td colspan="5" valign="top">
        <div style="text-align: justify;"><?php 
                    $bulan =  substr ($tgl_lapor, 5,2);
                    if ($bulan == '1' or $bulan == '01') {
                        $sebut = 'Januari';
                    }elseif ($bulan == '2' or $bulan == '02') {
                        $sebut = 'Februari';
                    }elseif ($bulan == '3' or $bulan == '03') {
                        $sebut = 'Maret';
                    }elseif ($bulan == '4' or $bulan == '04') {
                        $sebut = 'April';
                    }elseif ($bulan == '5' or $bulan == '05') {
                        $sebut = 'Mei';
                    }elseif ($bulan == '6' or $bulan == '06') {
                        $sebut = 'Juni';
                    }elseif ($bulan == '7' or $bulan == '07') {
                        $sebut = 'Juli';
                    }elseif ($bulan == '8' or $bulan == '08') {
                        $sebut = 'Agustus';
                    }elseif ($bulan == '9' or $bulan == '09') {
                        $sebut = 'September';
                    }elseif ($bulan == '10' or $bulan == '10') {
                        $sebut = 'Oktober';
                    }elseif ($bulan == '11' or $bulan == '11') {
                        $sebut = 'November';
                    }elseif ($bulan == '12' or $bulan == '12') {
                        $sebut = 'Desember';
                    };
                    
                    echo substr($tgl_lapor, 8,2).' '.$sebut.' '.substr($tgl_lapor, 0,4).'';
        ?>
    </div>
</td>
</tr>
    </table>
    <table>
<tr align="left" height="30" style="padding:5px 7px 5px 7px;font-size:14px">
        <?php 
                $tipe_file = pathinfo($file, PATHINFO_EXTENSION);
                
                if($file != '' and (($tipe_file == 'jpg') OR ($tipe_file == 'png')))
                {
                    echo '<img src="../../assets/file/'.$file.'" width="500" height="325">';
                }
                else if($file != '' and (($tipe_file != 'jpg') OR ($tipe_file != 'png')))
                {
                    echo $file;
                }
                else
                {
                    echo "";
                } 
            ?>
</tr>


    </table>
            
            <!-- CORE JS FRAMEWORK - START --> 
    <script src="assets/js/jquery-1.11.2.min.js" type="text/javascript"></script> 
<script src="assets/js/jquery.easing.min.js" type="text/javascript"></script> 
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>  
<script src="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js" type="text/javascript"></script> 
<script src="assets/plugins/viewport/viewportchecker.js" type="text/javascript"></script>  
        <!-- CORE JS FRAMEWORK - END --> 

<script type="text/javascript">
         $(document).ready(function(){
            $("#cetak").hide();
            window.print();
            //$("#cetak").show();
        });
        function cetak(){
            $("#cetak").hide();
            window.print();
        }
    </script>




</body>
</html>