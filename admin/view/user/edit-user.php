<?php 
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $editsql = "SELECT * FROM user WHERE id_user = $id";
        $dataedit = mysql_query($editsql);
        $edit = mysql_fetch_assoc($dataedit);
    }
 ?>
<div class="col-lg-12">
<section class="box ">
    <header class="panel_header">
        <h2 class="title pull-left">Edit user &nbsp;
            <a href="index.php?mod=user" class="btn btn-primary">Lihat Daftar user</a>
        </h2>
        <div class="actions panel_actions pull-right">
            <i class="box_toggle fa fa-chevron-down"></i>
            <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
            <i class="box_close fa fa-times"></i>
        </div>
    </header>
    <div class="content-body">    
        <div class="row">
            <form role="form" action="sql/user/edit.php" method="POST" onsubmit="return validasi(this)">
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
                    <div class="form-group">
                        <label class="form-label" for="formfield1">Nama Lengkap</label>
                        <span class="desc">e.g. "Rudi Hartono"</span>
                        <div class="controls">
                            <input type="text" class="form-control" id="formfield1" name="nama" value="<?php echo $edit['nama'] ?>" required >
                        </div>
                    </div>

                    <!-- ID in Hidden-->
                        <input type="text" name="id" value="<?php echo $edit['id_user'] ?>" hidden>
                    <!-- ID in Hidden -->

                    <div class="form-group">
                        <label class="form-label" for="formfield2">Username</label>
                        <span class="desc">e.g. "admin"</span>
                        <div class="controls">
                            <input type="text" class="form-control" id="formfield2" name="username" value="<?php echo $edit['username'] ?>" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="formfield3">Password</label>
                        <span class="desc">e.g. "******"</span>
                        <div class="controls">
                            <input type="password" class="form-control" id="formfield3" name="password" value="<?php echo $edit['password'] ?>" required >
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="form-label" for="formfield4">Ulangi Password</label>
                        <span class="desc">e.g. "******"</span>
                        <div class="controls">
                            <input type="password" class="form-control" id="formfield4" name="password2" value="<?php echo $edit['password'] ?>" required >
                        </div>
                    </div>
                 <div class="form-group">
                        <label class="form-label" for="formfield1">Nomor HP</label>
                        <span class="desc">e.g. "0812312131"</span>
                        <div class="controls">
                            <input type="text" class="form-control" id="formfield1" name="no_hp" value="<?php echo $edit['no_hp'] ?>">
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
</section>
</div>