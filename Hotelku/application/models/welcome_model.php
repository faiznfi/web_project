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

	public function booking_act() 
	{
		$this->db->set('namadepan',$this->input->post('namadepan'));
		$this->db->set('namabelakang',$this->input->post('namabelakang'));
		$this->db->set('nohp',$this->input->post('nohp'));
		$this->db->set('jumlahorang',$this->input->post('jumlahorang'));
		$this->db->set('tipekamar',$this->input->post('tipekamar'));
		$this->db->set('tanggalmasuk',$this->input->post('tanggalmasuk'));
		$this->db->set('tanggalkeluar',$this->input->post('tanggalkeluar'));

		return $this->db->insert('booking');
	}

	public function booking_act2() 
	{	
		$this->db->set('jumlah_booking','jumlah_booking-1',FALSE);
		return $this->db->update('kamar');
	}

	public function booking_act3() 
	{	
		$this->db->set('jumlah_booking','jumlah_booking+1',FALSE);
		return $this->db->update('kamar');
	}

	public function booking_act4($id) 
	{
		$this->db->set('status',1);
		$this->db->where('id',$id);

		return $this->db->update('booking');
	}

	public function get_booking() 
	{
		$this->db->select('*');
		$this->db->where('status',0);
		$this->db->from('booking');

		return $this->db->get()->result_array();
	}

	public function get_kamar() 
	{
		$this->db->select('*');
		$this->db->from('kamar');

		return $this->db->get()->result_array();
	}
}