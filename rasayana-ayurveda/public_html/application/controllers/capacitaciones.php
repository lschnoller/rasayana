<?php
class Capacitaciones extends Controller {

	function Capacitaciones()
	{
		parent::Controller();	
		$this->load->helper('url');	
		$this->load->model('frontend');
	}
	function index(){
		$hData['title'] = 'Capacitaciones | Centro Rasayana Ayurveda | Ayurveda Buenos Aires';
		$hData['keywords'] = 'capacitaciones, cursos, ayurveda, buenos aires, argentina, masaje ayurveda, meditación, curso meditación';
		$hData['description'] = 'Las capacitaciones en el Centro Rasayana Ayurveda consisten en Módulos de Profundización, independientes e interrelacionados, en los que se establecen los principios y fundamentos del Masaje Ayurvédico y de la Meditación Biodinámica.';
		
		$hData['image'] = 'charlas_y_talleres.jpg';
		//$hData['image'] = 'seminarios_emociones.jpg';
		$this->load->view('header',$hData);
		//$data['list'] = $this->frontend->getSeminariosList();
                $data['list'] = $this->frontend->getActividades(7, 4); //7 = todos los avanzados
		$this->load->view('capacitaciones/capacitaciones-view', $data);
		$this->load->view('footer');
	}        
        
        function modulosmt() {
            $this->load->view('capacitaciones/c-menu-mt-popup');
        }
        
        function modulosmb() {
            $this->load->view('capacitaciones/c-menu-mb-popup');
        }
        
        /*para caer en el mt1. no borrar esta para que el menu se seleccione automaticamente*/
        function mt(){
		$data['title'] = 'Procedimientos Ayurvédicos MT1: Ayurveda, Salud y Rejuvenecimiento | Capacitaciones en Masaje Ayurvedico en Buenos Aires';
		$data['keywords'] = 'Masaje Ayurvédico, Ayurveda, Meditacion, meditacion biodinamica, Rasayana, Metodo Rasayana Ayurveda, Centro Ayurveda Buenos Aires';
		$data['description'] = 'Nuestras capacitaciones consisten en módulos de profundización independientes e interrelacionados, en los que se establecen los principios y fundamentos del Masaje Ayurvédico y de la Meditación Biodinámica. Ayudan a mejorar la salud, resolver conflictos internos y constituyen una excelente salida laboral y una oportunidad para todo terapeuta profesional de enriquecer su conocimiento.';
		
		$data['image'] = 'cursos_masaje_ayurvedico.jpg';
		$this->load->view('header',$data);
		$this->load->view('capacitaciones/mt1-view');
		$this->load->view('footer');
	}
                
	function mt1(){
		$data['title'] = 'Procedimientos Ayurvédicos MT1: Ayurveda, Salud y Rejuvenecimiento | Capacitaciones en Masaje Ayurvedico en Buenos Aires';
		$data['keywords'] = 'Masaje Ayurvédico, Ayurveda, Meditacion, meditacion biodinamica, Rasayana, Metodo Rasayana Ayurveda, Centro Ayurveda Buenos Aires';
		$data['description'] = 'Nuestras capacitaciones consisten en módulos de profundización independientes e interrelacionados, en los que se establecen los principios y fundamentos del Masaje Ayurvédico y de la Meditación Biodinámica. Ayudan a mejorar la salud, resolver conflictos internos y constituyen una excelente salida laboral y una oportunidad para todo terapeuta profesional de enriquecer su conocimiento.';
		
		$data['image'] = 'cursos_masaje_ayurvedico.jpg';
		$this->load->view('header',$data);
		$this->load->view('capacitaciones/mt1-view');
		$this->load->view('footer');
	}
        
	function mt2(){
		$data['title'] = 'Procedimientos Ayurvédicos MT2: La Ciencia de las Energías | Capacitaciones en Masaje Ayurvedico en Buenos Aires';
		$data['keywords'] = 'Masaje Ayurvédico, Ayurveda, Meditacion, meditacion biodinamica, Rasayana, Metodo Rasayana Ayurveda, Centro Ayurveda Buenos Aires';
		$data['description'] = 'Nuestras capacitaciones consisten en módulos de profundización independientes e interrelacionados, en los que se establecen los principios y fundamentos del Masaje Ayurvédico y de la Meditación Biodinámica. Ayudan a mejorar la salud, resolver conflictos internos y constituyen una excelente salida laboral y una oportunidad para todo terapeuta profesional de enriquecer su conocimiento.';
		
		$data['image'] = 'cursos_masaje_ayurvedico.jpg';
		$this->load->view('header',$data);
		$this->load->view('capacitaciones/mt2-view');
		$this->load->view('footer');
	}
        
	function mt3(){
		$data['title'] = 'Procedimientos Ayurvédicos MT3: El uso de los aceites y la Aromaterapia  | Capacitaciones en Masaje Ayurvedico en Buenos Aires';
		$data['keywords'] = 'Masaje Ayurvédico, Ayurveda, Meditacion, meditacion biodinamica, Rasayana, Metodo Rasayana Ayurveda, Centro Ayurveda Buenos Aires';
		$data['description'] = 'Nuestras capacitaciones consisten en módulos de profundización independientes e interrelacionados, en los que se establecen los principios y fundamentos del Masaje Ayurvédico y de la Meditación Biodinámica. Ayudan a mejorar la salud, resolver conflictos internos y constituyen una excelente salida laboral y una oportunidad para todo terapeuta profesional de enriquecer su conocimiento.';
		
		$data['image'] = 'cursos_masaje_ayurvedico.jpg';
		$this->load->view('header',$data);
		$this->load->view('capacitaciones/mt3-view');
		$this->load->view('footer');
	}
	function mt4(){
		$data['title'] = 'Procedimientos Ayurvédicos MT4: Ayurveda y la Mente | Capacitaciones en Masaje Ayurvedico en Buenos Aires';
		$data['keywords'] = 'Masaje Ayurvédico, Ayurveda, Meditacion, meditacion biodinamica, Rasayana, Metodo Rasayana Ayurveda, Centro Ayurveda Buenos Aires';
		$data['description'] = 'Nuestras capacitaciones consisten en módulos de profundización independientes e interrelacionados, en los que se establecen los principios y fundamentos del Masaje Ayurvédico y de la Meditación Biodinámica. Ayudan a mejorar la salud, resolver conflictos internos y constituyen una excelente salida laboral y una oportunidad para todo terapeuta profesional de enriquecer su conocimiento.';
		
		$data['image'] = 'cursos_masaje_ayurvedico.jpg';
		$this->load->view('header',$data);
		$this->load->view('capacitaciones/mt4-view');
		$this->load->view('footer');
	}
	function mt5(){
		$data['title'] = 'Procedimientos Ayurvédicos MT5: La Ciencia Marma | Capacitaciones en Masaje Ayurvedico en Buenos Aires';
		$data['keywords'] = 'Masaje Ayurvédico, Ayurveda, Meditacion, meditacion biodinamica, Rasayana, Metodo Rasayana Ayurveda, Centro Ayurveda Buenos Aires';
		$data['description'] = 'Nuestras capacitaciones consisten en módulos de profundización independientes e interrelacionados, en los que se establecen los principios y fundamentos del Masaje Ayurvédico y de la Meditación Biodinámica. Ayudan a mejorar la salud, resolver conflictos internos y constituyen una excelente salida laboral y una oportunidad para todo terapeuta profesional de enriquecer su conocimiento.';
		
		$data['image'] = 'cursos_masaje_ayurvedico.jpg';
		$this->load->view('header',$data);
		$this->load->view('capacitaciones/mt5-view');
		$this->load->view('footer');
	}
	function mt6(){
		$data['title'] = 'Procedimientos Ayurvédicos MT6: La Belleza del Rostro | Capacitaciones en Masaje Ayurvedico en Buenos Aires';
		$data['keywords'] = 'Masaje Ayurvédico, Ayurveda, Meditacion, meditacion biodinamica, Rasayana, Metodo Rasayana Ayurveda, Centro Ayurveda Buenos Aires';
		$data['description'] = 'Nuestras capacitaciones consisten en módulos de profundización independientes e interrelacionados, en los que se establecen los principios y fundamentos del Masaje Ayurvédico y de la Meditación Biodinámica. Ayudan a mejorar la salud, resolver conflictos internos y constituyen una excelente salida laboral y una oportunidad para todo terapeuta profesional de enriquecer su conocimiento.';
		
		$data['image'] = 'cursos_masaje_ayurvedico.jpg';
		$this->load->view('header',$data);
		$this->load->view('capacitaciones/mt6-view');
		$this->load->view('footer');
	}
	function mt7(){
		$data['title'] = 'Procedimientos Ayurvédicos MT7: Rasayana, Rejuvenecimiento & Spa | Capacitaciones en Masaje Ayurvedico en Buenos Aires';
		$data['keywords'] = 'Masaje Ayurvédico, Ayurveda, Meditacion, meditacion biodinamica, Rasayana, Metodo Rasayana Ayurveda, Centro Ayurveda Buenos Aires';
		$data['description'] = 'Nuestras capacitaciones consisten en módulos de profundización independientes e interrelacionados, en los que se establecen los principios y fundamentos del Masaje Ayurvédico y de la Meditación Biodinámica. Ayudan a mejorar la salud, resolver conflictos internos y constituyen una excelente salida laboral y una oportunidad para todo terapeuta profesional de enriquecer su conocimiento.';
		
		$data['image'] = 'cursos_masaje_ayurvedico.jpg';
		$this->load->view('header',$data);
		$this->load->view('capacitaciones/mt7-view');
		$this->load->view('footer');
	}
        
        /*para caer en el mb1. no borrar esta para que el menu se seleccione automaticamente*/
        function mb(){
		$data['title'] = 'Meditación Biodinámica | Capacitaciones en Meditación | Masaje Ayurvedico en Buenos Aires';
		$data['keywords'] = 'Meditacion, meditacion biodinamica, Rasayana, Metodo Rasayana Ayurveda, Ayurveda, Masaje ayurveda, meCentro Ayurveda Buenos Aires';
		$data['description'] = 'Nuestras capacitaciones consisten en Módulos de Profundización, independientes e interrelacionados, en los que se establecen los principios y fundamentos  del Masaje Ayurvédico y de la Meditación Biodinámica.Los programas de capacitaciones se recomiendan para ahondar en las técnicas aprendidas en los Cursos Introductorios y para ayudar a mejorar la salud y resolver conflictos internos. También, constituyen una excelente salida laboral y una oportunidad para todo terapeuta profesional de enriquecer su conocimiento.';
		
		$data['image'] = 'cursos_masaje_ayurvedico.jpg';
		$this->load->view('header',$data);
		$this->load->view('capacitaciones/mb1-view');
		$this->load->view('footer');
	}
        
        function mb1(){
		$data['title'] = 'Meditación Biodinámica MB1: Introducción a RASAYANA® RAW | Capacitaciones en Meditación | Masaje Ayurvedico en Buenos Aires';
		$data['keywords'] = 'Meditacion, meditacion biodinamica, Rasayana, Metodo Rasayana Ayurveda, Ayurveda, Masaje ayurveda, meCentro Ayurveda Buenos Aires';
		$data['description'] = 'Nuestras capacitaciones consisten en Módulos de Profundización, independientes e interrelacionados, en los que se establecen los principios y fundamentos  del Masaje Ayurvédico y de la Meditación Biodinámica.Los programas de capacitaciones se recomiendan para ahondar en las técnicas aprendidas en los Cursos Introductorios y para ayudar a mejorar la salud y resolver conflictos internos. También, constituyen una excelente salida laboral y una oportunidad para todo terapeuta profesional de enriquecer su conocimiento.';
		
		$data['image'] = 'cursos_masaje_ayurvedico.jpg';
		$this->load->view('header',$data);
		$this->load->view('capacitaciones/mb1-view');
		$this->load->view('footer');
	}
        function mb2(){
		$data['title'] = 'Meditación Biodinámica MB2: El Camino del Yoga | Capacitaciones en Meditación | Masaje Ayurvedico en Buenos Aires';
		$data['keywords'] = 'Meditacion, meditacion biodinamica, Rasayana, Metodo Rasayana Ayurveda, Ayurveda, Masaje ayurveda, meCentro Ayurveda Buenos Aires';
		$data['description'] = 'Nuestras capacitaciones consisten en Módulos de Profundización, independientes e interrelacionados, en los que se establecen los principios y fundamentos  del Masaje Ayurvédico y de la Meditación Biodinámica.Los programas de capacitaciones se recomiendan para ahondar en las técnicas aprendidas en los Cursos Introductorios y para ayudar a mejorar la salud y resolver conflictos internos. También, constituyen una excelente salida laboral y una oportunidad para todo terapeuta profesional de enriquecer su conocimiento.';
		
		$data['image'] = 'cursos_masaje_ayurvedico.jpg';
		$this->load->view('header',$data);
		$this->load->view('capacitaciones/mb2-view');
		$this->load->view('footer');
	}
        function mb3(){
		$data['title'] = 'Meditación Biodinámica MB3: La importancia de la Relajación | Capacitaciones en Meditación | Masaje Ayurvedico en Buenos Aires';
		$data['keywords'] = 'Meditacion, meditacion biodinamica, Rasayana, Metodo Rasayana Ayurveda, Ayurveda, Masaje ayurveda, meCentro Ayurveda Buenos Aires';
		$data['description'] = 'Nuestras capacitaciones consisten en Módulos de Profundización, independientes e interrelacionados, en los que se establecen los principios y fundamentos  del Masaje Ayurvédico y de la Meditación Biodinámica.Los programas de capacitaciones se recomiendan para ahondar en las técnicas aprendidas en los Cursos Introductorios y para ayudar a mejorar la salud y resolver conflictos internos. También, constituyen una excelente salida laboral y una oportunidad para todo terapeuta profesional de enriquecer su conocimiento.';
		
		$data['image'] = 'cursos_masaje_ayurvedico.jpg';
		$this->load->view('header',$data);
		$this->load->view('capacitaciones/mb3-view');
		$this->load->view('footer');
	}
        function mb4(){
		$data['title'] = 'Meditación Biodinámica MB4: Ayurveda y la Mente  | Capacitaciones en Meditación | Masaje Ayurvedico en Buenos Aires';
		$data['keywords'] = 'Meditacion, meditacion biodinamica, Rasayana, Metodo Rasayana Ayurveda, Ayurveda, Masaje ayurveda, meCentro Ayurveda Buenos Aires';
		$data['description'] = 'Nuestras capacitaciones consisten en Módulos de Profundización, independientes e interrelacionados, en los que se establecen los principios y fundamentos  del Masaje Ayurvédico y de la Meditación Biodinámica.Los programas de capacitaciones se recomiendan para ahondar en las técnicas aprendidas en los Cursos Introductorios y para ayudar a mejorar la salud y resolver conflictos internos. También, constituyen una excelente salida laboral y una oportunidad para todo terapeuta profesional de enriquecer su conocimiento.';
		
		$data['image'] = 'cursos_masaje_ayurvedico.jpg';
		$this->load->view('header',$data);
		$this->load->view('capacitaciones/mb4-view');
		$this->load->view('footer');
	}
        function mb5(){
		$data['title'] = 'Meditación Biodinámica MB5: El Re-Descubrimiento de la Ciencia | Capacitaciones en Meditación | Masaje Ayurvedico en Buenos Aires';
		$data['keywords'] = 'Meditacion, meditacion biodinamica, Rasayana, Metodo Rasayana Ayurveda, Ayurveda, Masaje ayurveda, meCentro Ayurveda Buenos Aires';
		$data['description'] = 'Nuestras capacitaciones consisten en Módulos de Profundización, independientes e interrelacionados, en los que se establecen los principios y fundamentos  del Masaje Ayurvédico y de la Meditación Biodinámica.Los programas de capacitaciones se recomiendan para ahondar en las técnicas aprendidas en los Cursos Introductorios y para ayudar a mejorar la salud y resolver conflictos internos. También, constituyen una excelente salida laboral y una oportunidad para todo terapeuta profesional de enriquecer su conocimiento.';
		
		$data['image'] = 'cursos_masaje_ayurvedico.jpg';
		$this->load->view('header',$data);
		$this->load->view('capacitaciones/mb5-view');
		$this->load->view('footer');
	}
        function mb6(){
		$data['title'] = 'Meditación Biodinámica MB6: La Dinámica de la Psique | Capacitaciones en Meditación | Masaje Ayurvedico en Buenos Aires';
		$data['keywords'] = 'Meditacion, meditacion biodinamica, Rasayana, Metodo Rasayana Ayurveda, Ayurveda, Masaje ayurveda, meCentro Ayurveda Buenos Aires';
		$data['description'] = 'Nuestras capacitaciones consisten en Módulos de Profundización, independientes e interrelacionados, en los que se establecen los principios y fundamentos  del Masaje Ayurvédico y de la Meditación Biodinámica.Los programas de capacitaciones se recomiendan para ahondar en las técnicas aprendidas en los Cursos Introductorios y para ayudar a mejorar la salud y resolver conflictos internos. También, constituyen una excelente salida laboral y una oportunidad para todo terapeuta profesional de enriquecer su conocimiento.';
		
		$data['image'] = 'cursos_masaje_ayurvedico.jpg';
		$this->load->view('header',$data);
		$this->load->view('capacitaciones/mb6-view');
		$this->load->view('footer');
	}
        function mb7(){
		$data['title'] = 'Meditación Biodinámica MB7: La Nueva Conciencia | Capacitaciones en Meditación | Masaje Ayurvedico en Buenos Aires';
		$data['keywords'] = 'Meditacion, meditacion biodinamica, Rasayana, Metodo Rasayana Ayurveda, Ayurveda, Masaje ayurveda, meCentro Ayurveda Buenos Aires';
		$data['description'] = 'Nuestras capacitaciones consisten en Módulos de Profundización, independientes e interrelacionados, en los que se establecen los principios y fundamentos  del Masaje Ayurvédico y de la Meditación Biodinámica.Los programas de capacitaciones se recomiendan para ahondar en las técnicas aprendidas en los Cursos Introductorios y para ayudar a mejorar la salud y resolver conflictos internos. También, constituyen una excelente salida laboral y una oportunidad para todo terapeuta profesional de enriquecer su conocimiento.';
		
		$data['image'] = 'cursos_masaje_ayurvedico.jpg';
		$this->load->view('header',$data);
		$this->load->view('capacitaciones/mb7-view');
		$this->load->view('footer');
	}
        function mb8(){
		$data['title'] = 'Meditación Biodinámica MB8: Conciencia de lo Sagrado | Capacitaciones en Meditación | Masaje Ayurvedico en Buenos Aires';
		$data['keywords'] = 'Meditacion, meditacion biodinamica, Rasayana, Metodo Rasayana Ayurveda, Ayurveda, Masaje ayurveda, meCentro Ayurveda Buenos Aires';
		$data['description'] = 'Nuestras capacitaciones consisten en Módulos de Profundización, independientes e interrelacionados, en los que se establecen los principios y fundamentos  del Masaje Ayurvédico y de la Meditación Biodinámica.Los programas de capacitaciones se recomiendan para ahondar en las técnicas aprendidas en los Cursos Introductorios y para ayudar a mejorar la salud y resolver conflictos internos. También, constituyen una excelente salida laboral y una oportunidad para todo terapeuta profesional de enriquecer su conocimiento.';
		
		$data['image'] = 'cursos_masaje_ayurvedico.jpg';
		$this->load->view('header',$data);
		$this->load->view('capacitaciones/mb8-view');
		$this->load->view('footer');
	}
        
}
?>
