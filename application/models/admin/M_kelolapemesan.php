<?php  
/**
* 
*/
class M_kelolapemesan extends CI_Model
{
	public $nama_table	=	'pemesanan'; 
	public $id			=	'id_pemesanan';  
	public $order		=	'ASC';
	function __construct()
	{
		parent::__construct(); 

	}
	function Ambil_data() //isinya adalah query
	{
		$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->nama_table)->result();  // memanggil seluruh record didatabase 
	}


	function hapus_data($id)
	{
		$this->db->where($this->id,$id); 
		return $this->db->delete($this->nama_table); // menghapus data dari database
	}

	function ambil_data_id($id) //Kedua 
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->nama_table)->row(); //memanggil data berdasarkan id, row() gunanya memanggil data hanya satu baris saja 
	}
	function ambil_data_idx($id)
 	{
 		$this->db->distinct();
 		$this->db->select('a.id_pemesanan , a.nama , a.judul_film, a.id_waktutayang, a.studio, a.no_kursi, a.totalharga');
 		$this->db->from('pemesanan a');
 		$this->db->where('a.id_pemesanan',$id);
 		
 		return $this->db->get($this->nama_table)->result();
 	}

}
?>