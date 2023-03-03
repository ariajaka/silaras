<div class="modal-header">
    <a href="index.php?mod=laporan_awal_rekom&act=view" class="close">&times;</i></a>
    <h4 class="modal-title">Laporan Awal Kasus</h4>
</div>
<div class="modal-body">
	<?php include('../../../config/config.php') ?>
    <?php 
    include ('../../sql/laporan_awal_rekom/detail.php');
    ?>
    <table>
        <tr>
            <td colspan="7" valign="top"">
              <p style="text-align: center;margin-top:-20px;">No Laporan : 
                <?php echo $id_la ; ?>
            </p>
            </td>
        </tr>
        <tr>
          <td width="300" valign="top">
             <span>Nama Pelapor</span>
         </td>
         <td width="21" valign="top">
             <span>:</span>
         </td>
         <td colspan="5" valign="top">
             <div style="text-align: justify;">
              <?php 
                                  $sql="SELECT * from laporan_awal a INNER JOIN user b ON a.nama_pelapor=b.username where a.nama_pelapor='$nama_pelapor'"; 
                                  $query = mysql_query($sql)or die("Query failed with error: ".mysql_error());
                                  $data1= mysql_fetch_assoc($query);
                                  
                                  echo $data1['nama']; 
                                  
                                ?>       
   </div>
</td>
</tr>
<tr>
  <td valign="top">
   <span>Nomor HP Pelapor</span>
</td>
<td valign="top">
   <span>:</span>
</td>
<td colspan="5" valign="top">
   <div style="text-align: justify;"><?php 
                                  $sql="SELECT * from laporan_awal a INNER JOIN user b ON a.nama_pelapor=b.username where a.nama_pelapor='$nama_pelapor'"; 
                                  $query = mysql_query($sql)or die("Query failed with error: ".mysql_error());
                                  $data1= mysql_fetch_assoc($query);
                                  
                                  echo $data1['no_hp']; 
                                  
                                ?>
</div>
</td>
</tr>
<tr>
  <td valign="top">
   <span>Nama Sarana</span>
   <td valign="top">
       <span>:</span>
   </td>
   <td colspan="5" valign="top">
       <div style="text-align: justify;"><?php
       echo $nama_sarana; 
       ?>
   </div>
</td>
</tr>
<tr>
  <td valign="top">
   <span>Nama Pemilik Sarana</span>
   <td valign="top">
       <span>:</span>
   </td>
   <td colspan="5" valign="top">
       <div style="text-align: justify;"><?php
       echo $nama_pemilik_sarana; 
       ?>
   </div>
</td>
</tr>
<tr>
    <td valign="top">
        <span>Nomor HP Sarana</span>
    </td>
    <td valign="top">
        <span>:</span>
    </td>
    <td colspan="5" valign="top">
        <div style="text-align: justify;"><?php
        echo $no_hp; 
        ?>
    </div>
</td>
</tr>
<tr>
  <td valign="top">
   <span>Link Akun Medsos</span>
</td>
<td valign="top">
   <span>:</span>
</td>
<td colspan="5" valign="top">
   <div style="text-align: justify;"><?php
   echo $link_akun_medsos; 
   ?>
</div>
</td>
</tr>
<tr>
  <td valign="top">
   <span>Jenis Plaform</span>
</td>
<td valign="top">
   <span>:</span>
</td>
<td colspan="5" valign="top">
   <div style="text-align: justify;"><?php
   echo $jenis_platform; 
   ?>
</div>
</td>
</tr>
<tr>
  <td valign="top">
   <span>Plaform</span>
</td>
<td valign="top">
   <span>:</span>
</td>
<td colspan="5" valign="top">
   <div style="text-align: justify;"><?php
   echo $platform; 
   ?>
</div>
</td>
</tr>
<tr>
    <td valign="top">
        <span>Alamat Sarana</span>
    </td>
    <td valign="top">
        <span>:</span>
    </td>
    <td colspan="5" valign="top">
        <div style="text-align: justify;"><?php
        echo $alamat_sarana; 
        ?>
    </div>
</td>
</tr>
<tr>
    <td valign="top">
        <span>Jenis Pelanggaran</span>
    </td>
    <td valign="top">
        <span>:</span>
    </td>
    <td colspan="5" valign="top">
        <div style="text-align: justify;">
            <?php 
            $sql1="SELECT a.jenis_pelanggaran FROM detail_pelanggaran_la a INNER JOIN laporan_awal b ON a.id_la=b.id_la WHERE b.id_la='$id'";  
            $query1 = mysql_query($sql1);
            while ($data2= mysql_fetch_array($query1)){
                echo '<li>'; echo $data2['jenis_pelanggaran']; echo '<br>';
            }
            ?>
        </div>
    </td>
</tr>
<tr>
    <td valign="top">
        <span>Produk yang dijual</span>
    </td>
    <td valign="top">
        <span>:</span>
    </td>
    <td colspan="5" valign="top">
        <div style="text-align: justify;">
            <?php 
            $sql1="SELECT a.produk_dijual FROM detail_produk_la a INNER JOIN laporan_awal b ON a.id_la=b.id_la WHERE b.id_la='$id'";  
            $query1 = mysql_query($sql1);
            while ($data2= mysql_fetch_array($query1)){
                echo '<li>'; echo $data2['produk_dijual']; echo '<br>';
            }
            ?>
        </div>
    </td>
</tr>
<tr>
    <td valign="top">
        <span>Nama Produk</span>
    </td>
    <td valign="top">
        <span>:</span>
    </td>
    <td colspan="5" valign="top">
        <div style="text-align: justify;"><?php
        echo $nama_produk; 
        ?>
    </div>
</td>
</tr>
<tr>
    <td valign="top">
        <span>Kandungan</span>
    </td>
    <td valign="top">
        <span>:</span>
    </td>
    <td colspan="5" valign="top">
        <div style="text-align: justify;"><?php
        echo $kandungan; 
        ?>
    </div>
</td>
</tr>
<tr>
    <td valign="top">
        <span>Produsen</span>
    </td>
    <td valign="top">
        <span>:</span>
    </td>
    <td colspan="5" valign="top">
        <div style="text-align: justify;"><?php
        echo $produsen; 
        ?>
    </div>
</td>
</tr>
<tr>
    <td valign="top">
        <span>Golongan</span>
    </td>
    <td valign="top">
        <span>:</span>
    </td>
    <td colspan="5" valign="top">
        <div style="text-align: justify;"><?php
        echo $golongan; 
        ?>
    </div>
</td>
</tr>
<tr>
    <td valign="top">
        <span>Kelas Terapi</span>
    </td>
    <td valign="top">
        <span>:</span>
    </td>
    <td colspan="5" valign="top">
        <div style="text-align: justify;"><?php
        echo $kelas_terapi; 
        ?>
    </div>
</td>
</tr>
<tr>
    <td valign="top">
        <span>Status</span>
    </td>
    <td valign="top">
        <span>:</span>
    </td>
    <td colspan="5" valign="top">
        <div style="text-align: justify;"><?php
        echo $status; 
        ?>
    </div>
</td>
</tr>
<tr>
    <td valign="top">
        <span>Informasi Awal</span>
    </td>
    <td valign="top">
        <span>:</span>
    </td>
    <td colspan="5" valign="top">
        <div style="text-align: justify;"><?php
        echo $informasi_awal; 
        ?>
    </div>
</td>
</tr>
<tr>
    <td valign="top">
        <span>Saran/Rekomendasi Tindak Lanjut</span>
    </td>
    <td valign="top">
        <span>:</span>
    </td>
    <td colspan="5" valign="top">
        <div style="text-align: justify;">
            <?php 
            $sql1="SELECT a.rekomendasi from detail_rekomendasi_la a INNER JOIN laporan_awal b ON a.id_la=b.id_la where b.id_la='$id'";  
            $query1 = mysql_query($sql1);
            while ($data2= mysql_fetch_array($query1)){
                echo '<li>'; echo $data2['rekomendasi']; echo '<br>';
            }
            ?>
        </div>
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
</div>
<div class="modal-footer">
    <a href="index.php?mod=laporan_awal_rekom&act=view" class="btn btn-danger btn-sm"><i class="fa fa-close"> Tutup</i></a>
</div>