<?php 
/**
* 
*/
class M_lamanpesan extends CI_Model 
{
	public $nama_table 	='pemesanan'; 
	public $id		  	='id_pemesanan';
	public $nama		='nama';
	public $order	  	='ASC';
	

	
	function __construct()  
	{
		parent::__construct();
	}
	function ambil_data()
	{
		$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->nama_table)->result(); 	//mengambil data lebih dari satu
	}
	function ambil_data_id($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->nama_table)->row();	
	}
	
	function tambah_data($data)
	{

		return $this->db->insert($this->nama_table,$data);	
	}
	function hapus_data($id)
	{
		$this ->db->where($this->id,$id);
		return $this->db->delete($this->nama_table);	
	}
	function edit_data($id,$data)
	{
		$this ->db->where($this->id,$id);
		return $this->db->update($this->nama_table,$data);
	}

	 function cek($data)
	 {
	 	$this ->db->where('no_kursi',$data);
		return $this->db->get($this->nama_table)->row();	
	 }

	 function cetak_data($nama='MokhNugroho') {
		
 		$this->db->where($this->nama,$nama);
 		return $this->db->get($this->nama_table)->result();
	}

	function get_all_produk(){
		$hasil=$this->db->get('pemesanan'); 
		return $hasil->result();
	}
}
  
?>
