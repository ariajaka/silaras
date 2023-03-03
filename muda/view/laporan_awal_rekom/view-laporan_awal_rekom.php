<div class="col-lg-12">
<section class="box ">
    <header class="panel_header">
        <h2 class="title pull-left">Laporan Awal Yang Sudah direkomendasi</h2>
        <div class="actions panel_actions pull-right">
            <i class="box_toggle fa fa-chevron-down"></i>
            <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
            <i class="box_close fa fa-times"></i>
        </div>
    </header>
    <div class="content-body">    
        <div class="row">
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
            <table id="example-1" class="table table-striped dt-responsive display" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nomor Laporan</th>
                            <th>Tgl. Lapor</th>
                            <th>Nama Pelapor</th>
                            <th>Nomor HP Pelapor</th>
                            <th>Nama Sarana</th>
                            <th>File</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nomor Laporan</th>
                            <th>Tgl. Lapor</th>
                            <th>Nama Pelapor</th>
                            <th>Nomor HP Pelapor</th>
                            <th>Nama Sarana</th>
                            <th>File</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                    <?php 
                        include ('sql/laporan_awal_rekom/view.php');
                        $no = 0;
                        while ($data_laporan_awal = mysql_fetch_assoc($laporan_awal)) {
                            $id_la = $data_laporan_awal['id_la'];
                            $file = $data_laporan_awal['file'];
                            $nip_pelapor = $data_laporan_awal['nama_pelapor'];
                            $no++;
                    ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $data_laporan_awal['id_la']; ?></td>
                            <td><?php 
                                $tgl_lapor = $data_laporan_awal['tgl_lapor'];
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
                            <td><?php 
                                  $sql="SELECT * from laporan_awal a INNER JOIN user b ON a.nama_pelapor=b.username where a.nama_pelapor='$nip_pelapor'"; 
                                  $query = mysql_query($sql)or die("Query failed with error: ".mysql_error());
                                  $data1= mysql_fetch_assoc($query);
                                  
                                  echo $data1['nama']; 
                                  
                                ?>        
                            </td>
                            <td>
                                <?php 
                                  $sql="SELECT * from laporan_awal a INNER JOIN user b ON a.nama_pelapor=b.username where a.nama_pelapor='$nip_pelapor'"; 
                                  $query = mysql_query($sql)or die("Query failed with error: ".mysql_error());
                                  $data1= mysql_fetch_assoc($query);
                                  
                                  echo $data1['no_hp']; 
                                  
                                ?>
                            </td>
                            <td><?php echo $data_laporan_awal['nama_sarana']; ?></td>
                            <td><?php if($file != ''){echo '<a href="view/laporan_awal_rekom/download-laporan_awal_rekom.php?filename='.$file.'" class="badge badge-primary">Download File</div>';}else{echo "";} ?>
                            </td>
                            <td>
                                <a href="view/laporan_awal_rekom/detail-laporan_awal_rekom.php?id_la=<?php echo $data_laporan_awal['id_la'];?>" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal"><i class="fa fa-th-list"></i></a>
                                <a href="view/laporan_awal_rekom/cetak-laporan_awal_rekom.php?id_la=<?php echo $data_laporan_awal['id_la']; ?>" class="btn btn-success btn-sm" target="_blank"><i class="fa fa-print"></i></a>
                            </td>
                        </tr>
                        
                        <?php
                            }
                        ?>

                    </tbody>
                </table>




            </div>
        </div>
    </div>
</section></div>
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        </div>
        <div class="modal-body">
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>

<script src="../../assets/js/jquery-3.2.1.min.js"></script>
  <script language="javascript">
        $('body').on('hidden.bs.modal', '.modal', function () {
            $(this).removeData('bs.modal');
        });
    </script>
<script src="../../assets/js/bootstrap.min.js"></script>
