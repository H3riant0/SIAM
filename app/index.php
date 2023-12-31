<?php 
session_start();
if(!$_SESSION['nama']){
  header('Location: ../index.php?session=expired');
}
include('header.php');?>
<?php include('../conf/config.php');?>
<!DOCTYPE html>
<html lang="en">
<link rel="icon" href="../logo.png">
<style>      
.logoff { 
  animation: example 4s infinite linear;
  }

@keyframes example {
  0% {color: red;}
  50% {color: yellow;}
  100% {color: red;}
}
</style>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
 <?php include('preloader.php');?>

  <!-- Navbar -->
  <?php include('navbar.php');?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <?php include('logo.php');?>

    <!-- Sidebar -->
    <?php include('sidebar.php');?>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php include('content_header.php');?>
    <!-- /.content-header -->

    <!-- Main content -->
    <?php 
    if (isset($_GET['page'])){
      if ($_GET['page']=='dashboard'){
        include('dashboard.php');
      }
      else if($_GET['page']=='data-Mhs'){
        include('data_Mhs.php');
      }
      else if($_GET['page']=='edit-Mhs'){
        include('edit/edit-Mhs.php');
      }
      else if($_GET['page']=='scan-suratMasuk'){
        include('edit/scan_suratMasuk.php');
      }
      else if($_GET['page']=='data-Pembayaran'){
        include('data_Pembayaran.php');
      }
      else if($_GET['page']=='data-PembayaranMhs'){
        include('data_PembayaranMhs.php');
      }
      else if($_GET['page']=='data-Tagihan'){
        include('data_Tagihan.php');
      }
      else if($_GET['page']=='profile'){
        include('profile.php');
      }       
      else{
        include('not_found.php');
      }
    }
    else{
      include('dashboard.php');
    }?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include('footer.php');?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

</body>
</html>
