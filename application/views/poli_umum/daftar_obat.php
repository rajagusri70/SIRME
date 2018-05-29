<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Pilih Obat</title>

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

      

      <!-- top navigation -->
      
      </div>
      <!-- /top navigation -->

      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                
                <h2 align="center">Penyusunan Resep Obat</h2> 
                <div class="clearfix"></div>
                <table id="" class="table table-striped table-bordered">
                    <thead align="center">
                      <tr style="font-weight: bold;">
                        
                        <td>No. Obat</td>
                        <td>Nama Obat</td>
                        <td>Kuantitas</td>
                        <td>Keterangan</td>
                        <td>Update</td>
                        <td>Aksi</td>
                      </tr>
                    </thead>
                    <tbody id="show_resep">
                      <tr>
                       
                      </tr>
                    </tbody>
                  </table>
                <div class="x_content">
                  <button class="btn btn-primary" onclick="tutup()" >Selesai</button>
                  <div class="ln_solid"></div>
                  <p>Silahkan pilih obat yang ingin dimasukan ke Tabel Resep diatas</p>
                  
                  <table id="datatable" class="table table-striped table-bordered">
                    <thead align="center">
                      <tr style="font-weight: bold;">
                        
                        <td>No. Obat</td>
                        <td>Nama Obat</td>
                        <td>Jenis</td>
                        <td>Kategori</td>
                        <td>Harga (Rp.)</td>
                        <td>Stok</td>
                        <td>Aksi</td>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($daftar_obat as $do) { ?>
                      <tr>
                        <td align="center"><?php echo $do->no_obat ?></td>
                        <td><?php echo $do->nama_obat ?></td>
                        <td><?php echo $do->jenis ?></td>
                        <td align="center"><?php echo $do->kategori ?></td>
                        <td align="right"><?php echo $do->harga ?></td>
                        <td align="center"><?php echo $do->stok ?></td>
                        <td align="center"><a class="fa fa-plus-circle" onclick="tambah(<?php echo "$do->no_obat"; ?>)" style="cursor:pointer" ></a></td>
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- footer content -->
        <footer>
          <div class="copyright-info">
            <p class="pull-right">Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>  
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
  <!-- icheck -->
  <script src="<?php echo base_url(); ?>/assets/js/icheck/icheck.min.js"></script>

  <script src="<?php echo base_url(); ?>/assets/js/custom.js"></script>

  <!-- image cropping -->
  <script src="<?php echo base_url(); ?>/assets/js/cropping/cropper.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/cropping/main.js"></script>

  <!-- daterangepicker -->
  <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/moment/moment.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/datepicker/daterangepicker.js"></script>

  <!-- chart js -->
  <script src="<?php echo base_url(); ?>/assets/js/chartjs/chart.min.js"></script>

  <!-- moris js -->
  <script src="<?php echo base_url(); ?>/assets/js/moris/raphael-min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/moris/morris.min.js"></script>

  <!-- pace -->
  <script src="<?php echo base_url(); ?>/assets/js/pace/pace.min.js"></script>
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
        tampil_resep();   //pemanggilan fungsi tampil barang.
        //fungsi tampil barang
        function tampil_resep(){
            $.ajax({
                type  : 'POST',
                url   : '<?php echo base_url()?>p_umum/check_up/viewresep/<?php echo $id_periksa ?>',
                dataType : 'json',
                success : function(data){
                  // console.log(data);
                  if (data.length <= 0){
                    html += '<tr>'+
                                '<td colspan="6" align="center">Belum ada Obat yang dimasukan ke resep</td>'+
                                '</tr>';
                    $('#show_resep').html(html);
                    //setTimeout(tampil_resep, 500)
                  }else{
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td align="center">'+data[i].no_obat+'</td>'+
                                '<td>'+data[i].nama_obat+'</td>'+
                                '<td><input id="kuantitas_input'+data[i].no_id+'" value="'+data[i].kuantitas+'" type="number"  ></td>'+
                                '<td><input id="keterangan_input'+data[i].no_id+'" value="'+data[i].keterangan+'"></td>'+
                                '<td align="center"><button class="" onclick="update_resep('+data[i].no_id+')">Kirim</button></td>'+
                                '<td align="center"><a class="fa fa-remove" onclick="hapus('+data[i].no_id+')" style="cursor:pointer" ></a></td>'+
                                '</tr>';
                    }
                    $('#show_resep').html(html);
                    //setTimeout(tampil_resep, 500)
                  }
                }, 
                error: function(){
                  
                }
 
            });
        }
      
  </script>
  <script type="text/javascript">
    function dataTable(){}
    $(document).ready(function(){
      $('#datatable').DataTable();
    });
  </script>
  <script type="text/javascript">
    function tambah(no_obat){
      var no_obat_value = no_obat;
      var id_periksa_value = <?php echo $id_periksa; ?>;
      
        $.ajax({
          url: "<?php echo base_url().'p_umum/check_up/tambahresep' ?>",
          type: 'POST',
          data: {no_obat: no_obat_value, id_periksa: id_periksa_value},
          dataType: "JSON",
          success: function(data) {
            
            new PNotify({
              title: 'Sukses',
              text: 'Obat telah berhasil ditambahkan ke resep',
              type: 'success'
            });
            tampil_resep();
          }
          //tampil_resep();
        });

    }
  </script>
  <script type="text/javascript">
    function update_resep(no_id){
      var no_id_value = no_id;
      var kuantitas_value = $("#kuantitas_input"+no_id_value).val();
      var keterangan_value = $("#keterangan_input"+no_id_value).val();;
      
        $.ajax({
          url: "<?php echo base_url().'p_umum/check_up/updateresep' ?>",
          type: 'POST',
          data: {no_id: no_id_value, kuantitas: kuantitas_value, keterangan: keterangan_value},
          dataType: "JSON",
          success: function(data) {
            
            new PNotify({
              title: 'Sukses',
              text: 'Keterangan Resep telah berhasil di ganti',
              type: 'success'
            });
            tampil_resep();
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
