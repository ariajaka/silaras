<?php 
include('../../config/config.php');
	//Untuk mengecek apakah ini proses simpan atau update
	if(isset($_POST['save'])){
		// if ($_POST['cmbDasar'] == '' or $_POST['cmbPetugas'] == '' or $_POST['surat_undangan'] =='') {
		// 	$success ="Gagal, Mohon isi Dasar/Undangan dan Petugas";
		// 	$msg = base64_encode($success);
		// 	header('location:../../index.php?mod=surattugas&act=add&s=0&msg='.$msg);			
		// }else{
			//mengmbil variabel yang dikirim oleh formulir
		
		// membuat query max untuk kode barang
  		$carikode = mysql_query("select max(id_la) from laporan_awal") or die (mysql_error());
  		// menjadikannya array
  		$datakode = mysql_fetch_array($carikode);
  		// jika $datakode
  		if ($datakode) {
   		// membuat variabel baru untuk mengambil kode barang mulai dari 1
   		$nilaikode = substr($datakode[0], 2);
   		// menjadikan $nilaikode ( int )
   		$kode = (int) $nilaikode;
   		// setiap $kode di tambah 1
   		$kode = $kode + 1;
   		// hasil untuk menambahkan kode 
   		// angka 3 untuk menambahkan tiga angka setelah B dan angka 0 angka yang berada di tengah
   		// atau angka sebelum $kode
   		$hasilkode = "LA".str_pad($kode, 4, "0", STR_PAD_LEFT);
  		} else {
   		$hasilkode = "LA0001";
  		}

		$nama_pelapor = $_POST['nama_pelapor'];
		$nama_sarana = $_POST['nama_sarana'];
		$nama_pemilik_sarana = $_POST['nama_pemilik_sarana'];
		$nomor_hp_sarana = $_POST['nomor_hp_sarana'];
		$link_akun_medsos = $_POST['link_akun_medsos'];
		$jenis_platform = $_POST['jenis_platform'];
		$platform = $_POST['platform'];
		$alamat_sarana = $_POST['alamat_sarana'];
		$jenis_pelanggaran = $_POST['jenis_pelanggaran'];
		$produk_dijual = $_POST['produk_dijual'];
		$nama_produk = $_POST['nama_produk'];
		$kandungan = $_POST['kandungan'];
		$produsen = $_POST['produsen'];
		$golongan = $_POST['golongan'];
		$kelas_terapi = $_POST['kelas_terapi'];
		$status = $_POST['status'];
		$informasi_awal = $_POST['informasi_awal'];
		$foto = $_FILES["foto"]["name"];
		$tmp = $_FILES["foto"]["tmp_name"];
		$tgl_lapor = date("Y-m-d");
		
  
		// Rename nama fotonya dengan menambahkan tanggal dan jam upload
		$fotobaru = date('dmYHis').$foto;
		// Set path folder tempat menyimpan fotonya
		$path = "../../assets/file/".$fotobaru;

		if(move_uploaded_file($tmp, $path))
		{
				
			$sql="INSERT INTO laporan_awal SET id_la='$hasilkode', nama_pelapor='$nama_pelapor', nama_sarana='$nama_sarana', nama_pemilik_sarana='$nama_pemilik_sarana', no_hp='$nomor_hp_sarana', link_akun_medsos='$link_akun_medsos', jenis_platform='$jenis_platform',platform='$platform', alamat_sarana='$alamat_sarana', nama_produk='$nama_produk', kandungan='$kandungan', produsen='$produsen', golongan='$golongan', kelas_terapi='$kelas_terapi', status='$status', informasi_awal='$informasi_awal', tgl_lapor='$tgl_lapor', file='$fotobaru'";
			$query=mysql_query($sql) or die(mysql_error().$sql);
			
			$jlh = count($produk_dijual); 
			for($i=0;$i<$jlh;$i++)		
			{		
				$sql="INSERT INTO detail_produk_la SET id_la='$hasilkode', produk_dijual='$produk_dijual[$i]'";
				$query=mysql_query($sql) or die(mysql_error());
			}
			$jlh3 = count($jenis_pelanggaran); 
			for($i=0;$i<$jlh3;$i++)		
			{		
				$sql="INSERT INTO detail_pelanggaran_la SET id_la='$hasilkode', jenis_pelanggaran='$jenis_pelanggaran[$i]'";
				$query=mysql_query($sql) or die(mysql_error());
			}
				$sql = "SELECT * FROM laporan_awal WHERE file LIKE '%$fotobaru'";
				$query = mysql_query($sql);
				$data1= mysql_fetch_array($query);
                $id_la = $data1['id_la'];
                

				$success = "Terima Kasih Atas Laporan Anda, Silahkan catat nomor Pengaduan anda : $id_la" ;
				$msg = base64_encode($success);
				header('location:../../index.php?mod=laporan_awal&act=add&s=1&msg='.$msg);
		}	
		else
		{
				
			$sql="INSERT INTO laporan_awal SET id_la='$hasilkode', nama_pelapor='$nama_pelapor', nama_sarana='$nama_sarana', nama_pemilik_sarana='$nama_pemilik_sarana', no_hp='$nomor_hp_sarana', link_akun_medsos='$link_akun_medsos', jenis_platform='$jenis_platform',platform='$platform', alamat_sarana='$alamat_sarana', nama_produk='$nama_produk', kandungan='$kandungan', produsen='$produsen', golongan='$golongan', kelas_terapi='$kelas_terapi', status='$status', informasi_awal='$informasi_awal', tgl_lapor='$tgl_lapor', file=''";
			$query=mysql_query($sql) or die(mysql_error().$sql);
			
			$jlh = count($produk_dijual); 
			for($i=0;$i<$jlh;$i++)		
			{		
				$sql="INSERT INTO detail_produk_la SET id_la='$hasilkode', produk_dijual='$produk_dijual[$i]'";
				$query=mysql_query($sql) or die(mysql_error());
			}
			$jlh3 = count($jenis_pelanggaran); 
			for($i=0;$i<$jlh3;$i++)		
			{		
				$sql="INSERT INTO detail_pelanggaran_la SET id_la='$hasilkode', jenis_pelanggaran='$jenis_pelanggaran[$i]'";
				$query=mysql_query($sql) or die(mysql_error());
			}
				$sql = "SELECT * FROM laporan_awal WHERE id_la='$hasilkode'";
				$query = mysql_query($sql);
				$data1= mysql_fetch_array($query);
                $id_la = $data1['id_la'];
                
				$success = "Terima Kasih Atas Laporan Anda, Silahkan catat nomor Pengaduan anda : $id_la" ;
				$msg = base64_encode($success);
				header('location:../../index.php?mod=laporan_awal&act=add&s=1&msg='.$msg);
		}	
	}	
?>