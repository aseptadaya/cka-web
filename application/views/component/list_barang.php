<?php 
	//$this->db->select('cabang');
	$barang = $this->db->get('barang');
	foreach ($barang->result() as $res){
		echo "<option>".$res->barang."</option>";
	}
?>
