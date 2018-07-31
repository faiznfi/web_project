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
    	$this->load->model('welcome_model');
    	$this->load->helper('form');
	}
	public function index()
	{
		$data['data'] = $this->welcome_model->get_kamar();
		$this->load->view('Welcome_message',$data);
	}

	public function booking()
	{
		$this->load->view('booking');
	}
	public function bayar_act()
	{
		$this->load->view('booking_success');
	}
	public function daftarbooking()
	{
		$data['data'] = $this->welcome_model->get_booking();
		$this->load->view('daftarbooking',$data);
	}

	public function booking_act()
	{
		$this->welcome_model->booking_act();
		$this->welcome_model->booking_act2();
		$this->load->view('bayar');
	}

	public function booking_selesai($id)
	{
		$this->welcome_model->booking_act3();
		$this->welcome_model->booking_act4($id);
		redirect('Welcome/daftarbooking');
	}
}
