	<?php  
/**
* 
*/
class M_kelolauser extends CI_Model
{
	public $nama_table	=	'user'; 
	public $id			=	'nama';
	public $order		=	'ASC';
	function __construct()
	{
		parent::__construct();

	}
	function Ambil_data() //isinya adalah query
	{
		$this->db->order_by($this->id, $this->order); 
		return $this->db->get($this->nama_table)->result(); // memanggil seluruh record didatabase 
	}
	function tambah_data($data){
		return $this->db->insert($this->nama_table,$data); // memasukkan record dari form ke database, $data adalah variabe penampung data yang dari form. 
	}

	function hapus_data($id)
	{
		$this->db->where($this->id,$id); 
		return $this->db->delete($this->nama_table); // menghapus data dari database
	}
	function edit_data($id,$data){ //Pertama 

		$this->db->where($this->id,$id); //memanggil data sesuai dengan id yang dipilih di form 
		return $this->db->update($this->nama_table,$data); // mengupdate database dengan mengisikan data yang diinputkan di form.
	}

	function ambil_data_id($id) //Kedua 
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->nama_table)->row(); //memanggil data berdasarkan id, row() gunanya memanggil data hanya satu baris saja 
	}
	function ambil_data_idx($id)
 	{
 		$this->db->distinct();
 		$this->db->select('a.nama , a.email , a.username, a.password, a.ttl, a.jeniskelamin');
 		$this->db->from('user a');
 		$this->db->where('a.nama',$id);
 		
 		return $this->db->get($this->nama_table)->result();
 	}

}
?>