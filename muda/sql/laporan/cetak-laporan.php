<?php 
	include('../../../config/config.php');
	include('../../part/header.php');
?>
 <style type="text/css" media="print">
 	#cetak_laporan{
		display: none;
 	}

 </style>
 <div class="container">
 	<div class="row">
 		<div class="col-md-12">
 		<center>	
 			<h1>LAPORAN AWAL KASUS</h1>
 			<h2>Balai Pengawas Obat dan Makanan di Jambi</h2>
            <h2>Dari tgl. <?php 
                    $tanggalawal = $_POST['tanggalawal'];
                    $tanggalakhir = $_POST['tanggalakhir'];
        			$bulan =  substr ($tanggalawal, 0,2);
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
        			
        			echo substr($tanggalawal, 3,2).' '.$sebut.' '.substr($tanggalawal, 6,4).'';
        		?> s.d <?php  
        			$bulan =  substr ($tanggalakhir, 0,2);
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
        			
        			echo substr($tanggalakhir, 3,2).' '.$sebut.' '.substr($tanggalakhir, 6,4).''; ?></h2>
 			</center>
 		</div>
 	</div>
 </div>
 <br>
	<table border="1px" class="table table-striped dt-responsive display" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Nomor Laporan</th>
            <th>Tgl. Lapor</th>
            <th>Nama Pelapor</th>
            <th>Nomor HP Pelapor</th>
            <th>Nama Sarana</th>
            <th>Nomor HP Sarana</th>
            <th>Link Akun Medsos/Website</th>
            <th>Jenis Platform</th>
            <th>Nama Platform</th>
            <th>Alamat Sarana</th>
            <th>Jenis Pelanggaran</th>
            <th>Jenis Komoditas</th>
            <th>Nama Produk</th>
            <th>Kandungan</th>
            <th>Produsen</th>
            <th>Golongan</th>
            <th>Kelas Terapi</th>
            <th>Status</th>
            <th>Informasi Awal</th>
            <th>Saran/Rekomendasi Tindak Lanjut</th>
        </tr>
    </thead>
    <tbody>
        <?php 
       $no = 0;
        if (isset($_POST['cetak'])) {
            $tanggalawal = $_POST['tanggalawal'];
            $tanggalakhir = $_POST['tanggalakhir'];
            $sql = "SELECT * FROM laporan_awal WHERE tgl_lapor BETWEEN '$tanggalawal' AND '$tanggalakhir'  ORDER BY id_la ";
            $laporan = mysql_query($sql);

            if (mysql_num_rows($laporan) == 0) {
                echo '<center><h1>Mohon maaf laporan tidak tersedia untuk tanggal terpilih</h1></center>';
            }else{
                while ($data_laporan_awal = mysql_fetch_assoc($laporan)) {
                $id_la = $data_laporan_awal['id_la'];
                $no++;
    ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $data_laporan_awal['id_la']; ?></td>
            <td><?php 
            $tgl_lapor = $data_laporan_awal['tgl_lapor'];
            $bulan =  substr ($tgl_lapor, 0,2);
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
            echo substr($tgl_lapor, 3,2).' '.$sebut.' '.substr($tgl_lapor, 6,4).''; ?>    
        </td>
        <td><?php echo $data_laporan_awal['nama_pelapor']; ?></td>
        <td><?php echo $data_laporan_awal['no_hp_pelapor']; ?></td>
        <td><?php echo $data_laporan_awal['nama_sarana']; ?></td>
        <td><?php echo $data_laporan_awal['no_hp']; ?></td>
        <td><?php echo $data_laporan_awal['link_akun_medsos']; ?></td>
        <td><?php echo $data_laporan_awal['jenis_platform']; ?></td>
        <td><?php echo $data_laporan_awal['platform']; ?></td>
        <td><?php echo $data_laporan_awal['alamat_sarana']; ?></td>
        <td><?php 
            $sql1="SELECT a.jenis_pelanggaran FROM detail_pelanggaran_la a INNER JOIN laporan_awal b ON a.id_la=b.id_la WHERE b.id_la='$id_la'";  
            $query1 = mysql_query($sql1);
            while ($data2= mysql_fetch_array($query1)){
                echo '<li>'; echo $data2['jenis_pelanggaran']; echo '<br>';
            }
            ?>       
        </td>
        <td><?php 
            $sql1="SELECT a.produk_dijual FROM detail_produk_la a INNER JOIN laporan_awal b ON a.id_la=b.id_la WHERE b.id_la='$id_la'";  
            $query1 = mysql_query($sql1);
            while ($data2= mysql_fetch_array($query1)){
                echo '<li>'; echo $data2['produk_dijual']; echo '<br>';
            }
            ?></td>
        <td><?php echo $data_laporan_awal['nama_produk']; ?></td>
        <td><?php echo $data_laporan_awal['kandungan']; ?></td>
        <td><?php echo $data_laporan_awal['produsen']; ?></td>
        <td><?php echo $data_laporan_awal['golongan']; ?></td>
        <td><?php echo $data_laporan_awal['kelas_terapi']; ?></td>
        <td><?php echo $data_laporan_awal['status']; ?></td>
        <td><?php echo $data_laporan_awal['informasi_awal']; ?></td>
        <td><?php 
            $sql1="SELECT a.rekomendasi from detail_rekomendasi_la a INNER JOIN laporan_awal b ON a.id_la=b.id_la where b.id_la='$id_la'";  
            $query1 = mysql_query($sql1);
            while ($data2= mysql_fetch_array($query1)){
                echo '<li>'; echo $data2['rekomendasi']; echo '<br>';
            }
            ?></td>
    </tr>
        <?php
        }
            }

        		}
        ?>

    </tbody>
</table>
       <table width="100%" border="0" align="center">
        <tr align="left" height="30" style="padding:5px 7px 5px 7px;font-size:14px">
    			<td width="70%" >&nbsp;</td>
    			<td width="35%" >Kepala Seksi Penindakan</td>
			</tr>
            <tr align="left" height="30" style="padding:5px 7px 5px 7px;;font-size:14px">
				
    			<td width="50%" >&nbsp;</td>
    			<td width="45%" >&nbsp;</td>
			</tr>
            <tr align="left" height="30" style="padding:5px 7px 5px 7px;;font-size:14px">
				
    			<td width="50%" >&nbsp;</td>
    			<td width="45%" >&nbsp;</td>
			</tr>
            <tr align="left" height="30" style="padding:5px 7px 5px 7px;font-size:14px">
    			<td width="50%" >&nbsp;</td>
    			<td width="45%" >Rahmat Hidayat, Apt., SCi</td>
			</tr>
       </table>

<br><br>
<button class="btn btn-primary" onclick="window.print()" id="cetak_laporan">CETAK</button>
<?php include('../../part/footer.php') ?>