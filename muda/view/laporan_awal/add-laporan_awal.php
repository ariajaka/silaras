<?php 
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $editsql = "SELECT * FROM laporan_awal WHERE id_la = '$id'";
        $dataedit = mysql_query($editsql);
        $edit = mysql_fetch_assoc($dataedit);
    }
 ?>
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
                            <!-- ID in Hidden-->
                            <input type="text" name="id" value="<?php echo $edit['id_la'] ?>" hidden>
                            <!-- ID in Hidden -->  
                            <?php $user_login = $_SESSION['username']; ?>
                            <!-- ID in Hidden-->
                            <input type="text" name="nip_perekomendasi" value="<?= $user_login; ?>" hidden>
                            <!-- ID in Hidden -->  
                            <div class="form-group">
                                <label class="form-label" for="formfield4">Saran/Rekomendasi Tindak Lanjut</label>
                                <span class="desc pull-right">
                                    <a class="btn btn-default btn-sm" onClick="addRow('Nama Rekomendasi')"><i class="fa fa-plus"></i></a>
                                    <a class="btn btn-default btn-sm" onClick="deleteRow('Nama Rekomendasi')"><i class="fa fa-trash"></i></a>
                                </span>
                                <table id="Nama Rekomendasi" width="100%" border="0">
                                    <tbody>
                                        <tr>
                                            <td width="5%"><input type="checkbox" name="chk"></td>
                                            <td width="95%">
                                                <select name="cmbRekomendasi[]" id="cmbRekomendasi" class="form-control">
                                                    <option value="0">--  Pilih Saran/Rekomendasi Tindak Lanjut  --</option>
                                                    <option value="Dilakukan Giat Intelijen">Dilakukan Giat Intelijen</option>
                                                    <option value="Penindakan">Penindakan</option>
                                                    <option value="Pembinaan (Dilaporkan ke Seksi Infokom atau Seksi Pemeriksaan)">Pembinaan (Dilaporkan ke Seksi Infokom atau Seksi Pemeriksaan)
                                                    </option> 
                                                </select>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>         
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
