<?php 
$penjualan = $this->cka_model->getData('penjualan');
$karyawan = $this->cka_model->getData('karyawan');
$cabang = $this->cka_model->getData('cabang');
// $data['penjualan_mentah'] = $penjualan;
// $query="select* from ";
$res = array_merge($penjualan,$karyawan,$cabang);
$array1 = array("color" => array( "a" => "number"), 2, 4);
echo "<pre>";
print_r ($array1);
echo "</pre>";


?>