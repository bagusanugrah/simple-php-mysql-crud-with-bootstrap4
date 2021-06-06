<?php
	require_once("crud.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Buat Produk</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="text-left mb-3 mt-3">
	    	<a href="index.php" class="btn btn-secondary">< Back</a>
	    </div>
		<!-- Awal Card Form -->
		<div class="card mt-3">
		  <div class="card-header bg-primary text-white">
		    Buat Produk
		  </div>
		  <div class="card-body">
		    <form method="post" action="">
		    	<div class="form-group">
		    		<label>Nama Produk</label>
		    		<input type="text" name="inputan_nama" value="" class="form-control" required>
		    	</div>
		    	<div class="form-group">
		    		<label>Keterangan</label>
		    		<textarea class="form-control" name="inputan_keterangan"  required=""></textarea>
		    	</div>
		    	<div class="form-group">
		    		<label>Harga</label>
		    		<input type="text" name="inputan_harga" value="" class="form-control" required>
		    	</div>
		    	<div class="form-group">
		    		<label>Jumlah</label>
		    		<input type="text" name="inputan_jumlah" value="" class="form-control" required>
		    	</div>

		    	<button type="submit" class="btn btn-success" name="submit">Submit</button>
		    	<button type="reset" class="btn btn-danger" name="reset">Reset</button>

		    </form>
		  </div>
		</div>
		<!-- Akhir Card Form -->
	</div>
</body>
</html>