<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tagihan extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		if($this->ion_auth->logged_in()){
            $tagihan = $this->db
                            ->join("cabang","tagihan.id_cabang = cabang.id_cabang")
                            ->join("karyawan","tagihan.id_karyawan = karyawan.id_karyawan")
                            ->get("tagihan")
                            ->result();
            $data = array("tagihan" => $tagihan,);
			$this->load->view('tables/tagihan', $data);
		}
		else redirect('admin/login');
	}
}
