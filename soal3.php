<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php


    if(isset($_POST['prima'])){
    $angka =50;
    function prima($angka){
    for ($i=1; $i <=$angka ; $i++){
        $a = 0;
        for($j=1; $j<=$i; $j++){
            if($i%$j==0){
                $a++;
            }
        }
        if ($a==2){
            echo $i." ";
        }
    }

    }
}

?>

<div class="kalkulator" style="padding-right: 60px !important; padding-left: 60px !important; width: 480px;">
		<h2 class="judul">Prima Number 1 - 50</h2>
        <form action="soal3.php" method="post">
            <input type="submit" name="prima" value="Show" class="tombol">
        </form>

    
        <?php if(isset($_POST['prima'])){ ?>
			<?php 
            echo " Bilangan Prima 1- $angka = "; prima($angka);
			?>
         <?php } ?>   

	</div>

    <button class="tombol">
        <a href="menu.html">Kembali</a>
    </button>
</body>
</html>