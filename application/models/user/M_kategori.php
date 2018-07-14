<?php 
/**
* 
*/
class M_kategori extends CI_Model 
{
	public $nama_table ='kategori';
	public $id		  ='id_kategori';
	public $order	  ='ASC';

	
	function __construct()  
	{
		parent::__construct();
	}
	function ambil_data()
	{
		$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->nama_table)->result();	//mengambil data lebih dari satu
	}
	function ambil_data_id($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->nama_table)->row();	
	}
	function get_option() {
		$this->db->select('*');
		$this->db->from('kategori');
		$query = $this->db->get();
		return $query->result();
	}
}
?>

 