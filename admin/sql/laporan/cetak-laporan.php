<link href="../../../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
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
                    $pecah1 = explode("/", $tanggalawal);
                    $month1 = $pecah1[0];
                    $date1 = $pecah1[1];
                    $year1 = $pecah1[2];
                    $tanggal1 = mktime(0, 0, 0, $month1, $date1, $year1);
                    $tglstr1 = date("Y-m-d", $tanggal1);
                    
                    $tanggalakhir = $_POST['tanggalakhir'];
                    $pecah2 = explode("/", $tanggalakhir);
                    $month2 = $pecah2[0];
                    $date2 = $pecah2[1];
                    $year2 = $pecah2[2];
                    $tanggal2 = mktime(0, 0, 0, $month2, $date2, $year2);
                    $tglstr2 = date("Y-m-d", $tanggal2);
        			
                    $bulan =  substr ($tglstr1, 5,2);
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
        			
        			echo substr($tglstr1, 8,2).' '.$sebut.' '.substr($tglstr1, 0,4).'';
        		?> s.d <?php  
        			$bulan =  substr ($tglstr2, 5,2);
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
        			
        			echo substr($tglstr2, 8,2).' '.$sebut.' '.substr($tglstr2, 0,4).''; ?></h2>
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
            <th>Nama Sarana</th>
            <th>Nomor HP Sarana</th>
            <th>Link Akun Medsos</th>
            <th>Jenis Platform</th>
            <th>Nama Platform</th>
            <th>Alamat Sarana</th>
            <th>Jenis Pelanggaran</th>
            <th>Jenis Komoditi</th>
            <th>Nama Produk</th>
            <th>Komposisi</th>
            <th>Produsen</th>
            <th>Kelas Terapi</th>
            <th>Status</th>
            <th>Informasi Awal</th>
            <th>Saran/Rekomendasi Tindak Lanjut</th>
            <th>File</th>
        </tr>
    </thead>
    <tbody>
        <?php 
       $no = 0;
        if (isset($_POST['cetak'])) {
            $tanggalawal = $_POST['tanggalawal'];
            $pecah1 = explode("/", $tanggalawal);
            $month1 = $pecah1[0];
            $date1 = $pecah1[1];
            $year1 = $pecah1[2];

            $tanggal1 = mktime(0, 0, 0, $month1, $date1, $year1);
            $tglstr1 = date("Y-m-d", $tanggal1);   
            
            $tanggalakhir = $_POST['tanggalakhir'];
            $pecah2 = explode("/", $tanggalakhir);
            $month2 = $pecah2[0];
            $date2 = $pecah2[1];
            $year2 = $pecah2[2];
            $tanggal2 = mktime(0, 0, 0, $month2, $date2, $year2);
            $tglstr2 = date("Y-m-d", $tanggal2);

            $sql = "SELECT * FROM laporan_awal WHERE tgl_lapor BETWEEN '$tglstr1' AND '$tglstr2'  ORDER BY id_la";
            $laporan = mysql_query($sql);

            if (mysql_num_rows($laporan) == 0) {
                echo '<center><h1>Mohon maaf laporan tidak tersedia untuk tanggal terpilih</h1></center>';
            }else{
                while ($data_laporan_awal = mysql_fetch_assoc($laporan)) {
                $id_la = $data_laporan_awal['id_la'];
                $file = $data_laporan_awal['file'];
                $nip_pelapor = $data_laporan_awal['nama_pelapor'];
                $tgl_lapor = $data_laporan_awal['tgl_lapor'];
                $no++;
    ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $data_laporan_awal['id_la']; ?></td>
            <td><?php 
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
            echo substr($tgl_lapor, 8,2).' '.$sebut.' '.substr($tgl_lapor, 0,4).''; ?>    
        </td>
        <td>
            <?php 
                                  $sql="SELECT * from laporan_awal a INNER JOIN user b ON a.nama_pelapor=b.username where a.nama_pelapor='$nip_pelapor'"; 
                                  $query = mysql_query($sql)or die("Query failed with error: ".mysql_error());
                                  $data1= mysql_fetch_assoc($query);
                                  
                                  echo $data1['nama']; 
                                  
                                ?>
        </td>
        <td><?php echo $data_laporan_awal['nama_sarana']; ?></td>
        <td><?php echo $data_laporan_awal['no_hp']; ?></td>
        <td style="word-break: break-all;"><?php echo $data_laporan_awal['link_akun_medsos']; ?></td>
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
        <td><?php echo $data_laporan_awal['kelas_terapi']; ?></td>
        <td><?php echo $data_laporan_awal['status']; ?></td>
        <td><?php echo $data_laporan_awal['informasi_awal']; ?></td>
        <td><?php 
            $sql1="SELECT a.rekomendasi from detail_rekomendasi_la a INNER JOIN laporan_awal b ON a.id_la=b.id_la where b.id_la='$id_la'";  
            $query1 = mysql_query($sql1)or die("Query failed with error: ".mysql_error());
            while($data2= mysql_fetch_array($query1)){
                $rekomendasi = $data2['rekomendasi'];
                
                echo '<li>'; echo $rekomendasi; echo '<br>';
                }
            ?></td>
        <td><?php 
                $tipe_file = pathinfo($file, PATHINFO_EXTENSION);
                
                if($file != '' and (($tipe_file == 'jpg') OR ($tipe_file == 'png')))
                {
                    echo '<img src="../../../assets/file/'.$file.'" width="100" height="100">';
                }
                else if($file != '' and (($tipe_file != 'jpg') OR ($tipe_file != 'png')))
                {
                    echo $file;
                }
                else
                {
                    echo "";
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
    			<td width="35%" >Koordinator Kelompok Substansi Penindakan</td>
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
    			<td width="45%" >Novva Reddy Naldo, S.Farm, Apt</td>
			</tr>
       </table>

<br><br>
<button class="btn btn-primary" onclick="window.print()" id="cetak_laporan">CETAK</button>
<?php include('../../part/footer.php') ?>