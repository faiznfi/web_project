<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');$this->load->library('session');
    	$this->load->model('welcome_model');
	}
	public function index()
	{
		$lol['data']= $this->welcome_model->getData2();
		$this->load->view('Welcome_message',$lol);
	}

	public function tambah_data()
	{
		$this->welcome_model->tambah_data();
		$lol['data']= $this->welcome_model->getData2();

		$this->load->view('Welcome_message', $lol);
	}

	public function ganti_status()
	{
		$this->welcome_model->ganti_status();
		$lol['data']= $this->welcome_model->getData2();

		$this->load->view('Welcome_message', $lol);
	}

	public function cariresi()
	{
		$noresi=$this->input->post('noresi');
		$data['data'] = $this->welcome_model->getData($noresi);
		$data['status'] = $this->welcome_model->getStatus($noresi);
		$this->load->view('cek_resi',$data);
	}


	public function login() {
		
		// create the data object
		$data = new stdClass();
		
		// load form helper and validation library
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		// set validation rules
		$this->form_validation->set_rules('username', 'Username', 'required|alpha_numeric');
		$this->form_validation->set_rules('password', 'Password', 'required');
		
		if ($this->form_validation->run() == false) {
			
			// validation not ok, send validation errors to the view
			$this->load->view('login');
		} else {
			
			// set variables from the form
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			
			if ($this->welcome_model->resolve_user_login($username, $password)) {
				
				$user    = $this->welcome_model->get_user($username);
				$lol['data']= $this->welcome_model->getData2();
				// set session user datas
				$_SESSION['username']     = (string)$user->username;
				$_SESSION['logged_in']    = (bool)true;
				// user login ok


				$this->load->view('Welcome_message', $lol);
				
			} else {
				
				// login failed
				$data->error = 'Wrong username or password.';
				
				// send error to the view
				$this->load->view('login', $data);
				
			}
			
		}
		
	}

	public function logout() {
		
		// create the data object
		$data = new stdClass();
		
		if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
			
			// remove session datas
			foreach ($_SESSION as $key => $value) {
				unset($_SESSION[$key]);
			}
			
			// user logout ok
			redirect('/');
			
		} else {
			
			// there user was not logged in, we cannot logged him out,
			// redirect him to site root
			redirect('/');
			
		}
		
	}


}
