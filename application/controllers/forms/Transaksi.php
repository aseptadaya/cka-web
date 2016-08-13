<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

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
			$this->load->view('forms/transaksi');	
		}
		else redirect('admin/login');
	}
	public function processPenjualan(){
		$admin=$this->ion_auth->user()->row()->username;
		$cabang_admin=$this->ion_auth->user()->row()->company;
		$cabang = $this->cka_model->findData('cabang','id_cabang','cabang',$_POST['cabang_karyawan']);
		$barang = $this->cka_model->findData('barang','kode_barang','barang',$_POST['barang']);
		$karyawan = substr($_POST['karyawan'], 0 ,strpos($_POST['karyawan'], " - "));
		$res = $this->cka_model->insertData('penjualan', array(
			"kode_karyawan" => $karyawan,
			"id_cabang" => $cabang[0]['id_cabang'],
			"kode_barang" => $barang[0]['kode_barang'],
			"demo" => $_POST['demo'],
			"tunai_unit" => $_POST['tunai_unit'],
			"angsuran_unit" => $_POST['angsuran_unit'],
			"tunai_rupiah" => $_POST['tunai_rupiah'],
			"angsuran_rupiah" => $_POST['angsuran_rupiah'],
			"date" => $_POST['date'],
			"date_input" => date("Y-m-d h:i:sa"),
// input admin data
			"input_admin_username" => $admin,
			"input_admin_cabang" => $cabang_admin

			));
		if($res >= 1){
			redirect ('forms/transaksi');
		}
		else $this->load->view('main');
	}
	public function processTagihan(){
		$admin=$this->ion_auth->user()->row()->username;
		$cabang_admin=$this->ion_auth->user()->row()->company;
		$cabang = $this->cka_model->findData('cabang','id_cabang','cabang',$_POST['cabang_karyawan']);
		$karyawan = substr($_POST['karyawan'], 0 ,strpos($_POST['karyawan'], " - "));
		$res = $this->cka_model->insertData('tagihan', array(
			"kode_karyawan" => $karyawan,
			"id_cabang" => $cabang[0]['id_cabang'],
			"tanggal_transaksi" => $_POST['tanggal_transaksi'],
			"total_kuitansi_bawa" => $_POST['total_kuitansi_bawa'],
			"tanggal_setor" => $_POST['tanggal_setor'],
			"kuitansi_jadi_uang" => $_POST['kuitansi_jadi_uang'],
			"nominal_tagihan_rupiah" => $_POST['nominal_tagihan_rupiah'],
			"bbm" => $_POST['bbm'],
			"date_input" => date("Y-m-d h:i:sa"),
		 	// input admin data
			"input_admin_username" => $admin,
			"input_admin_cabang" => $cabang_admin

			)
		);
		if($res >= 1){
			redirect ('forms/transaksi');
		}
		else $this->load->view('main');
	}

}
