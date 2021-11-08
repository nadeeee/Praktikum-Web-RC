<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php


if(isset($_POST['hitung'])){
	
	$a = $_POST['bil1'];
	$b = $_POST['bil2'];

	function tambah($a, $b)
	{
		$hasil = $a + $b;
		return $hasil;
	}

	function kurang($a, $b)
	{
		$hasil = $a - $b;
		return $hasil;
	}

	function kali($a, $b)
	{
		$hasil = $a * $b;
		return $hasil;
	}

	function bagi($a, $b)
	{
		$hasil = $a / $b;
		return $hasil;
	}
	function modulo($a, $b)
	{
		$hasil = $a % $b;
		return $hasil;
	}
}
?>

<div class="kalkulator">
		<h2 class="judul">KALKULATOR</h2>

		<form method="post" action="soal1.php">			
			<input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Pertama">
			<input type="text" name="bil2" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Kedua">
			<input type="submit" name="hitung" value="Hitung" class="tombol">	
		</form>

		<?php if(isset($_POST['hitung'])){ ?>
			<?php 
			echo " Pertambahan dari $a + $b = " . tambah($a,$b) . "<br>";
			echo " Pengurangan dari $a - $b = " . kurang($a,$b) . "<br>";
			echo " Perkalian dari $a * $b = " . kali($a,$b) . "<br>";
			echo " Pembagian dari $a / $b = " . bagi($a,$b) . "<br>";
			echo " Modulo dari $a % $b = " . modulo($a,$b) . "<br>";	
			?>
		<?php }else{ ?>
			<input type="text" value="0" class="bil">
		<?php } ?>	
	</div>
	<button class="tombol">
        <a href="menu.html">Kembali</a>
    </button>
</body>
</html>