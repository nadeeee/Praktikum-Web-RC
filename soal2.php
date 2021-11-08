<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php

    if(isset($_POST['urutkan'])){

    $nama= array("larine","aduh","qifuat","nade","toda","anevi","samid","auau","kifulat","jol");
    
    function awal($nama){
        for($i=0;$i<count($nama);$i++){
            if($i!=count($nama)-1){
                echo "$nama[$i], ";
            }else{
                echo "$nama[$i]";
            }
        }
    }

    function urutan($nama){
        sort($nama);
        for($i=0;$i<count($nama);$i++){
            if($i!=count($nama)-1){
                echo "$nama[$i], ";
            }else{
                echo "$nama[$i]";
            }
        }
    }
}


?>

<div class="kalkulator" style="padding-right: 60px !important; padding-left: 60px !important; width: 700px;">
		<h2 class="judul">Pengurutan Nama</h2>
        <form action="soal2.php" method="post">
            <input type="submit" name="urutkan" value="urutkan" class="tombol">
        </form>

    
        <?php if(isset($_POST['urutkan'])){ ?>
			<?php 
            echo " Data sebelum pengurutan = "; awal($nama);
            echo"<br> <br>";
            echo " Data setelah pengurutan = "; urutan($nama) . "<br>";  
			?>
         <?php } ?>    
	</div>

    <button class="tombol">
        <a href="menu.html">Kembali</a>
    </button>

</body>
</html>