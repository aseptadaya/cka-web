<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan extends CI_Controller {

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

			$penjualan = $this->db
							->join("cabang", "penjualan.id_cabang = cabang.id_cabang")
							->join("karyawan", "penjualan.id_karyawan = karyawan.id_karyawan")
							->get("penjualan")
							->result();

			$data = array(
				"penjualan" => $penjualan,
			);

			$this->load->view('tables/penjualan', $data);
		}
		else redirect('admin/login');
	}
}
