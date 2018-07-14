	<?php  
/**
* 
*/
class M_jadwal extends CI_Model
{
	public $nama_table	=	'jadwaltayang'; 
	public $id			=	'id_tayang';
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
	

}
?>