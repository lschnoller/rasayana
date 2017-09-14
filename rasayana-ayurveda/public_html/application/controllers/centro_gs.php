<?php
class Centro_gs extends Controller {

	function Centro_gs()
	{
		parent::Controller();	
		$this->load->helper('url');	
	}
	
	function index(){
		$data['title'] = 'Ayurveda | Centro Graciela Schnoller | Bienestar integral';
		$data['keywords'] = 'Ayurveda, Centro graciela schnoller';
		$data['descriptions'] = 'El Centro Graciela Schnöller te da la bienvenida! Desde el año 1990 brindamos un espacio que promueve el bienestar físico, emocional y espiritual.';
		
		$data['image'] = 'headers-nuestro-centro3.jpg';
		$this->load->view('header',$data);
		$this->load->view('centro_gs-view');
		$this->load->view('footer');
	}
}
