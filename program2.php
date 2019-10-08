<?php
//membuat class mobil
class mobil{
//membuat properti
private $merk;
private $harga;
private $warna;
private $type;

//membuat method konstruktor, dimana mengambil parameter merk,harga,warna,type dati class mobil
function __construct($merk,$harga,$warna,$type){
	$this ->merk=$merk;
	$this ->harga=$harga;
	$this ->warna=$warna;
	$this ->type=$type;
}
//fungsi getter
//membuat method bacamerk
function bacamerk(){
return $this->merk;
}
//membuat method bacaharga
function bacaharga(){
return $this->harga;
}
//membuat method bacawarna
function bacawarna(){
return $this->warna;
}
//membuat method bacatype
function bacatype(){
return $this->type;
}
function __destruct(){
//echo "Merk,Harga,warna,type"
}
}
//membuat objec mobil dari kelas mobil, yang berisis nilai dari parameter konstructor
$mobil = new mobil("Honda",100000000,"Biru","Jazz");
//perintah untuk menampilkan pada browser dimana mengambil dari method bacamerk dan bacaharga
echo "Merk mobil = ".$mobil->bacamerk()."<br>";
echo "Harga mobil = ".$mobil->bacaharga()."<br>";
echo "Warna mobil = ".$mobil->bacawarna()."<br>";
echo "Type mobil = ".$mobil->bacatype()."<br>";
?>