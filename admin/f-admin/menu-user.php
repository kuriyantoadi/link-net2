<!DOCTYPE html>

<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>PT. LinkNet_Admin</title>
    <!-- Icons-->
    
    <link href="../node_modules/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
    <link href="../node_modules/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="../node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../node_modules/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="../css/style.css" rel="stylesheet">
    <link href="../vendors/pace-progress/css/pace.min.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');
    </script>
  </head>

  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    <header class="app-header navbar">
      <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">
        <img src="../link-net.png" width="89" height="25">
      </a>

      <ul class="nav navbar-nav d-md-down-none">
        <li class="nav-item px-3">
          <a class="nav-link">Selamat Datang Admin</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="../logout.php" onclick="return confirm('Anda yakin anda keluar ?')">Keluar</a>
        </li>
      </ul>

    </header>
    <div class="app-body">
      <div class="sidebar">
        <nav class="sidebar-nav">
          <ul class="nav">
            <li class="nav-title">Menu</li>

            <li class="nav-item">
              <a class="nav-link" href="user-tambah.php">
                <i class="nav-icon icon-drop"></i> Input Form</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="menu-user.php">
                <i class="nav-icon icon-pencil"></i> Edit User</a>
            </li>
          </ul>
        </nav>
      </div>


<!-- Breadcrumb -->
      <main class="main">
        <!-- Breadcrumb-->
        <ol class="breadcrumb">
        </ol>


        <div class="container-fluid">
          <div class="animated fadeIn">


<!-- awal kolom user-->
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">Edit User Login</div>
                  <div class="card-body">

          <!--awal -->
          <form action="cek_login.php" method="post">
          <div class="col-md-12">
            <a type="button" class="btn btn-primary btn-sm" href="user-tambah.php">Tambah User</a>
            <br><br>
            <table class="table table-hover">
              <tr>
          			<th>No</th>
          			<th>Nama</th>
          			<th>Level</th>
          			<th>Edit</th>
          			<th>Hapus</th>
          		</tr>
              <?php
              include '../koneksi.php';
              $no = 1;
              $data = mysqli_query($koneksi,"select * from user");
              while($d = mysqli_fetch_array($data)){
                ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $d['username']; ?></td>
                  <td><?php echo $d['level']; ?></td>
                  <td>
                    <a type="button" class="btn btn-success btn-sm" href="user-edit.php?id=<?php echo $d['id']; ?>">Edit</a>
                  </td>
                  <td>
                    <a type="button" class="btn btn-danger btn-sm" href="user-hapus.php?id=<?php echo $d['id']; ?>">Hapus</a>
                  </td>
                </tr>
                <?php
              }
              ?>

              </table>
            </div>
          </div>
          <!-- akhir -->



                    <!-- /.row-->

                </div>
              </div>
              <!-- /.col-->
            </div>
            <!-- /.row-->
<!-- akhir -->



    <!-- CoreUI and necessary plugins-->
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../node_modules/pace-progress/pace.min.js"></script>
    <script src="../node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
    <script src="../node_modules/@coreui/coreui/dist/js/coreui.min.js"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="../node_modules/chart.js/dist/Chart.min.js"></script>
    <script src="../node_modules/@coreui/coreui-plugin-chartjs-custom-tooltips/dist/js/custom-tooltips.min.js"></script>
    <script src="../js/main.js"></script>
  </body>
</html>
