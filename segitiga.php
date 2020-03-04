<?php
	if(isset($_POST['hitung'])){
		$alas		= $_POST['alas'];
		$tinggi		= $_POST['tinggi'];
		$operasi	= $_POST['operasi'];
		switch($operasi){
			case 'Keliling'	:
				$hasil	= $sisi * 4;
				$rumus	= 
				"Keliling = Sisi x 4 <br>
				Keliling = $sisi x 4 <br>
				Keliling = $hasil";
				break;
			case 'Luas' 	:
				$hasil	= $sisi * $sisi;
				$rumus	= 
				"Luas = Sisi * Sisi <br>
				Luas = $sisi x $sisi <br>
				Luas = $hasil";
				break;
		}
	}
?>

<html>
	<head>
		<title> Kalkulator Bangun Datar by Rizki Subagja </title>
		<link rel="Stylesheet" type="text/css" href="percantik.css">
	</head>
	<body>
		<div class="kotak">
		<h2 class="Judul"> PERSEGI </h2>
		<form action="persegi.php" method="post">
			<input type="text" name="Sisi" placeholder="Masukan Sisi" class="input"> </input>
				<select name="operasi" class="pilihan">
					<option value="Keliling">Keliling</option>
					<option value="Luas">Luas</option>
				</select> 
			<input type="submit" name="hitung" value="Hitung" class="tombol">

			<?php if(isset($_POST['hitung']) && $sisi != 0 ){ ?>	
				<input type="text" value="<?php echo $hasil; ?>" class="input">
				
				<div class="rumus">
					<div class="header"> Rumus </div>
					<div class="content"> <?php echo $rumus; ?> </div>
				</div>
				
			<?php }else{ ?>
				<input type="text" placeholder="Hasil" class="input">
			
			<?php } ?>	
		</form>
	</body>