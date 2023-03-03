<?php require('cek-login.php') ?>
    <?php include('part/header.php') ?>
    <?php include('part/topbar.php') ?>
    <?php include('config/config.php') ?>

        <!-- START CONTAINER -->
        <div class="page-container row-fluid">
        <?php include('part/sidebar.php') ?>
        <?php include('function/loader.php') ?>
        <?php include('part/chatapi.php') ?>
        </div>    

        </div>
        <!-- END CONTAINER -->
        <!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->

<?php include('part/footer.php') ?>