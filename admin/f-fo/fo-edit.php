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
    <title>PT. LinkNet_Team-FO</title>
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

  <!-- menu awal -->
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
            <a class="nav-link">Selamat Datang Teknisi Fiber Optik</a>
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
                <a class="nav-link" href="node-tampil.php">
                  <i class="nav-icon icon-pencil"></i> Data Node ID</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="fo-tampil.php">
                  <i class="nav-icon icon-pencil"></i> Data Fiber Optik</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="fo-pdf.php">
                  <i class="nav-icon icon-pencil"></i> File PDF</a>
              </li>

            </ul>
          </nav>
        </div>


  <!-- Breadcrumb -->
        <main class="main">
          <!-- Breadcrumb-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item">
              <a href="#">Admin</a>
            </li>
            <li class="breadcrumb-item active">Dashboard</li>
            <!-- Breadcrumb Menu-->
            <li class="breadcrumb-menu d-md-down-none">
              <div class="btn-group" role="group" aria-label="Button group">
                <a class="btn" href="#">
                  <i class="icon-speech"></i>
                </a>

              </div>
            </li>
          </ol>


          <div class="container-fluid">
            <div class="animated fadeIn">

<!-- awal -->
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">Edit Registrasi Jaringan</div>
          <div class="card-body">
          <?php
          	include '../koneksi.php';
          	$node_id = $_GET['node_id'];
          	$data = mysqli_query($koneksi,"select * from t_fo where node_id='$node_id'");
          	while($d = mysqli_fetch_array($data)){
      		?>

          <!--awal -->
          <form action="fo-update.php" method="post" name="input" onSubmit="return validasi()">
          <div class="col-md-5">
            <table class="table table-borderless">
                <tr>
                  <td>Node ID</td>
                  <td>
                      <input class="form-control" type="text" name="node_id" value="<?php echo $d['node_id']; ?>" id="node_id" readonly>
                  </td>
                </tr>
                <tr>
                  <td>Node Deskription</td>
                  <td>
                    <input class="form-control" type="text" name="node_des" value="<?php echo $d['node_des']; ?>" id="node_des" readonly>
                  </td>
                </tr>
                <tr>
                  <td>Regional</td>
                  <td>
                    <input class="form-control" type="text" name="regional" value="<?php echo $d['regional']; ?>" id="regional" readonly>
                  </td>
                </tr>
                <tr>
                  <td>Hub Name</td>
                  <td>
                    <input class="form-control" type="text" name="hub_name" value="<?php echo $d['hub_name']; ?>" id="hub_name" readonly>
                  </td>
                </tr>
                <tr>
                  <td>Rack</td>
                  <td>
                    <input class="form-control" type="text" name="rack" value="<?php echo $d['rack']; ?>" id="rack">
                  </td>
                </tr>
                <tr>
                  <td>Jarak Normal</td>
                  <td>
                    <input class="form-control" type="text" name="jarak_normal" value="<?php echo $d['jarak_normal']; ?>" id="jarak_normal">
                  </td>
                </tr>
                <tr>
                  <td>PIC</td>
                  <td>
                    <input class="form-control" type="text" name="pic" value="<?php echo $d['pic']; ?>" id="pic">
                  </td>
                </tr>
              <tr>
                  <td></td>
                  <td>
                    <button class="btn btn-primary px-4" type="submit">Kirim</button>
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

      <script>

      function validasi(){
        var x = document.forms["input"]["node_id"].value;
        if (x == null || x == "") {
          alert("Node ID Tidak Boleh Kosong");
          return false;
        }
        var x = document.forms["input"]["node_des"].value;
        if (x == null || x == "") {
          alert("Node description Harus Angka");
          return false;
        }
        var x = document.forms["input"]["regional"].value;
        if (x == null || x == "") {
          alert("Regional Tidak Boleh Kosong");
          return false;
        }
        var x = document.forms["input"]["hub_name"].value;
        if (x == null || x == "") {
          alert("Hub Name Tidak Boleh Kosong");
          return false;
        }
        var x = document.forms["input"]["rack"].value;
        if (x == null || x == "") {
          alert("Rack Tidak Boleh Kosong");
          return false;
        }
        var x = document.forms["input"]["jarak_normal"].value;
        if (x == null || x == "") {
          alert("Jarak Normal Tidak Boleh Kosong");
          return false;
        }
        var x = document.forms["input"]["pic"].value;
        if (x == null || x == "") {
          alert("PIC Tidak Boleh Kosong");
          return false;
        }
      }
      </script>

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
