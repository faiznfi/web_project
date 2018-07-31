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

	public function getData($nomor) 
	{
		$this->db->select('*');
		$this->db->from('siswa');
		$this->db->where('no_induk', $nomor);

		return $this->db->get()->result_array();
		
	
	}

	public function input_data() 
	{
		$this->db->set('no_induk',$this->input->post('noinduk'));
		$this->db->set('nama',$this->input->post('nama'));
		$this->db->set('sekolah',$this->input->post('sekolah'));
		$this->db->set('status',$this->input->post('status'));

		return $this->db->insert('siswa');
		
	
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
}