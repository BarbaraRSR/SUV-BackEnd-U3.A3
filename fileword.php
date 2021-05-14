<?php
	require 'vendor/autoload.php';
	$phpWord = new \PhpOffice\PhpWord\PhpWord();
	header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
	header('Content-Disposition: attachment;filename="prueba.docx"');
	$section = $phpWord->addSection();
	$section->addText("Mensaje de ejemplo");
	$objWriter=\PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
	$objWriter->save('php://output');
 ?>