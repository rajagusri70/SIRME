<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Rekam Medis Rawat Jalan</title>

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
                <h3 align="center">Rumah Sakit Umum XYZ</h3>
                <h2 align="center">Laporan Rawat Jalan</h2>
                <h2 align="center">No. RM <b><?php echo $id_rawat ?></b></h2> 
                <div class="clearfix"></div>
                <div class="x_content">
                  <div class="ln_solid"></div>
                  <?php foreach ($rawat_jalan as $rj) {?>
                  <table>
                    <tr>
                      <td><b>Tanggal</b></td>
                      <td>&nbsp;:&nbsp;</td>
                      <td><?php echo substr($rj->tanggal, 0,2) ?> <?php 
                      $b = substr($rj->tanggal, 3,2);
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
                      }elseif ($b=="09") {
                        $bulan = "September";
                      }elseif ($b=="10") {
                        $bulan = "Oktober";
                      }elseif ($b=="11") {
                        $bulan = "November";
                      }elseif ($b=="12") {
                        $bulan = "Desember";
                      }
                      echo $bulan;
                      ?> <?php echo substr($rj->tanggal, 6) ?></td>
                      <td>&nbsp;&nbsp;</td>
                      <td><b>Jam</b></std>
                      <td>&nbsp;:&nbsp;</td>
                      <td><?php echo substr($rj->waktu, 0,5) ?> WIB</td>
                    </tr>
                  </table>
                <?php } ?>
                  <br>
                  <table >
                    <tr>
                      <td>
                        <?php foreach ($pasien as $ps) {
                        ?>
                        <table>
                          <tr>
                            <td><b>Nama Pasien</b></td>
                            <td>&nbsp;:&nbsp;</td>
                            <td><?php echo $ps->nama; ?></td>
                          </tr>
                          <tr>
                            <td><b>Tgl. Lahir</b></td>
                            <td>&nbsp;:&nbsp;</td>
                            <td><?php echo $ps->tanggal_lahir; ?></td>
                          </tr>
                          <tr>
                            <td><b>Jenis Kelamin</b></td>
                            <td>&nbsp;:&nbsp;</td>
                            <td><?php echo $ps->jenis_kelamin; ?></td>
                          </tr>
                          <tr>
                            <td><b>Status Perkawinan</b></td>
                            <td>&nbsp;:&nbsp;</td>
                            <td><?php echo $ps->status_pernikahan; ?></td>
                          </tr>
                          <tr>
                            <td><b>Kontak</b></td>
                            <td>&nbsp;:&nbsp;</td>
                            <td><?php echo $ps->no_telpon; ?></td>
                          </tr>
                        </table>
                      <?php } ?>
                      </td>
                    </tr>
                  </table>
                  <div class="ln_solid"></div>
                <br>
                  <table class="table table-striped table-bordered">
                    <tr style="font-weight: bold;width: 100%">
                      <td colspan="2">I. Pemeriksaan Jasmani (Vital Sign)</td>
                    </tr>
                    <tr>
                      <td colspan="2" style="text-align: center">
                        <?php foreach ($observation as $ob) { ?>
                          <?php echo $ob->tipe_pemeriksaan.' : '.$ob->hasil.' '.$ob->unit; ?>
                         <br>
                        
                      <?php } ?>
                      </td>
                    </tr>
                  </table><br>
                  <table class="table table-striped table-bordered">
                    <tr style="font-weight: bold;width: 100%">
                      <td colspan="2">II. Riwayat Perjalanan Penyakit (Sendiri/Keluarga)</td>
                    </tr>
                    <tr>
                      <td colspan="2" >
                        <table class="table table-striped table-bordered">
                          <tr align="center">
                            <td><b>No.</b></td>
                            <td><b>Kode ICD-10</b></td>
                            <td><b>Diagnosa</b></td>
                            <td><b>Keterangan</b></td>
                          </tr>
                          <?php 
                          $n=1;
                          foreach ($riwayat_penyakit as $rp) { ?>
                          <tr>
                            <td align="center"><?php echo $n++; ?></td>
                            <td><?php echo $rp->kode_icd10; ?></td>
                            <td><?php echo $rp->diagnosa; ?></td>
                            <td><?php echo $rp->keterangan; ?></td>
                          </tr>
                          <?php }?>
                        </table>
                      </td>
                    </tr>
                  </table><br>
                  <table class="table table-striped table-bordered">
                    <tr style="font-weight: bold;">
                      <td colspan="2">III. Anamnesis</td>
                    </tr>
                    <tr>
                      <td colspan="2">
                        <b>Keluhan Utama</b><br>
                        <table class="table table-striped table-bordered">
                          <tr align="center">
                            <td><b>No.</b></td>
                            <td><b>Keluhan</b></td>
                            <td><b>Keterangan</b></td>
                          </tr>
                          <?php 
                          $n=1;
                          foreach ($keluhan_utama as $ku) { ?>
                          <tr>
                            <td align="center"><?php echo $n++; ?></td>
                            <td><?php echo $ku->keluhan; ?></td>
                            <td><?php echo $ku->keterangan; ?></td>
                          </tr>
                          <?php }?>
                        </table>
                        <b>Keluhan Tambahan</b><br>
                        <table class="table table-striped table-bordered">
                          <tr align="center">
                            <td><b>No.</b></td>
                            <td><b>Keluhan</b></td>
                            <td><b>Keterangan</b></td>
                          </tr>
                          <?php 
                          $n=1;
                          foreach ($keluhan_tambahan as $kt) { ?>
                          <tr>
                            <td align="center"><?php echo $n++; ?></td>
                            <td><?php echo $kt->keluhan; ?></td>
                            <td><?php echo $kt->keterangan; ?></td>
                          </tr>
                          <?php }?>
                        </table>
                      </td>
                    </tr>
                  </table>
                  <br>
                  <table class="table table-striped table-bordered">
                    <tr style="font-weight: bold;width: 100%">
                      <td colspan="2">III. Pemeriksaan Fisik</td>
                    </tr>
                    <tr>
                      <td colspan="2" >
                        <table class="table table-striped table-bordered">
                          <tr align="center">
                            <td><b>No.</b></td>
                            <td><b>Bagian yang Diperiksa</b></td>
                            <td><b>Keterangan</b></td>
                          </tr>
                          <?php 
                          $n=1;
                          foreach ($pemeriksaan_fisik as $pf) { ?>
                          <tr>
                            <td align="center"><?php echo $n++; ?></td>
                            <td><?php echo $pf->periksa; ?></td>
                            <td><?php echo $pf->keterangan; ?></td>
                          </tr>
                          <?php }?>
                        </table>
                      </td>
                    </tr>
                  </table><br>
                  <table class="table table-striped table-bordered">
                    <tr style="font-weight: bold;width: 100%">
                      <td colspan="2">IV. Diagnosis</td>
                    </tr>
                    <tr>
                      <td colspan="2" >
                        <table class="table table-striped table-bordered">
                          <tr align="center">
                            <td><b>No.</b></td>
                            <td><b>Kode ICD-10</b></td>
                            <td><b>Diagnosis</b></td>
                            <td><b>Keterangan</b></td>
                          </tr>
                          
                          <?php 
                          $n=1;
                          foreach ($diagnosis as $dia) { ?>
                          <tr>
                            <td align="center"><?php echo $n++; ?></td>
                            <td><?php echo $dia->kode_diagnosis; ?></td>
                            <td><?php echo $dia->diagnosis; ?></td>
                            <td><?php echo $dia->keterangan; ?></td>
                          </tr>
                          <?php }?>
                        </table><br>
                        <table class="table table-striped table-bordered">
                          <tr style="font-weight: bold;width: 100%">
                            <td colspan="2">V. Rencana Penatalaksanaan</td>
                          </tr>
                          <tr>
                            <td colspan="2" >
                              <table class="table table-striped table-bordered">
                                <tr align="center">
                                  <td><b>No.</b></td>
                                  <td><b>Rencana</b></td>
                                  <td><b>Keterangan</b></td>
                                </tr>
                                
                                <?php 
                                $n=1;
                                foreach ($rencana_penatalaksanaan as $rencana) { ?>
                                <tr>
                                  <td align="center"><?php echo $n++; ?></td>
                                  <td><?php echo $rencana->rencana; ?></td>
                                  <td><?php echo $rencana->keterangan; ?></td>
                                </tr>
                                <?php }?>
                              </table>
                            </td>
                          </tr>
                        </table><br>


                  <style>

                    div.b {
                        position: absolute;
                        right: 10px;
                    } 
                  </style>
                  <div class="b">Dokter Pemeriksa</div>
                <br><br><br><br>
                <?php foreach ($dokter_pemeriksa as $dp) {?>
                <div class="b"><?php echo $dp->nama; ?></div>
                <?php } ?>
                <br><br>
                </div>
              </div>
              <div style="text-align: center;">
              <button type="button" class="btn btn-primary" onclick="window.print()"><a class="" style="color: white"></a>Cetak</button>
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
        tampil_resep();   //pemanggilan fungsi tampil barang.
        //fungsi tampil barang
        function tampil_resep(){
            $.ajax({
                type  : 'POST',
                url   : '<?php echo base_url()?>p_umum/check_up/viewresep/<?php echo $id_poli_umum ?>',
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
    function selesai(){
      swal({
        title: "Ganti Status",
        text: "Apakah anda ingin mengganti status pembayaran pasien menjadi Lunas.?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((simpan) => {
        if (simpan) {
          $.ajax({
          url: "<?php echo base_url().'resepsionis/kasir/updatebayar/'.$id_rawat ?>",
          type: 'POST',
          data: {},
          dataType: "JSON",
          success: function(data) {
            swal({
              title: "Transaksi Lunas",
              text: "Semua pembiayaan rawat jalan pasien telah dilunasi",
              icon: "success",
              buttons: {
                catch: {
                  text: "Oke",
                  value: "catch",
                },
              },
            })
            .then((value) => {
              switch (value) {         
                case "defeat":
                  swal("");
                  break;         
                case "catch":
                  location.reload();
                  break;     
                default:
                  window.close();
              }
            });
          }
        });
        } else {
          
        }
      });
    }
  </script>
</body>

</html>
