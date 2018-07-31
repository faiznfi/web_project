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
		$this->load->library(array('session'));
		$this->load->helper('url');
    	$this->load->model('welcome_model');
    	$this->load->helper('form');
	}
	public function index()
	{
		$this->load->view('header');
		$this->load->view('Welcome_message');
		$this->load->view('footer');
	}

	public function carinomor()
	{
		$nomor = $this->input->post('nomor');
		$data['data'] = $this->welcome_model->getData($nomor);

		if (empty($data['data'])==TRUE)
		{
			$this->load->view('header');
			echo '<div class="row">
			      <div class="span4"></div>
			      <div class="span4 text-center"><h2 class="center-block" width="270" height="95" alt="Google" id="logo">HASIL</h2></div>
			      <div class="span4"></div>
			      </div><div class="panel panel-warning text-center">
			      <div class="panel-heading">Maaf</div>
			      <div class="panel-body">Apakah anda menginput nomor dengan benar? silahkan coba lagi</div>
			      </div>';
			$this->load->view('footer');
		}

		else
		{
			$this->load->view('header');
			$this->load->view('hasil',$data);
			$this->load->view('footer');
		}
	}

	public function about()
	{
		$this->load->view('header');
		$this->load->view('about');
		$this->load->view('footer');
	}

	public function input()
	{
		$this->load->view('header');
		$this->load->view('input');
		$this->load->view('footer');
	}

	public function input_data()
	{
		$this->welcome_model->input_data();

		$this->load->view('header');
		$this->load->view('input_success');
		$this->load->view('footer');
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
			$this->load->view('header');
			$this->load->view('login');
			$this->load->view('footer');
			
		} else {
			
			// set variables from the form
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			
			if ($this->welcome_model->resolve_user_login($username, $password)) {
				
				$user    = $this->welcome_model->get_user($username);
				
				// set session user datas
				$_SESSION['username']     = (string)$user->username;
				$_SESSION['logged_in']    = (bool)true;
				
				// user login ok
				$this->load->view('header');
				$this->load->view('login_success', $data);
				$this->load->view('footer');
				
			} else {
				
				// login failed
				$data->error = 'Wrong username or password.';
				
				// send error to the view
				$this->load->view('header');
				$this->load->view('login', $data);
				$this->load->view('footer');
				
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
			$this->load->view('header');
			$this->load->view('logout_success', $data);
			$this->load->view('footer');
			
		} else {
			
			// there user was not logged in, we cannot logged him out,
			// redirect him to site root
			redirect('/');
			
		}
		
	}
}
