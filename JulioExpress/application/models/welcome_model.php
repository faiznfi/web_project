<?php if( ! defined('BASEPATH')) exit('Akses langsung tidak diperkenankan');
/**
* Basic_model
* menyediakan fungsi-fungsi dasar yang
* berhubungan dengan manipulasi basis data
*/
class welcome_model extends CI_Model
{	

	/**
	 * __construct function.
	 * 
	 * @access public
	 * @return void
	 */
	public function __construct() {
		
		parent::__construct();
		$this->load->database();
		
	}

	public function getData($noresi) 
	{
		$this->db->select('*');
		$this->db->from('resi_produk');
		$this->db->where('no_resi', $noresi);

		return $this->db->get()->result_array();
		
	
	}

	public function getStatus($noresi) 
	{
		$this->db->select('*');
		$this->db->from('status_resi');
		$this->db->where('no_resi', $noresi);

		return $this->db->get()->result_array();
		
	
	}

	public function resolve_user_login($username, $password) {
		
		$this->db->select('password');
		$this->db->from('user');
		$this->db->where('username', $username);
		return $this->db->get()->row('password');
		
	}

	public function get_user($user) {
		
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('username', $user);
		return $this->db->get()->row();
		
	}

	public function getData2() 
	{
		$this->db->select('*');
		$this->db->from('resi_produk');

		return $this->db->get()->result_array();
		
	
	}
	public function tambah_data() 
	{
		$this->db->set('no_resi',$this->input->post('noresi'));
		$this->db->set('nama_pengirim',$this->input->post('nama'));
		$this->db->set('produk',$this->input->post('produk'));
		$this->db->set('nama_tujuan',$this->input->post('nama_tujuan'));
		$this->db->set('alamat_tujuan',$this->input->post('alamat'));

		return $this->db->insert('resi_produk');
		
	
	}

	public function ganti_status() 
	{
		$date = date('Y/m/d');
		$this->db->set('no_resi',$this->input->post('noresi'));
		$this->db->set('status',$this->input->post('gantistatus'));
		$this->db->set('date',$date);

		return $this->db->insert('status_resi');
		
	
	}
}