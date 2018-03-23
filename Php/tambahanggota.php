<?php
 
 
	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		//Mendapatkan Nilai Variable
		$id = $_POST['id'];
		$name = $_POST['name'];
		$alamat = $_POST['alamat'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$tanggal_lahir = $_POST['tanggal_lahir'];
		
		//Pembuatan Syntax SQL
		$sql = "INSERT INTO tb_pegawai (nama,alamat,jenis_kelamin,tanggal_lahir) VALUES ('$name','$alamat','$jenis_kelamin','$tanggal_lahir')";
		
		//Import File Koneksi database
		require_once('koneksi.php');
		
		//Eksekusi Query database
		if(mysqli_query($con,$sql)){
			echo 'Berhasil Menambahkan Pegawai';
		}else{
			echo 'Gagal Menambahkan Pegawai';
		}
		
		mysqli_close($con);
	}
?>