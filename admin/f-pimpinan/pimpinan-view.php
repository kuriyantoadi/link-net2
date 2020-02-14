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
    <title>PT. LinkNet_Head_View</title>
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
            <a class="nav-link">Selamat Datang Pimpinan</a>
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
                <a class="nav-link" href="pimpinan-tampil.php">
                  <i class="nav-icon icon-pencil"></i> Data Pimpinan</a>
                <a class="nav-link" href="../f-lap/index.php">
                <i class="nav-icon icon-pencil"></i> Laporan Pimpinan</a>
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
          <div class="card-header">Rekap Laporan</div>
          <div class="card-body">
          <?php
          	include '../koneksi.php';
          	$node_id = $_GET['node_id'];
          	$data = mysqli_query($koneksi,"select * from pimpinan where node_id='$node_id'");
          	while($d = mysqli_fetch_array($data)){
      		?>

          <!--awal -->
          <form action="pimpinan-approve.php" method="post">
          <div class="col-md-8">
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
                <td>Rack</td>
                <td colspan="2">
                    <input class="form-control" type="text"  name="rack" value="<?php echo $d['rack']; ?>" readonly>
                </td>
              </tr>
              <tr>
                <td>Jarak Normal</td>
                <td colspan="2">
                    <input class="form-control" type="text"  name="jarak_normal" value="<?php echo $d['jarak_normal']; ?>" readonly>
                </td>
              </tr>
              <tr>
                <td>PIC</td>
                <td colspan="2">
                    <input class="form-control" type="text"  name="pic" value="<?php echo $d['pic']; ?>" readonly>
                </td>
              </tr>
              <tr>
                <td>Optical Light Tx</td>
                <td colspan="2">
                    <input class="form-control" type="text"  name="optical_light_tx" value="<?php echo $d['optical_light_tx']; ?>" readonly>
                </td>
              </tr>
              <tr>
                <td>Optical Light Rx</td>
                <td colspan="2">
                    <input class="form-control" type="text"  name="optical_light_rx" value="<?php echo $d['optical_light_rx']; ?>" readonly>
                </td>
              </tr>
              <tr>
                <td>Receiver No</td>
                <td colspan="2">
                    <input class="form-control" type="text"  name="receiver_no" value="<?php echo $d['receiver_no']; ?>" readonly>
                </td>
              </tr>
              <tr>
                <td>Receiver Loss</td>
                <td colspan="2">
                    <input class="form-control" type="text"  name="receiver_loss" value="<?php echo $d['receiver_loss']; ?>" readonly>
                </td>
              </tr>
              <tr>
                <td>Transmitter No</td>
                <td colspan="2">
                    <input class="form-control" type="text"  name="transmitter_no" value="<?php echo $d['transmitter_no']; ?>" readonly>
                </td>
              </tr>
              <tr>
                <td>Transmitter Persen</td>
                <td colspan="2">
                    <input class="form-control" type="text"  name="transmitter_persen" value="<?php echo $d['transmitter_persen']; ?>" readonly>
                </td>
              </tr>
              <tr>
                <td>Signal Trans Low</td>
                <td colspan="2">
                    <input class="form-control" type="text"  name="signal_trans_low" value="<?php echo $d['signal_trans_low']; ?>" readonly>
                </td>
              </tr>
              <tr>
                <td>Signal Trans High</td>
                <td colspan="2">
                    <input class="form-control" type="text"  name="signal_trans_high" value="<?php echo $d['signal_trans_high']; ?>" readonly>
                </td>
              </tr>
              <tr>
                <td>Signal Trans DL</td>
                <td colspan="2">
                    <input class="form-control" type="text"  name="signal_trans_dl" value="<?php echo $d['signal_trans_dl']; ?>" readonly>
                </td>
              </tr>
              <tr>
                <td>CMTS No</td>
                <td colspan="2">
                    <input class="form-control" type="text"  name="cmts_no" value="<?php echo $d['cmts_no']; ?>" readonly>
                </td>
              </tr>
              <tr>
                <td>CMTS Ds</td>
                <td colspan="2">
                    <input class="form-control" type="text"  name="cmts_ds" value="<?php echo $d['cmts_ds']; ?>" readonly>
                </td>
              </tr>
              <tr>
                <td>CMTS Us</td>
                <td colspan="2">
                    <input class="form-control" type="text"  name="cmts_us" value="<?php echo $d['cmts_us']; ?>" readonly>
                </td>
              </tr>
              <tr>
                <td>Optical Input Node</td>
                <td colspan="2">
                    <input class="form-control" type="text"  name="optical_input_node" value="<?php echo $d['optical_input_node']; ?>" readonly>
                </td>
              </tr>
              <tr>
                <td>Optical Ac</td>
                <td colspan="2">
                    <input class="form-control" type="text"  name="optical_ac" value="<?php echo $d['optical_ac']; ?>" readonly>
                </td>
              </tr>
              <tr>
                <td>Optical Dc</td>
                <td colspan="2">
                    <input class="form-control" type="text"  name="optical_dc" value="<?php echo $d['optical_dc']; ?>" readonly>
                </td>
              </tr>
              <tr>
                <td>Signal Input Low</td>
                <td colspan="2">
                    <input class="form-control" type="text"  name="signal_input_low" value="<?php echo $d['signal_input_low']; ?>" readonly>
                </td>
              </tr>
              <tr>
                <td>Signal Input High</td>
                <td colspan="2">
                    <input class="form-control" type="text"  name="signal_input_high" value="<?php echo $d['signal_input_high']; ?>" readonly>
                </td>
              </tr>
              <tr>
                <td>Signal Output Low</td>
                <td colspan="2">
                    <input class="form-control" type="text"  name="signal_output_low" value="<?php echo $d['signal_output_low']; ?>" readonly>
                </td>
              </tr>
              <tr>
                <td>Signal Output Rev</td>
                <td colspan="2">
                    <input class="form-control" type="text"  name="signal_output_rev" value="<?php echo $d['signal_output_rev']; ?>" readonly>
                </td>
              </tr>
              <tr>
                <td>Docsis Dp</td>
                <td colspan="2">
                    <input class="form-control" type="text"  name="docsis_dp" value="<?php echo $d['docsis_dp']; ?>" readonly>
                </td>
              </tr>
              <tr>
                <td>Docsis Up</td>
                <td colspan="2">
                    <input class="form-control" type="text"  name="docsis_up" value="<?php echo $d['docsis_up']; ?>" readonly>
                </td>
              </tr>
              <tr>
                <td>Docsis Ds</td>
                <td colspan="2">
                    <input class="form-control" type="text"  name="docsis_ds" value="<?php echo $d['docsis_ds']; ?>" readonly>
                </td>
              </tr>
              <tr>
                <td>Quality Ber</td>
                <td colspan="2">
                    <input class="form-control" type="text"  name="quality_ber" value="<?php echo $d['quality_ber']; ?>" readonly>
                </td>
              </tr>
              <tr>
                <td>Qaulity Mer</td>
                <td colspan="2">
                    <input class="form-control" type="text"  name="quality_mer" value="<?php echo $d['quality_mer']; ?>" readonly>
                </td>
              </tr>
              <tr>
                <td>Quality Cn</td>
                <td colspan="2">
                    <input class="form-control" type="text"  name="quality_cn" value="<?php echo $d['quality_cn']; ?>" readonly>
                </td>
              </tr>
                <td></td>

                <tr>
                  <td>File PDF</td>
                  <td colspan="2">

                    <?php
                      $dir = "../f-fo/upload/*";
                      $dir_c = "../f-coaxial/upload/*";
                      $no = 1;

                        // Open a known directory, and proceed to read its contents
                        foreach(glob($dir.$node_id.'-'.'*') as $file)
                        {
                          echo $no++;
                          echo ".file dari Teknisi Fiber Optik";
                          echo "";
                          echo "<a href='$file'>$file</a>";
                          echo "<br>";
                        }

                        foreach(glob($dir_c.$node_id.'*') as $file_c)
                        {
                          echo $no++;
                          echo ".file dari Teknisi Coaxial";
                          echo "";
                          echo "<a href='$file_c'>$file_c</a>";
                          echo "<br>";
                        }
                    ?>
                  </td>
                </tr>

                <td>
                  <button class="btn btn-primary px-4" type="submit" >Approve</button>
                  <a type="button" class="btn btn-danger btn-px" href="pimpinan-reject.php?node_id=<?php echo $d['node_id']; ?>" >Reject</a>
                </td>
              </tr>
            <?php  } ?>


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
