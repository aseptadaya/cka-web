<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Databaru extends CI_Controller {

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
			$this->load->view('forms/databaru');	
		}
		else redirect('admin/login');
	}
	public function insertCabang(){
		$res = $this->cka_model->insertData('cabang',$_POST);
		if($res >= 1){
			redirect ('forms/databaru');}
			else redirect('main');
		}
    public function insertProduk(){
        $res = $this->cka_model->insertData('produk',$_POST);
        if($res >= 1){
			redirect ('forms/databaru');}
			else redirect('main');
		}
		public function insertKaryawan(){
			$admin=$this->ion_auth->user()->row()->username;
			$cabang_admin=$this->ion_auth->user()->row()->company;
			$cabang = $this->cka_model->findData('cabang','id_cabang','cabang',$_POST['cabang_karyawan']);

			$res = $this->cka_model->insertData('karyawan',array(
				"nama_karyawan" => $_POST['nama_karyawan'],
				"kode_karyawan" => $_POST['kode_karyawan'],
				"id_cabang" => $cabang[0]['id_cabang'],
				"tim_karyawan" => $_POST['tim_karyawan'],
				"alamat_karyawan" => $_POST['alamat_karyawan'],
				"telepon_karyawan" => $_POST['telepon_karyawan'],
				"divisi" => $_POST['divisi'],
				// input admin data
				"input_admin_username" => $admin,
				"input_admin_cabang" => $cabang_admin
				)
			);
			if($res >= 1){
				redirect ('forms/databaru');}
				else redirect('main');

				// echo "<pre>";
				// print_r($_POST);
				// echo "</pre>";
			}

		}
