<?php
include "a/koneksi.php";
$kd_mapel=$_GET['id'];
$query=mysql_query("select*from mapel where kd_mapel='$kd_mapel'");
$row=mysql_fetch_array($query); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
   <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.jpg">
    <title>MTS Al-Azhar</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="../plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="../plugins/bower_components/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="../plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/colors/default.css" id="theme" rel="stylesheet">
</head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                    <!-- Logo -->
                    <a class="logo" href="index.php">
                        <!-- Logo icon image, you can use font-icon also --><b>
                        <!--This is dark logo icon--><img src="../plugins/images/admin-logo.jpg" alt="home" class="dark-logo" /><!--This is light logo icon--><img src="../plugins/images/admin-logo-dark.jpg" alt="home" class="light-logo" />
                     </b>
                        <!-- Logo text image you can use text also --><span class="hidden-xs">
                        <!--This is dark logo text--><img src="../plugins/images/admin-text.png" alt="home" class="dark-logo" /><!--This is light logo text--><img src="../plugins/images/admin-text-dark.png" alt="home" class="light-logo" />
                     </span> </a>
                </div>
                <!-- /Logo -->
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <a class="profile-pic"> <img src="../../kp1/html/rana.jpg" width="36" class="img-circle"><b class="hidden-xs">Admin</b></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span>Navigation</span></h3>
                </div>
                <ul class="nav" id="side-menu">
                    <li style="padding: 70px 0 0;">
                        <a href="index.php" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="?page=wali-kelas" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i>Wali Kelas</a>
                    </li>
                    <li>
                        <a href="?page=guru" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i>Guru</a>
                    </li>
                    </li>
                    <li>
                        <a href="logout.php" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i>Log out</a>
                    </li>
                </ul>
            </div>
            
        </div>

        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>

           <?php
    if(isset($_GET['page'])){
      $menu = $_GET['page'];
        switch ($menu) {
          case "data":
            include "profile.html";
            break;
          case "absensi";
            include "personal.php";
            break;
          case "rekap-absensi":
            include "siswa.php";
            break;
          case "show-guru":
            include "show-guru.php";
            break;
          case "edit-guru":
            include "edit-guru.php";
            break;
          case 'show-siswa':
            include 'show-siswa.php';
            break;
          case 'staf':
            include 'karyawan.php';
            break;
          case "grup":
            include "grup.php";
            break;
          case "mapel":
            include "show-mapel.php";
            break;
          case "jadwal":
            include "jadwal.php";
            break;
          case "ekskul":
            include "ekskul.php";
            break;
          default:
            include "404.html";
       }
   }
    ?>
                <!--/.row -->

                <!-- /.row -->
                <!-- .row -->
                    <div class="col-md-8 col-xs-12">
                        <div class="white-box">
                            <form class="form-horizontal form-material" method="POST" action="a/update_mapel.php" >
                                <h1 align="center"> Mata Pelajaran </h1>
                                <div class="form-group">
                                    <label class="col-md-12">Kode Mapel</label>
                                    <div class="col-md-12">
                                        <input type="text" type="text" name="kd_mapel"  class="form-control form-control-line"  value="<?php echo $row['kd_mapel'];?>"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Nama Mapel</label>
                                    <div class="col-md-12">
                                        <input type="text" type="text" name="nama_mapel"  class="form-control form-control-line" value="<?php echo $row['nama_mapel'];?>"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">NIP</label>
                                    <div class="col-md-12">
                                        <input type="text"  class="form-control form-control-line" name="nip"   value="<?php echo $row['nip'];?>"> </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success" name="submit">Tambah</button>
                                    </div>
                                </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <?php
    if(isset($_GET['page'])){
      $menu = $_GET['page'];
        switch ($menu) {
          case "data":
            include "profile.html";
            break;
          case "absensi";
            include "personal.php";
            break;
          case "rekap-absensi":
            include "siswa.php";
            break;
          case "show-guru":
            include "show-guru.php";
            break;
          case "edit-guru":
            include "edit-guru.php";
            break;
          case 'show-siswa':
            include 'show-siswa.php';
            break;
          case 'staf':
            include 'karyawan.php';
            break;
          case "grup":
            include "grup.php";
            break;
          case "mapel":
            include "show-mapel.php";
            break;
          case "jadwal":
            include "jadwal.php";
            break;
          case "ekskul":
            include "ekskul.php";
            break;
          default:
            include "404.html";
       }
   }
    ?>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Counter js -->
    <script src="../plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
    <script src="../plugins/bower_components/counterup/jquery.counterup.min.js"></script>
    <!-- chartist chart -->
    <script src="../plugins/bower_components/chartist-js/dist/chartist.min.js"></script>
    <script src="../plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="../plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
    <script src="js/dashboard1.js"></script>
    <script src="../plugins/bower_components/toast-master/js/jquery.toast.js"></script>
</body>

</html>
