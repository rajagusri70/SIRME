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
                  <span style="position: absolute; right: 0" >Bandung, <?php echo substr($tanggal_masuk, 0,2) ?> <?php 
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
                  <i style="font-size: 24px">R/</i>
                  <br>
                  <ul>
                    <?php foreach ($daftar_resep as $dr) {?>
                    <li style="font-size: 16px"><?php echo $dr->nama_obat ?></li>
                    <li><?php echo $dr->keterangan ?></li>
                    <?php } ?>
                    <!-- <li style="font-size: 16px">Paracetamol 120mg</li>
                    <li>s.t.d.d C. P</li>
                    <li style="font-size: 16px">O.B.H. 300mL</li>
                    <li>s.t.d.d C. P</li> -->
                  </ul>
                  <br>
                  <br>
                  <div class="ln_solid"></div>
                  Pro : <b><?php echo $nama; ?></b> <br>
                  Umur : <b><?php echo $umur; ?> Tahun</b><br>
                  Alamat : <b><?php echo $alamat; ?></b><br>
                  <br>
                  <br>
                  <h2 align="center"><a href="">Cetak</a></h2> 
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
