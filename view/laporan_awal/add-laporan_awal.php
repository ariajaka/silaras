<div class="col-lg-12">
<section class="box ">
    <header class="panel_header">
         <h2 class="title pull-left">Tambah Laporan Awal Kasus &nbsp;
            <a href="index.php?mod=laporan_awal&act=view" class="btn btn-primary">Lihat Daftar Laporan Awal Kasus</a>
        </h2>
        <div class="actions panel_actions pull-right">
            <i class="box_toggle fa fa-chevron-down"></i>
            <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
            <i class="box_close fa fa-times"></i>
        </div>
    </header>
    <div class="content-body"> 
                    <div class="row">
                    <form action="sql/laporan_awal/add.php" method="POST" enctype="multipart/form-data">
                        <div class="col-md-12 col-sm-12 col-xs-12">

                            <?php 
                                if (isset($_GET['msg'])) {
                                    $msg = base64_decode($_GET['msg']);
                                    $s = $_GET['s'];
                                    if ($s == 1) {
                                        echo '<div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <strong>Success! </strong>'.$msg.'
                                        </div>';   
                                    }elseif ($s == 0) {
                                        echo '<div class="alert alert-danger">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <strong>Failed! </strong>'.$msg.'
                                        </div>'; 
                                    }elseif ($s == 2) {
                                        echo '<div class="alert alert-warning">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <strong>Oops! </strong>'.$msg.'
                                        </div>'; 
                                    }
                                }
                             ?>
                            <input type="hidden" class="form-control" id="formfield4" name="nama_pelapor" value="<?= $_SESSION['username']; ?>">
                            <div class="form-group">
                                <label class="form-label" for="formfield4">Nama Sarana/Akun Medsos/Toko</label>
                                <span class="desc">e.g. "Instagram : @cantik_kosmetik"</span>
                                <div class="controls">
                                    <input type="text" class="form-control" id="formfield4" name="nama_sarana" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="formfield4">Nama Pemilik Sarana</label>
                                <span class="desc">e.g. "Markonah"</span>
                                <div class="controls">
                                    <input type="text" class="form-control" id="formfield4" name="nama_pemilik_sarana" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="formfield4">Nomor HP Sarana</label>
                                <span class="desc">e.g. "08176161611"</span>
                                <div class="controls">
                                    <input type="text" class="form-control" id="formfield4" name="nomor_hp_sarana" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="formfield4">Link Akun Medsos/Website</label>
                                <span class="desc">e.g. "http://instagram.com/cantik_kosmetik"</span>
                                <div class="controls">
                                    <input type="text" class="form-control" id="formfield4" name="link_akun_medsos" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="formfield4">Jenis Platform</label>
                                <div class="controls">
                                    <select name="jenis_platform" class="form-control">
                                        <option value="0">--  Pilih Jenis Platform  --</option>
                                        <option value="e-commerce">e-commerce</option>
                                        <option value="website">website</option>
                                        <option value="sosial media">sosial media</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="formfield4">Nama Platform</label>
                                <div class="controls">
                                    <select name="platform" class="form-control">
                                        <option value="0">--  Pilih Nama Platform  --</option>
                                        <option value="Bukalapak">Bukalapak</option>
                                        <option value="Facebook">Facebook</option>
                                        <option value="Instagram">Instagram</option>
                                        <option value="Jd.id">Jd.id</option>
                                        <option value="Lazada">Lazada</option>
                                        <option value="Shopee">Shopee</option>
                                        <option value="Tokopedia">Tokopedia</option>
                                        <option value="Twitter">Twitter</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="formfield4">Alamat Sarana</label>
                                <span class="desc">e.g. "Jl. Teuku Umar No. 11 Jambi"</span>
                                <div class="controls">
                                    <textarea class="form-control" id="formfield4" name="alamat_sarana" required></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="formfield6">Jenis Pelanggaran</label>
                                <span class="desc"></span>
                                <div class="controls">
                                        <input type="checkbox" name="jenis_pelanggaran[]" value="Penjualan Tanpa Kewenangan"> Penjualan Tanpa Kewenangan</br>
                                        <input type="checkbox" name="jenis_pelanggaran[]" value="Tanpa Izin Edar"> Tanpa Izin Edar</br>
                                        <input type="checkbox" name="jenis_pelanggaran[]" value="Pemalsuan Produk"> Pemalsuan Produk</br>
                                        <input type="checkbox" name="jenis_pelanggaran[]" value="Substandar"> Substandar</br>
                                </div>            
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="formfield6">Jenis Komoditas</label>
                                <span class="desc"></span>
                                <div class="controls">
                                        <input type="checkbox" name="produk_dijual[]" value="Kosmetik"> Kosmetik</br>
                                        <input type="checkbox" name="produk_dijual[]" value="Obat Tradisional"> Obat Tradisional</br>
                                        <input type="checkbox" name="produk_dijual[]" value="Pangan"> Pangan</br>
                                        <input type="checkbox" name="produk_dijual[]" value="Obat Keras Daftar G"> Obat Keras Daftar G</br>
                                        <input type="checkbox" name="produk_dijual[]" value="Suplemen Kesehatan"> Suplemen Kesehatan</br>
                                        <input type="checkbox" name="produk_dijual[]" value="Nappza"> Nappza</br>
                                </div>            
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="formfield4">Nama Produk</label>
                                <div class="controls">
                                    <input type="text" class="form-control" id="formfield4" name="nama_produk" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="formfield4">Kandungan</label>
                                <div class="controls">
                                    <input type="text" class="form-control" id="formfield4" name="kandungan" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="formfield4">Produsen</label>
                                <div class="controls">
                                    <input type="text" class="form-control" id="formfield4" name="produsen" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="formfield4">Golongan</label>
                                <div class="controls">
                                    <input type="text" class="form-control" id="formfield4" name="golongan" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="formfield4">Kelas Terapi</label>
                                <div class="controls">
                                    <input type="text" class="form-control" id="formfield4" name="kelas_terapi" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="formfield4">Status</label>
                                <div class="controls">
                                    <select name="status" class="form-control">
                                        <option value="0">--  Pilih Status  --</option>
                                        <option value="Aktif">Aktif</option>
                                        <option value="Tidak Aktif">Tidak Aktif</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="formfield4">Informasi Awal yang ingin disampaikan (Jumlah Produk, Jumlah Followers, Perkiraan Penjualan)</label>
                                <div class="controls">
                                    <textarea class="form-control" id="formfield4" name="informasi_awal" required></textarea>
                                </div>
                            </div>  
                            <div class="form-group">
                                <label class="form-label" for="formfield4">File</label>
                                <div class="controls">
                                    <input class="form-control" type="file" name="foto"/>
                                </div>
                            </div>  
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="pull-right ">
                                    <button type="submit" name="save" class="btn btn-success">Save</button>
                                    <button type="reset" class="btn">Cancel</button>
                                </div>
                            </div>
                    </form>
                    </div>
                    
                </div>
            </section></div>
    </section>
</section>
<!-- END CONTENT -->
