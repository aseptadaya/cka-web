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
			$this->load->view('tables/penjualan');	
		}
		else redirect('admin/login');
		// $penjualan = $this->cka_model->getDataObj('penjualan');
		// $data['list_penjualan'] = $penjualan;
		// echo "<pre>";
		// print_r ($data);
		// echo "</pre>";
		// $cabang = $this->cka_model->findData('cabang','id_cabang','cabang',"Surabaya");
		// echo $cabang;
		// $this->load->view('tables/penjualan2',$data);
	}
}
