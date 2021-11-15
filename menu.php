<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="./CSS/cart.css">
  <title>Basket</title>
</head>

</form>

<body>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" onsubmit="tampil()">
  <main>
    <div class="basket">
      <div class="basket-module">
   
      </div>
      <div class="basket-labels">
        <ul>
          <li class="item item-heading">Item</li>
          <li class="price">Price</li>
          <li class="quantity">Quantity</li>
          <li class="subtotal">Subtotal</li>
        </ul>
      </div>
      <div class="basket-product">
        <div class="item">
          <div class="product-image">
            <img src="./Assets/mangga.jpg" alt="Placholder Image 2" class="product-frame">
          </div>
          <div class="product-details">
            <p><strong>Mangga</strong></p>
            <p>Product Code - 232321939</p>
          </div>
        </div>
        <div class="price">15.000</div>
        <div class="quantity">
          <input type="number" name="jumlahMangga" value="0" min="1" class="quantity-field">
        </div>
        <div class="subtotal" id="mangga">0</div>
      </div>
      <div class="basket-product">
        <div class="item">
          <div class="product-image">
            <img src="./Assets/jambu.jpg" alt="Placholder Image 2" class="product-frame">
          </div>
          <div class="product-details">
            <p><strong>Jambu</strong></p>
            <p>Product Code - 232321939</p>
          </div>
        </div>
        <div class="price">13.000</div>
        <div class="quantity">
          <input type="number" name="jumlahJambu" value="0" min="1" class="quantity-field">
        </div>
        <div class="subtotal"id="jambu">0</div>
      </div>
      <div class="basket-product">
        <div class="item">
          <div class="product-image">
            <img src="./Assets/salak.jpg" alt="Placholder Image 2" class="product-frame">
          </div>
          <div class="product-details">
            <p><strong>Salak</strong></p>
            <p>Product Code - 232321939</p>
          </div>
        </div>
        <div class="price">10.000</div>
        <div class="quantity">
          <input type="number" name="jumlahSalak" value="0" min="1" class="quantity-field">
        </div>
        <div class="subtotal"id="salak">0</div>
      </div>
    </div>

    <aside>
    

      <div class="summary">
        <div class="summary-total-items"><span class="total-items"></span> Items in your Bag</div>
        <div class="summary-subtotal">
          <div class="subtotal-title" id="cetak"></div>
        </div>
        <div class="summary-total">
          <div class="total-title">Total</div>
          <div class="total-value final-value" id="hasil">0</div>
        </div>
        <div class="summary-checkout">
          <button name="Submit" id="btn" class="checkout-cta">sumarry</button>
        </div>
      </div>
    </aside>

   
  </main>
  </form>
</body>

<?php include('oop.php') ?>

<script type="text/javascript">
	function tampil() {
		var cetak = document.getElementById('cetak');
		var recipt ="";
    var cetakhasil = document.getElementById('hasil');
    var hasil = "";
    var cetakmangga = document.getElementById('mangga');
    var mangga = "";
    var cetakjambu = document.getElementById('jambu');
    var jambu = "";
    var cetaksalak = document.getElementById('salak');
    var salak = "";


		<?php for ($i=0; $i < $belanja->getIndex(); $i++) {  ?>
            var nama = '<?php echo $belanja->getNama($i); ?>';
            var jml = '<?php echo $belanja->getJumlah($i); ?>';
			recipt += ""+nama + "&nbsp" + "&nbsp" + "X" +jml+"<br>";
			
		<?php } ?>
        
        var hargaM = <?php echo $belanja->getHarga(0); ?>;
        mangga += hargaM;

        var hargaJ = <?php echo $belanja->getHarga(1); ?>;
        jambu += hargaJ;

        var hargaS = <?php echo $belanja->getHarga(2); ?>;
        salak += hargaS;

        var total = <?php echo $belanja->getTotal(); ?>	
        hasil += total;
        

		    cetak.innerHTML = recipt;
        cetakhasil.innerHTML = hasil;
        cetakmangga.innerHTML = mangga;
        cetakjambu.innerHTML = jambu;
        cetaksalak.innerHTML = salak;
        

	}
	tampil();
</script>

</html>