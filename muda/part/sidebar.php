<!-- SIDEBAR - START -->
            <div class="page-sidebar ">
                <!-- MAIN MENU - START -->
                <div class="page-sidebar-wrapper" id="main-menu-wrapper"> 
                    <!-- USER INFO - START -->
                    <div class="profile-info row">
                        <div class="profile-image col-md-4 col-sm-4 col-xs-4">
                            <a>
                                <img src="../assets/images/user.png" class="img-responsive img-circle">
                            </a>
                        </div>
                        <div class="profile-details col-md-8 col-sm-8 col-xs-8">
                            <h3>
                                <a href="ui-profile.html">Hallo</a>
                                <!-- Available statuses: online, idle, busy, away and offline -->
                                <span class="profile-status online"></span>
                            </h3>
                            <p class="profile-title">
                            <?= $_SESSION['id_nama']; ?> </p>
                        </div>
                    </div>
                    <!-- USER INFO - END -->
                    
                    <ul class='wraplist'>	
                        <li
                        <?php if (isset($_GET['mod'])) {
                            $mod = $_GET['mod'];
                            if ($mod == 'dashboard') {
                                echo "class='open'";
                            }
                        } ?>
                        > 
                            <a href="index.php">
                                <i class="fa fa-dashboard"></i>
                                <span class="title">Home</span>
                            </a>
                        </li>
                        <li
                            <?php if (isset($_GET['mod'])) {
                                $mod = $_GET['mod'];
                                if ($mod == 'laporan_awal') {
                                    echo "class='open'";
                                }
                            } ?>
                        > 
                            <a href="javascript:;">
                                <i class="fa fa-envelope"></i>
                                <span class="title">Laporan Awal Kasus</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="fa fa-envelope" href="index.php?mod=laporan_awal&view=laporan_awal"> Baru</a></i>
                                </li>
                                <li>
                                    <a class="fa fa-envelope" href="index.php?mod=laporan_awal_rekom&view=laporan_awal_rekom"> Sudah Rekomendasi</a></i>
                                </li>
                           </ul>

                        </li>
                    </ul>

                </div>
                <!-- MAIN MENU - END -->
                <div class="project-info">

                    <div style="color:white;padding:10px 10px 10px 10px;">
                        <center>BPOM di Jambi| Copyright &copy; 2020</center>
                    </div>
                    <div class="block1" style="display: none;">
                        <div class="data">
                            <span class='title'>Total Tamu</span>
                            <span class='total'>245</span>
                        </div>
                        <div class="graph">
                            <span class="sidebar_orders">...</span>
                        </div>
                    </div>

                    <div class="block2" style="display: none;">
                        <div class="data">
                            <span class='title'>Total Kritik</span>
                            <span class='total'>990</span>
                        </div>
                        <div class="graph">
                            <span class="sidebar_visitors">...</span>
                        </div>
                    </div>
                </div>
            </div>
            <!--  SIDEBAR - END -->