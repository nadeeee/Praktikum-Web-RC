<?php 

class buah{
	public $nama,
			$jumlah, 
			$harga;

	function getNama(){
		return $this->nama;
	}
	function getHarga(){
		return $this->harga;
	}
	function getJumlah(){
		return $this->jumlah;	
	}


	function __construct($nama=NULL, $harga=NULL, $jumlah=0){
		if( $nama!=NULL && $harga!=NULL ){
			$this->nama = $nama;
			$this->harga = $harga * $jumlah;
			$this->jumlah = $jumlah;
		}
	}

}

class belanja{
	private static $Cart = array(),
				   $totalHarga = 0,
	               $index = 0;

	function getIndex(){
		return self::$index;
	}
	function getNama($i=0){
		return self::$Cart[$i]->getNama();
	}   
	function getHarga($i=0){
		return self::$Cart[$i]->getHarga();
	}
	function getJumlah($i=0){
		return self::$Cart[$i]->getJumlah();	
	}
	function getTotal(){
		return self::$totalHarga;
	}

	function __construct( buah $jenisbuah = NULL ){
		if ($jenisbuah != NULL) {
			self::$Cart[ self::$index ] = $jenisbuah;
			self::$index++;
			self::$totalHarga = self::$totalHarga + $jenisbuah->getHarga();
		}
	}

}

$belanja = new belanja();
$jenisbuah = new buah();

if( isset($_POST['Submit']) ){
	if( $_POST['jumlahMangga'] != NULL && $_POST['jumlahJambu'] != NULL && $_POST['jumlahSalak'] != NULL ){
		
		$jenisbuah = new buah("Mangga", 15000, $_POST['jumlahMangga']);	
		$belanja = new belanja($jenisbuah);

		$jenisbuah = new buah("Jambu", 13000, $_POST['jumlahJambu']);	
		$belanja = new belanja($jenisbuah);

		$jenisbuah = new buah("Salak", 10000, $_POST['jumlahSalak']);	
		$belanja = new belanja($jenisbuah);
	}
}

?>