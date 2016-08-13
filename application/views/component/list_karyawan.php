<?php 
    //$this->db->select('karyawan');
    $karyawan = $this->db->get('karyawan');
    foreach ($karyawan->result() as $res){
        echo "<option>".$res->kode_karyawan." - ".$res->nama_karyawan."</option>";
    }
?>
