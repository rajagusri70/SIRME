<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Resep Obat</title>

  <!-- Bootstrap core CSS -->

  <link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">

  <link href="<?php echo base_url(); ?>/assets/fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/css/animate.min.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="<?php echo base_url(); ?>/assets/css/custom.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/css/icheck/flat/green.css" rel="stylesheet">


  <script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>


  <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>


<body class="">

  <div class="container body">


    <div class="">
      <style type="text/css">
        ul {
          list-style-type: none;
        }
        div.b {
                        position: absolute;
                        right: 0;
                    }
      </style>

      

      <!-- top navigation -->
      
      </div>
      <!-- /top navigation -->

      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                
                <h1 align="center" style="font-size: 21px"><b>Rumah Sakit XYZ</b></h1> 
                <h2 align="center">Poliklinik Umum</h2> 
                <div class="clearfix"></div>
                
                <div class="x_content">
                  
                  <div class="ln_solid"></div>
                  <span style="position: absolute; right: 0" >Bandung, 
                    <?php
                    $bulan = '';
                    echo substr($tanggal_masuk, 0,2) ?> <?php 
                    $b = substr($tanggal_masuk, 3,2);
                    if($b=="01"){
                      $bulan = "Januari";
                    }elseif ($b=="02") {
                      $bulan = "Februari";
                    }elseif ($b=="03") {
                      $bulan = "Maret";
                    }elseif ($b=="04") {
                      $bulan = "April";
                    }elseif($b == "05"){
                      $bulan = "Mei";
                    }elseif ($b=="06") {
                      $bulan = "Juni";
                    }elseif ($b=="07") {
                      $bulan = "Juli";
                    }elseif ($b=="08") {
                      $bulan = "Agustus";
                    }
                    echo $bulan;
                    ?> <?php echo substr($tanggal_masuk, 6) ?></span>
                  <br>
                  Nama Dokter : <b><?php echo $nama_dokter ?></b> <br>
                  SIP : <b><?php echo $nip ?></b><br>
                  <br>
                  
                  <br>
                  <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Kode Obat</th>
                        <th>Nama Obat</th>
                        <th>Kuantitas</th>
                        <th>Keterangan</th>
                        <th align="center">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $n = 1;
                      foreach ($daftar_resep as $dr) {
                      ?>
                        <tr>
                          <td style="vertical-align: middle;" align="center"><?php echo $n++; ?></td>
                          <td style="vertical-align: middle;"><?php echo $dr->no_obat; ?></td>
                          <td style="vertical-align: middle;"><?php echo $dr->nama_obat; ?></td>
                          <td style="vertical-align: middle;"><?php echo $dr->kuantitas; ?></td>
                          <td style="vertical-align: middle;"><?php echo $dr->keterangan; ?></td>
                          <td style="vertical-align: middle;" align="center">
                          <?php $status = $dr->status_resep; 
                          if($status == 'det'){ ?>
                            Sudah dicek
                          <?php }else{ ?>
                            <a href="#" type="button" onclick="update(<?php echo $dr->item_id; ?>)"><i class="fa fa-check-square-o"></i> Cek</a>
                          <?php } ?>
                          </td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                  <button class="btn btn-primary" onclick="tutup()" >Siap Diserahkan</button>
                  <br>
                  <br>
                  <div class="ln_solid"></div>
                  Pro : <b><?php echo $nama; ?></b> <br>
                  Umur : <b><?php echo $umur; ?> Tahun</b><br>
                  Alamat : <b><?php echo $alamat; ?></b><br>
                  <br>
                  
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- footer content -->
        
        <!-- /footer content -->

      </div>
      <!-- /page content -->
    </div>

  </div>

  <div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
  </div>

  <script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
  
  <!-- bootstrap progress js -->
  <script src="<?php echo base_url(); ?>/assets/js/progressbar/bootstrap-progressbar.min.js"></script>
  
  <!-- icheck -->
  <script src="<?php echo base_url(); ?>/assets/js/icheck/icheck.min.js"></script>

  <script src="<?php echo base_url(); ?>/assets/js/custom.js"></script>

  <!-- image cropping -->
  

  <!-- daterangepicker -->
  

  <!-- pace -->
  
  <!-- Datatable -->
  <script src="<?php echo base_url(); ?>/assets/js/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/datatables/dataTables.bootstrap.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/notify/pnotify.core.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/notify/pnotify.buttons.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/notify/pnotify.nonblock.js"></script>

  <!-- Sweet Modal -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/jquery.sweet-modal.min.css" />
  <script src="<?php echo base_url(); ?>/assets/js/jquery.sweet-modal.min.js"></script>

  
  
  <script type="text/javascript">
    function update(item_id){
      var item_id_value = item_id;
      
        $.ajax({
          url: "<?php echo base_url().'apotek/update_status' ?>",
          type: 'POST',
          data: {item_id: item_id_value},
          dataType: "JSON",
          success: function(data) {
            window.location = "<?php echo base_url()?>apotek/atur_resep/<?php echo $id_resep ?>";
          }
          //tampil_resep();
        });

    }
  </script>
  <script type="text/javascript">
    function hapus(no_id){
    var no_id_value = no_id;
    $.sweetModal.confirm('Konfirmasi Hapus', 'Anda yakin ingin menghapus.?', function() {
      $.ajax({
        url: "<?php echo base_url().'p_umum/check_up/hapusresep' ?>",
        type: 'POST',
        data: {no_id: no_id_value},
        dataType: "JSON",
        success: function(data) {
          new PNotify({
              title: 'Sukses',
              text: 'Obat dari resep pasien telah berhasil dihapus!',
              type: 'success',
              nonblock: {
                nonblock: true,
                nonblock_opacity: .2
              }
            });
          tampil_resep();
          }
      });
    }, function() {
        
    });
  }
  </script>
  <script type="text/javascript">
    function tutup(){
      window.close();
    }
  </script>
</body>

</html>
