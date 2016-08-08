<?php 
	//$this->db->select('cabang');
	$cabang = $this->db->get('cabang');
	foreach ($cabang->result() as $res){
		echo "<option>".$res->cabang."</option>";
	}
?>
