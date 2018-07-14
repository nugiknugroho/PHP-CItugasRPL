<?php 

Class Laporanuser extends CI_Controller{
    
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
        $pdf->Cell(190,7,'DAFTAR USER DI WEBSITE GO-BIOSKOP',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1, 'C');
        $pdf->SetFont('Arial','B',8);
        $pdf->Cell(5,6,'#',1,0);
        $pdf->Cell(30,6,'Nama',1,0);
        $pdf->Cell(55,6,'Email',1,0);
        $pdf->Cell(30,6,'Username',1,0);
        $pdf->Cell(25,6,'TTL',1,0);
        $pdf->Cell(27,6,'Jenis Kelamin',1,1);
        $pdf->SetFont('Arial','',10);
        $user = $this->db->get('user')->result();
        $no=1;
        foreach ($user as $row){
        
            $pdf->Cell(5,6,$no++,1,0);
            $pdf->Cell(30,6,$row->nama,1,0);
            $pdf->Cell(55,6,$row->email,1,0);
            $pdf->Cell(30,6,$row->username,1,0);
            $pdf->Cell(25,6,$row->ttl,1,0);
            $pdf->Cell(27,6,$row->jeniskelamin,1,1);   
        }
        $pdf->Output();
    }

}

 ?>