<?php
   require 'vendor/autoload.php';
   $pdf = new TCPDF();
   $pdf->AddPage();
   $pdf->Write(1, 'Ejemplo de documento PDF', '', false, 'C');
   $pdf->Output('hello_wordl.pdf');
 ?>