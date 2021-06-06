<?php
	require_once("crud.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP & MySQL</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<!-- Awal Card Tabel -->
	<div class="card mt-3">
	  <div class="card-header bg-primary text-white">
	    Daftar Produk
	  </div>
	  <div class="card-body">
	    <div class="text-left mb-3">
	    	<a href="buat-produk.php" class="btn btn-success">Buat Produk</a>
	    </div>
	    <table class="table table-bordered table-striped">
	    	<tr>
	    		<th>No.</th>
	    		<th>Nama Produk</th>
	    		<th>Keterangan</th>
	    		<th>Harga</th>
	    		<th>Jumlah</th>
	    		<th>Aksi</th>
	    	</tr>
	    	<?php
	    		$no = 1;
	    		$tampil = mysqli_query($koneksi, "SELECT * from produk order by id desc");
	    		while($data = mysqli_fetch_array($tampil)) :

	    	?>
	    	<tr>
	    		<td><?=$no++;?></td>
	    		<td><?=$data['nama_produk']?></td>
	    		<td><?=$data['keterangan']?></td>
	    		<td><?=$data['harga']?></td>
	    		<td><?=$data['jumlah']?></td>
	    		<td>
	    			<a href="update-produk.php?id=<?=$data['id']?>" class="btn btn-warning"> Edit </a>
	    			<a href="index.php?action=delete&id=<?=$data['id']?>" 
	    			   onclick="return confirm('Yakin ingin menghapus produk ini?')" class="btn btn-danger"> Delete </a>
	    		</td>
	    	</tr>
	    <?php endwhile; //penutup perulangan while ?>
	    </table>

	  </div>
	</div>
	<!-- Akhir Card Tabel -->

</div>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>