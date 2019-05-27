<?php 
require "fpdf.php";
$db = new PDO('mysql:host=localhost;dbname=diplom_voprosnik','root','');


class sh_a extends FPDF{
	function header(){
		$this->SetFont('Arial','B',14);
		$this->Cell(276,5,'EXPORT QUESTION',0,0,'C');
		$this->Ln();
		$this->SetFont('Times','',12);
		$this->Cell(276,10,'Short_answer',0,0,'C');
		$this->Ln(20);
	}
	function footer(){
		$this->SetY(-15);
		$this->SetFont('Arial','',8);
		$this->Cell(0,10,'Page'.$this->PageNo().'/{nb}',0,0,'C');
	}
	function headerTable(){
		$this->SetFont('Times','B',12);
		$this->Cell(20,10,'ID',1,0,'C');
		$this->Cell(40,10,'name_quest',1,0,'C');
		$this->Cell(40,10,'text_quest',1,0,'C');
		$this->Cell(40,10,'sh_true_ans',1,0,'C');
		$this->Ln();
	}
	function viewTable($db){
		$this->SetFont('Times','',12);
		$short_q = $db->query('SELECT * FROM short_question');
		while($data = $short_q->fetch(PDO::FETCH_OBJ)){
		$this->SetFont('Times','B',12);
		$this->Cell(20,10,$data->id_sh_quest,1,0,'C');
		$this->Cell(40,10,$data->name_quest,1,0,'L');
		$this->Cell(40,10,$data->text_quest,1,0,'L');
		$this->Cell(40,10,$data->sh_true_ans,1,0,'L');
		$this->Ln();
		}
	}
	//$this->SetFont('Arial','B',14);
	//$this->Cell(276,10,'HEAD',0,0,'C');
}
$pdf = new sh_a();
$pdf->AliasNbPages();
$pdf->AddPage('L','A4',0);
$pdf->headerTable();
$pdf->viewTable($db);
$pdf->Output();
