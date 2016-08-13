<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
			redirect ('main');
		}
		else 
			$this->load->view('admin/login');
	}
	public function process() {
		// echo "<pre>";
		// print_r ($_POST); 
		// echo "</pre>"; 
		$identity = $this->input->post('email');
		$password = $this->input->post('password');
		
		$succeed = $this->ion_auth->login($identity, $password);
		
		if ($succeed) {
			redirect('main');
		} else {
			redirect('admin/login');
		}
	
	}

}
