<?php 

Class Strukuser extends CI_Controller{

public $nama_table='pemesanan';
public $nama='nama';

    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }
    
    function index(){
        $pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(190,7,'GO-BIOSKOP',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'STRUK PEMESANAN TIKET',0,1,'C'); 
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1, 'C');
        $pdf->SetFont('Arial','B',8);
        $pdf->Cell(5,6,'#',1,0);
        $pdf->Cell(10,6,'ID',1,0);
        $pdf->Cell(30,6,'Nama',1,0);
        $pdf->Cell(30,6,'Judul Film',1,0);
        $pdf->Cell(22,6,'Tanggal Pesan',1,0);
        $pdf->Cell(22,6,'Waktu Tayang',1,0);
        $pdf->Cell(20,6,'Studio',1,0);
        $pdf->Cell(12,6,'Kursi',1,0);
        $pdf->Cell(15,6,'Hari',1,0);
        $pdf->Cell(27,6,'Harga',1,1);
        $pdf->SetFont('Arial','',10);

        $nama = ""; 
        $nama = isset($_POST['myPostData']) ? $_POST['myPostData'] : "";

        $nama = !empty($_POST['myPostData']) ? $_POST['myPostData'] : "MokhNugroho";
        $this->db->where($this->nama,$nama);
        
        $pemesanan = $this->db->get('pemesanan')->result();
        $no=1;
        foreach ($pemesanan as $row){
            $pdf->Cell(5,6,$no++,1,0);
            $pdf->Cell(10,6,$row->id_pemesanan,1,0);
            $pdf->Cell(30,6,$row->nama,1,0);
            $pdf->Cell(30,6,$row->judul_film,1,0);
            $pdf->Cell(22,6,$row->Tanggal,1,0);
            $pdf->Cell(22,6,$row->id_waktu,1,0);
            $pdf->Cell(20,6,$row->id_studio,1,0);
            $pdf->Cell(12,6,$row->no_kursi,1,0);
            $pdf->Cell(15,6,$row->hari,1,0);
            $pdf->Cell(27,6,$row->totalharga,1,1);   
        }
        $pdf->Output();
    }

}

 ?>