<!DOCTYPE html>
<html>
<head>
	<title>Membuat Input Data Ke Database Tanpa Reload Dengan Ajax JQuery | www.malasngoding.com</title>
	<script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
	<style type="text/css">
			font-family: "roboto";
	background: #fcfcfc;
}
 
h1{
	text-align: center;
}
 
.wrap{
	width: 500px;
	margin: 10px auto;		
}
 
.tombol-simpan{
	background: #232323;
	padding: 5px 10px;
	color: #fff;	
}
 
table tr td,table tr th{
	padding: 10px;
}
 
.data{
	border-collapse: collapse;
}
 
.data tr th,.data tr td{
	border: 1px solid #232323;
	</style>
</head>
<body>
	<h1>Membuat Input Data Ke Database Tanpa Reload Dengan Ajax JQuery<br/>www.malasngoding.com</h1>
	
	<div class="wrap">
		
 
	<form id="form" action="#" class="form-user">		
		<table>
			<tr>
				<td>Periksa</td>
				<td><input type="text" name="periksa" id="periksa_input"></td>
			</tr>
			<tr>
				<td>Kode Penyakit</td>
				<td><input type="text" name="kode" id="icd10"></td>
			</tr>
			<tr>
				<td>Keterangan</td>
				<td><input type="text" name="keterangan" id="keterangan_input"></td>
			</tr>
			<tr>
				<td>Tindakan</td>
				<td><input type="text" name="tindakan" id="tindakan_input"></td>
			</tr>
			<tr>
				<td></td>
				<td><button type="button" onclick="save()" class="tombol-simpan" id="kirim_diagnosa">Simpan</button></td>
			</tr>
		</table>
	</form>
 
 	<?php $no_pasien = "13"; ?>
 
	<div class="tampildata"></div>
 
	</div>
 
	<script type="text/javascript">
    function save(){
     
        //var data = $('#demo-form2').serialize();
        var periksa_value = $("#periksa_input").val();
        var kode_value = $("#icd10").val();
        var keterangan_value = $("#keterangan_input").val();
        var tindakan_value = $("#tindakan_input").val();
        $.ajax({
          url: "<?php echo base_url().'p_umum/check_up/simpan' ?>",
          type: 'POST',
          data: {periksa: periksa_value, kode: kode_value, keterangan: keterangan_value, tindakan: tindakan_value, no_pasien: <?php echo $no_pasien ?>},
          dataType: "JSON",
          //data: {periksa: periksa_value, kode_penyakit: kode_value, diagnosa: keterangan_value, tindakan: tindakan_value},
          success: function(data) {
            alert("Succed!");
          }
        });
      
    }
  	</script>
</body>
</html>