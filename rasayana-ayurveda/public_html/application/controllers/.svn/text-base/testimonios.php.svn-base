<?php
class Testimonios extends Controller {

	function Testimonios()
	{
		parent::Controller();	
		$this->load->helper('url');	
		$this->load->model('frontend');
	}
	function index(){
		$data['title'] = 'Ayurveda | Centro Ayurveda Buenos Aires | Testimonios';
		$data['keywords'] = 'Centro Ayurveda Bs As';
		$data['description'] = 'Testimonios de nuestros clientes y alumnos';
		
		$data['image'] = 'charlas_y_talleres-wt.jpg';
		$this->load->view('header',$data);
		$data['list'] = $this->frontend->getTestimonios();
		$this->load->view('testimonios-view',$data);
		$this->load->view('footer');
	}
	
}