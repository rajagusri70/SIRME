<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Retrieve Result</title>

  <!-- Bootstrap core CSS -->

  <link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">

  <link href="<?php echo base_url(); ?>/assets/fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/css/animate.min.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="<?php echo base_url(); ?>/assets/css/custom.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/css/icheck/flat/green.css" rel="stylesheet">


  <script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>

</head>

<body class="">
  <div class="container body">
    <div class="">
      <!-- top navigation -->
      
      </div>
      <!-- /top navigation -->

      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12" style="align-items:  center;">
              <div class="x_panel">
                <h3 align="center">FHIR Retrieve Result</h3>
                <h2 align="center"></h2> 
                <div class="clearfix"></div>
                <div class="x_content">
                  <div class="ln_solid"></div>
                  <table style="font-size: 14px">
                    
                  </table>
                </br></br>
                  <table class="table table-striped table-bordered">
                    <thead align="center">
                      <tr style="font-weight: bold;">
                        <td>No</td>
                        <td>Desc.</td>
                        <td>Date</td>
                        <td>Aksi</td>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $num = 1; 
                      foreach ($result as $result) { ?>
                      <tr>
                        <td align="center" ><?php echo $num++; ?></td>
                        <td><?php echo $result->resource->description ?></td>
                        <td><?php echo $result->resource->started ?></td>
                        <td align="center" ><a onclick="add(<?php echo $result->resource->id ?>, '<?php echo $result->resource->resourceType ?>')" class="btn btn-info btn-xs"><i class="fa fa-plus"></i></a>&nbsp;&nbsp;<a href="<?php echo $url.$result->resource->id ?>" target="_blank" class="btn btn-info btn-xs"><i class="fa fa-external-link"></i></a></td>
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <div style="text-align: center;">
              
              </div>
            </div>
          </div>
        </div>
        <!-- footer content -->
        <footer>
          <div class="copyright-info">
            <p class="pull-right">SIRME <a href=""></a>  
            </p>
          </div>
          <div class="clearfix"></div>
        </footer>
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
  <script src="<?php echo base_url(); ?>/assets/js/nicescroll/jquery.nicescroll.min.js"></script>
 

  <script src="<?php echo base_url(); ?>/assets/js/custom.js"></script>
  <!-- Datatable -->
  <script src="<?php echo base_url(); ?>/assets/js/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/datatables/dataTables.bootstrap.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/notify/pnotify.core.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/notify/pnotify.buttons.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/notify/pnotify.nonblock.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/sweetalert.min.js"></script>
  
  <script type="text/javascript">
    
    function add(_id, _resourceType){

      var id_value = _id;
      var resourceType_value = _resourceType;
      var no_pasien_value = <?php echo $no_pasien; ?>;
      swal({
        title: "Tambahkan Data.?",
        text: "Data dari server ini akan ditambahkan ke database rumah sakit. Ingin melanjutkan.?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((simpan) => {
        if (simpan) {
          $.ajax({
          url: "<?php echo base_url().'/fhir/getData' ?>",
          type: 'POST',
          data: {id: id_value, resourceType: resourceType_value, no_pasien: no_pasien_value, server: '<?php echo $url ?>'},
          dataType: "JSON",
          success: function(data) {
            swal({
              title: "Berhasil",
              text: "Data berhasil disimpan",
              icon: "success",
              button: "Ok!",
            });
            opener.location.reload();
          },
          error: function(data) {
            new PNotify({
              title: 'Gagal Menyimpan Data!',
              text: 'Terjadi gagal saat menyimpan data. Dikarenakan error di server atau database',
              type: 'error'
            });
          }
        });
        }else{
          
        }
      });
    }

    
  </script>
</body>

</html>
