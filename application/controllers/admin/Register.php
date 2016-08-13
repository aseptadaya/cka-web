<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

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
			$this->load->view('admin/register');	
		}
		else redirect('admin/login');
		// $this->load->view('admin/register');	

	}
	public function process(){
		
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$repass = $this->input->post('re_password');
		$additional_data = array(
			'company' =>$_POST['company']
			);
		if ($password!=$repass){
			redirect ('admin/register');
			// echo "<pre>";
			// print_r($password);
			// print_r($repass);
			// echo "</pre>";
		}
		else {
			// echo "<pre>";
			// print_r ($_POST); 
			// echo "</pre>"; 
			// 			echo "<pre>";
			// print_r ($_POST['company']); 
			// echo "</pre>"; 
			// 			echo "<pre>";
			// print_r ($additional_data); 
			// echo "</pre>"; 
			$this->ion_auth->register($username, $password, $email, $additional_data, array('1'));
			redirect('admin/register');
		}
	}
}