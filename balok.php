<?php
if(isset($_GET["Hitung"])){
	$p=$_GET['p'];
	$l=$_GET['l'];
	$t=$_GET['t'];
	$volume=$p*$l*$t;
	$luas=2*(($p*$l)+($p*$t)+($l*$t));
	$hasil;
	if ($p <0||$l <0||$t <0){
		$hasil= "Data tidak sesuai, mohon cek kembali<br>";
	} 
	else {
		$hasil= "{$volume}<br>${luas}";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Rumus tentang Balok</title>
	<style>
		body{
			background-image: url(bg.jpg);
            background-size: 100%;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            height: 100%;
		}
	</style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poly&display=swap" rel="stylesheet">
</head>

<body>

	<div align="center">
	<form action="" method="GET" >
	<h1 style="font-family:'Poly', serif;">Menghitung Volume dan Luas Balok</h1><br>
	<p>Masukkan Panjang</p>
	<input type="number" name="p" class="form-control w-50" step="0.01" >
	<p>Masukkan Lebar</p>
	<input type="number" name="l" class="form-control w-50" step="0.01" >
	<p>Masukkan Tinggi</p>
	<input type="number" name="t" class="form-control w-50" step="0.01" >
	<br>
	<input type="submit" name="Hitung"  class="btn btn-primary">
    <button type="reset" class="btn btn-secondary">Reset</button>
	<br>
	<br>
	<h1 align="center">
		<?php 
			if (isset($_GET["Hitung"])) {
				echo $hasil;
			}
		?>
	</h1>
</form>
</div>
</body>
</html>