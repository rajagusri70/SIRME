<!DOCTYPE html>
<html>
<head>
	<title>Membuat Input Data Ke Database Tanpa Reload Dengan Ajax JQuery | www.malasngoding.com</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="jquery.js"></script>
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
		
 
	<form method="post" class="form-user">		
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>Pekerjaan</td>
				<td><input type="text" name="pekerjaan"></td>
			</tr>
			<tr>
				<td></td>
				<td><a class="tombol-simpan">Simpan</a></td>
			</tr>
		</table>
	</form>
 
 
	<div class="tampildata"></div>
 
	</div>
 
	<script type="text/javascript">
	$(document).ready(function(){
		$(".tombol-simpan").click(function(){
			var data = $('.form-user').serialize();
			$.ajax({
				type: 'POST',
				url: "<?php echo base_url() ?>/p_umum/check_up/simpan",
				data: data,
				success: function() {
					// $('.tampildata').load("tampil.php");
				}
			});
		});
	});
	</script>
</body>
</html>