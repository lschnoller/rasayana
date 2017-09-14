<?php
class Metodo_rasayana_ayurveda_wellness extends Controller {

	function Metodo_rasayana_ayurveda_wellness()
	{
		parent::Controller();	
		$this->load->helper('url');	
	}
	
	function index(){
		$data['title'] = 'Rasayana&reg; | Método Rasayana Ayurveda Wellness';
		$data['keywords'] = 'Método Rasayana Ayurveda Wellness';
		$data['descriptions'] = 'El Método Rasayana Ayurveda Wellness es un nuevo concepto en capacitación que combina la esencia del Ayurveda y del Yoga con la contribución de modernos enfoques científicos.';
		$data['image'] = 'headers-RAW.jpg';
		$this->load->view('header',$data);
		$this->load->view('metodo_rasayana_ayurveda_wellness-view');
		$this->load->view('footer');
	}
	function test(){
		$this->load->view('test');
	}
}

