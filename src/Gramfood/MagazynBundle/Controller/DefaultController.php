<?php

namespace Gramfood\MagazynBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Testowa;
use AppBundle\Entity\Gramfoodklembowzamzy;

class DefaultController extends Controller {
	public function index_oldAction($name) {
		return $this->render ( 'GramfoodMagazynBundle:Default:index.html.twig', array (
				'name' => $name 
		) );
	}
	
	public function indexAction() {
		return $this->render ( 'GramfoodMagazynBundle:Default:index.html.twig' );
	}
	
	public function testAction() {
		
		$html = $this->renderView('GramfoodMagazynBundle:Default:test.html.twig');
		
		$pdf = $this->get("white_october.tcpdf")->create('vertical', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
		$pdf->SetAuthor('Our Code World');
		$pdf->SetTitle(('Our Code World Title'));
		$pdf->SetSubject('Our Code World Subject');
		$pdf->setFontSubsetting(true);
		$pdf->SetFont('helvetica', '', 10, '', true);
		
		$pdf->SetHeaderData(PDF_HEADER_LOGO, 20, 'aaddb', 'to jest string header');

		$pdf->Write(0, "Page", '', 0, 'C');
		
		#$pdf->SetPrintHeader(false);
		#$pdf->SetPrintFooter(false);
		
		#$pdf->writeHTMLCell(0, 0, '', '', 'dupa', 0, 0, false,true, "L", true);
		#$pdf->SetFooterData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 09', 'ssdd');
		
		// set header and footer fonts
		$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
		$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
		
		$pdf->AddPage();
		$pdf->Header("Sommaire","GRT3if03");
		$pdf->writeHTMLCell($w = 193, $h = 262, $x = '', $y = '', $html, $border = 0, $ln = 20, $fill = 0, $reseth = true, $align = '', $autopadding = false);
		#  $pdf->writeHTML($html, true, 0, true, 2);
		$pdf->Footer();
		
		
		$pdf->AddPage();
		$pdf->Header("Sommaire","GRT3if03");
		$pdf->Footer("Evaluation contrat du 01/11/2008 au 31/10/2009");
		
		$pdf->AddPage();
		
		$filename = 'ourcodeworld_pdf_demo';
		
		$pdf->writeHTMLCell($w = 0, $h = 0, $x = '', $y = '', $html, $border = 0, $ln = 1, $fill = 0, $reseth = true, $align = '', $autopadding = true);
		
		$pdf->Output($filename.".pdf",'I'); // This will output the PDF as a response directly
		
		#$html = $this->renderView('AcmeDemoBundle:Demo:test.html.twig');
		return $this->render($html);
		
		
		return $this->render ( 'GramfoodMagazynBundle:Default:test.html.twig' );
	}
	
	public function index2Action() {
		// return $this->render('GramfoodMagazynBundle:Default:index.html.twig');
		// return $this->render('gramfood/index.html.twig');
		
		// $product = new Testowa();
		// $product->setImie('Wiktor');
		// $product->setNazwisko('Kowalski');
		// $product->setWiek('44');
		
		// $em = $this->getDoctrine()->getManager();
		
		// $em->persist($product);
		// $em->flush();
		$product = $this->getDoctrine ()->getRepository ( 'AppBundle:Testowa' )->findAll ();
		
		if (! $product) {
			throw $this->createNotFoundException ( 'No product found for id 1' );
		}
		
		return $this->render ( 'GramfoodMagazynBundle:Default:index2.html.twig', array (
				'product' => $product 
		) );
	}
	public function index3Action() {
		$product = $this->getDoctrine ()->getRepository ( 'AppBundle:Gramfoodklembowzamzy' )->findAll ();
		
		if (! $product) {
			throw $this->createNotFoundException ( 'No product found for id 1' );
		}
		
		return $this->render ( 'GramfoodMagazynBundle:Default:index3.html.twig', array (
				'product' => $product 
		) );
	}
	public function formAction() {
		return $this->render ( 'gramfood/form.html.twig' );
	}
}
