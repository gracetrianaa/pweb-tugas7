<?php
    // memanggil library FPDF
    require('fpdf/fpdf.php');
    
    // intance object dan memberikan pengaturan halaman PDF
    $pdf = new FPDF('l','mm','A4');
    // membuat halaman baru
    $pdf->AddPage();
    // setting jenis font yang akan digunakan
    $pdf->SetFont('Arial','B',16);
    // mencetak string 
    $pdf->Cell(190,7,'SMA NEGERI 100 SURABAYA',0,1,'C');
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(190,7,'DAFTAR SISWA BARU KELAS X IPA',0,1,'C');

    // Memberikan space kebawah agar tidak terlalu rapat
    $pdf->Cell(10,7,'',0,1,'C');

    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(50,6,'NAMA SISWA',1,0,'C');
    $pdf->Cell(85,6,'ALAMAT',1,0,'C');
    $pdf->Cell(30,6,'JENIS KELAMIN',1,0,'C');
    $pdf->Cell(25,6,'AGAMA',1,0,'C');
    $pdf->Cell(50,6,'SEKOLAH ASAL',1,1,'C');

    $pdf->SetFont('Arial','',12);

    include 'config.php';
    $calon_siswa = mysqli_query($db, "SELECT nama, alamat, jenis_kelamin, agama, sekolah_asal FROM calon_siswa");
    while ($row = mysqli_fetch_array($calon_siswa)){
        $pdf->Cell(50,6,$row['nama'],1,0,);
        $pdf->Cell(85,6,$row['alamat'],1,0);
        $pdf->Cell(30,6,$row['jenis_kelamin'],1,0);
        $pdf->Cell(25,6,$row['agama'],1,0);
        $pdf->Cell(50,6,$row['sekolah_asal'],1,1); 
    }

    $pdf->Output();
    ?>