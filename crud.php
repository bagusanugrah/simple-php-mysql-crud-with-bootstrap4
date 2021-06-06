<?php
	//koneksi database
	$server = "localhost:3306";
	$user = "admin";
	$pass = "admin";
	$database = "fazztrack";

	$koneksi = mysqli_connect($server, $user, $pass, $database)or die(mysqli_error($koneksi));

	if(isset($_POST['submit'])){//jika tombol submit diklik
		//data akan disimpan Baru
		$simpan = mysqli_query($koneksi, "INSERT INTO produk (nama_produk, keterangan, harga, jumlah)
									  VALUES ('$_POST[inputan_nama]', 
									  		 '$_POST[inputan_keterangan]', 
									  		  $_POST[inputan_harga], 
									  		  $_POST[inputan_jumlah])
									 ");
		if($simpan){//jika submit sukses
			echo "<script>
					alert('Berhasil submit produk!');
					document.location='index.php';
			     </script>";
		}
		else{
			echo "<script>
					alert('Gagal submit produk!');
					document.location='index.php';
			     </script>";
		}
	}

	if(isset($_POST['update'])){//jika tombol update diklik
		//data akan di update
		$update = mysqli_query($koneksi, "UPDATE produk set
										 	nama_produk = '$_POST[inputan_nama]',
										 	keterangan = '$_POST[inputan_keterangan]',
											harga = $_POST[inputan_harga],
										 	jumlah = $_POST[inputan_jumlah]
										 WHERE id = $_GET[id]
									   ");
		if($update){//jika update sukses
			echo "<script>
					alert('Berhasil update produk!');
					document.location='index.php';
			     </script>";
		}
		else{
			echo "<script>
					alert('Gagal update produk!');
					document.location='index.php';
			     </script>";
		}
	}


	//jika ada query parameter id
	if(isset($_GET['id'])){
		if ($_GET['action'] == "delete"){//jika query parameter action=delete
			//persiapan delete data
			$tampil = mysqli_query($koneksi, "SELECT * FROM produk WHERE id = $_GET[id] ");
			$data = mysqli_fetch_array($tampil);
			$delete = mysqli_query($koneksi, "DELETE FROM produk WHERE id = $_GET[id] ");
			if($data){
				echo "<script>
						alert('Berhasil hapus produk!');
						document.location='index.php';
				     </script>";
			} else{
				echo "<script>
						alert('Produk dengan id $_GET[id] tidak ditemukan');
						document.location='index.php';
				     </script>";
			}
		}
		else{
			//tampilkan data yang akan diupdate
			$tampil = mysqli_query($koneksi, "SELECT * FROM produk WHERE id = $_GET[id] ");
			$data = mysqli_fetch_array($tampil);
			if($data){
				//Jika data ditemukan, maka data ditampung ke dalam variabel
				$data_nama = $data['nama_produk'];
				$data_keterangan = $data['keterangan'];
				$data_harga = $data['harga'];
				$data_jumlah = $data['jumlah'];
			} else{
				echo "<script>
						alert('Produk dengan id $_GET[id] tidak ditemukan');
						document.location='index.php';
				     </script>";
			}
		}
	}

?>