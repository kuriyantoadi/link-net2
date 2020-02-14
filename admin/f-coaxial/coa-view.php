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
    <title>PT. LinkNet_Coaxial</title>
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
            <a class="nav-link">Selamat Datang Teknisi Coaxial</a>
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
                <a class="nav-link" href="coa-tampil.php">
                  <i class="nav-icon icon-pencil"></i> Tampil Coaxial</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="coa-pdf.php">
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
          <div class="card-header">Edit User</div>
          <div class="card-body">
          <?php
          	include '../koneksi.php';
          	$node_id = $_GET['node_id'];
          	$data = mysqli_query($koneksi,"select * from t_coaxial where node_id='$node_id'");
          	while($d = mysqli_fetch_array($data)){
      		?>

          <!--awal -->
          <form action="coa-update.php" method="post" name="input" onSubmit="return validasi()" enctype="multipart/form-data">
          <div class="col-md-12">
            <table class="table table-borderless">
              <tr>
                <td>Node ID</td>
                <td colspan="2">
                    <input class="form-control" type="text"  name="node_id" value="<?php echo $d['node_id']; ?>" readonly>
                </td>
              </tr>
              <tr>
                <td>Node Description</td>
                <td colspan="2">
                    <input class="form-control" type="text"  name="node_des" value="<?php echo $d['node_des']; ?>" readonly>
                </td>
              </tr>
              <tr>
                <td>Regional</td>
                <td colspan="2">
                    <input class="form-control" type="text"  name="regional" value="<?php echo $d['regional']; ?>" readonly>
                </td>
              </tr>

              <tr>
                <td>Hub Name </td>
                <td colspan="2">
                    <input class="form-control" type="text" name="hub_name" value="<?php echo $d['hub_name']; ?>" readonly>
                </td>
              </tr>
              <tr>
                <td>Optical Input Node</td>
                <td>
                    <input class="form-control" type="text" name="optical_input_node" value="<?php echo $d['optical_input_node']; ?>" id="optical_input_node">
                </td>
                <td>AC</td>
                <td>
                  <input class="form-control" type="text" name="optical_ac" value="<?php echo $d['optical_ac']; ?>" id="optical_ac">
                </td>
                <td>DC</td>
                <td>
                  <input class="form-control" type="text" name="optical_dc" value="<?php echo $d['optical_dc']; ?>" id="optical_dc">
                </td>
              </tr>
              <tr>
                <td>Signal Input Low</td>
                <td>
                    <input class="form-control" type="text" name="signal_input_low" value="<?php echo $d['signal_input_low']; ?>" id="signal_input_low">
                </td>
                <td>High</td>
                <td>
                  <input class="form-control" type="text" name="signal_input_high" value="<?php echo $d['signal_input_high']; ?>" id="signal_input_high">
                </td>
              </tr>
              <tr>
                <td>Signal Output Low</td>
                <td>
                    <input class="form-control" type="text" name="signal_output_low" value="<?php echo $d['signal_output_low']; ?>" id="signal_output_low">
                </td>
                <td>High</td>
                <td>
                  <input class="form-control" type="text" name="signal_output_high" value="<?php echo $d['signal_output_high']; ?>" id="signal_output_high">
                </td>
                <td>Rev</td>
                <td>
                  <input class="form-control" type="text" name="signal_output_rev" value="<?php echo $d['signal_output_rev']; ?>" id="signal_output_rev">
                </td>
              </tr>
              <tr>
                <td>Docsis DP*</td>
                <td>
                    <input class="form-control" type="text" name="docsis_dp" value="<?php echo $d['docsis_dp']; ?>" id="docsis_dp">
                </td>
                <td>UP</td>
                <td>
                  <input class="form-control" type="text" name="docsis_up" value="<?php echo $d['docsis_up']; ?>" id="docsis_up">
                </td>
                <td>DS*</td>
                <td>
                  <input class="form-control" type="text" name="docsis_ds" value="<?php echo $d['docsis_ds']; ?>" id="docsis_ds">
                </td>
              <tr>
                <td>Quality MER</td>
                <td>
                    <input class="form-control" type="text" name="quality_mer" value="<?php echo $d['quality_mer']; ?>" id="quality_mer">
                </td>
                <td>BER</td>
                <td>
                  <input class="form-control" type="text" name="quality_ber" value="<?php echo $d['quality_ber']; ?>" id="quality_ber">
                </td>
                <td>C/N</td>
                <td>
                  <input class="form-control" type="text" name="quality_cn" value="<?php echo $d['quality_cn']; ?>" id="quality_cn">
                </td>
              </tr>
              <tr>
                <td>PIC</td>
                <td colspan="2">
                  <input class="form-control" type="text" name="pic" value="<?php echo $d['pic']; ?>" id="pic">
                </td>
              </tr>

              <tr>
                <td>Upload File</td>
                <td>
                  <input type="file" name="upload[]" accept="pdf/*" multiple="multiple">
                </td>
              </tr>


              <tr>
                <td>File PDF</td>
                <td colspan="2">

                  <?php
                    $dir = "../f-fo/upload/*";
                    $no = 1;

                      // Open a known directory, and proceed to read its contents
                      foreach(glob($dir.$node_id.'-'.'*') as $file)
                      {
                        echo $no++;
                        echo ".file pdf";
                        echo "";
                        echo "<a href='$file'>$file</a>";
                        echo "<br>";
                      }
                  ?>
                </td>
              </tr>


                <?php
              }
              ?>


              <tr>
                <td></td>
                <td>
                  <button class="btn btn-primary px-4" type="submit" >Kirim ke Teknisi Hub</button>
                </td>
              </tr>
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
    <script src="cek-input.js"></script>
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
