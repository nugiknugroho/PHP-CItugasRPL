<?php 

Class Laporanfilm extends CI_Controller{
    
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
        $pdf->Cell(190,7,'DAFTAR FILM DI WEBSITE GO-BIOSKOP',0,1,'C'); 
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1, 'C');
        $pdf->SetFont('Arial','B',8);
        $pdf->Cell(5,6,'#',1,0);
        $pdf->Cell(55,6,'Judul',1,0);
        $pdf->Cell(30,6,'Aktor',1,0);
        $pdf->Cell(32,6,'Sutradara',1,0);
        $pdf->Cell(22,6,'Durasi',1,0);
        $pdf->Cell(22,6,'Kategori',1,0);
        $pdf->Cell(22,6,'Studio',1,1);
        $pdf->SetFont('Arial','',10);
        $film = $this->db->get('film')->result();
        $no=1;
        foreach ($film as $row){
            $pdf->Cell(5,6,$no++,1,0);
            $pdf->Cell(55,6,$row->judul_film,1,0);
            $pdf->Cell(30,6,$row->aktor,1,0);
            $pdf->Cell(32,6,$row->sutradara,1,0);
            $pdf->Cell(22,6,$row->durasi,1,0);
            $pdf->Cell(22,6,$row->id_kategori,1,0);
            $pdf->Cell(22,6,$row->id_studio,1,1);   
        }
        $pdf->Output();
    }

}

 ?>