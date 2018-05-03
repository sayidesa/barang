<!DOCTYPE html>
<html>
<head>
	<title>Daftar Barang</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/css/mdb.min.css" rel="stylesheet">
	<!-- script -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/js/mdb.min.js"></script>
	<title>Daftar Barang</title>
	<style>
	.card {
		margin-right: auto;
		margin-left: auto;
		margin-bottom: 20px;
		padding: 10px;
		border: 1px solid #ccc;
	}
</style>
</head>
<body>
<div class="container">
	<br>
	<h1>Data</h1>
	<a href="<?php echo base_url(); ?>crud/tambahbarang"><button class="btn btn-success btn-sm" type="button">Tambah Data</button></a><br><br>
	<div>
		<table class="table table-fixed">
			<!--judul table-->
			<tr>
				<th>Kode Jenis Barang</th>
				<th>Keterangan</th>
				<th><i class="fa fa-pencil"></i> Ubah Data</th>
				<th><i class="fa fa-trash"></i> Hapus Data</th>
			</tr>
			<?php foreach ($barang->result_array() as $key): ?>
				<tr>
					<td><?php echo $key['KodeJenisBarang'] ?></td>
					<td><?php echo $key['Keterangan'] ?></td>
					<td><a href="<?php echo base_url() ?>crud/editbarang/<?php echo $key['KodeJenisBarang'] ?>"><button class='btn btn-success btn-sm' type='button'><i class='fa fa-pencil'></i> Ubah</button></a></td>
					<td><a href="<?php echo base_url() ?>crud/hapusbarang/<?php echo $key['KodeJenisBarang'] ?>"><button class='btn btn-danger btn-md' type='button'><i class='fa fa-trash-o'></i></button></a></td>
				</tr>
			<?php endforeach ?>
		</table>
	</div>
</div>
<script type='text/javascript'>
	function keluar() {
		var kel = confirm('Ingin keluar dari akun?')
		if (kel){
			window.location = '../index.php?pesan=keluar';
		}
	}
</script>
</body>
</html>