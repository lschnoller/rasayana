<?php
class Formacion extends Controller {

	function Formacion() {
		parent::Controller();	
		$this->load->helper('url');	
		$this->load->model('frontend');
	}
	
	function curso_basico(){
		$data['title'] = 'Cursos Ayuveda | Técnicas Meditación | Masaje Ayurvedico';
		$data['keywords'] = 'Ayurveda, Centro Ayurveda Buenos Aires';
		$data['description'] = 'Nuestros cursos están orientados al estudio y la práctica de las principales técnicas del método desarrollado por Graciela Schnöller: la meditación y el masaje.';
		
		$data['image'] = 'cursos-basicos.jpg';
		$this->load->view('header',$data);
		$this->load->view('cursos-view');
		$this->load->view('footer');
	}
	function curso_meditacion(){
		$data['title'] = 'Curso de Meditación Biodinámica | Método Rasayana Ayurveda | Relajación y Autoconocimiento';
		$data['keywords'] = 'Técnicas Meditación, Relajación, Métodos Meditación, Biodinámica, Stress, Estrés';
		$data['description'] = 'Los cursos de Meditación Biodinámica están orientados a calmar la agitación en la mente y a facilitar la práctica necesaria para aprender a explorar los distintos niveles del ser: físico, emocional y mental, para pasar a niveles más profundos.';
		
		$data['image'] = 'cursos_masaje_ayurvedico.jpg';
		$this->load->view('header',$data);
		//$data['list'] = $this->frontend->getCursosList(1);
                $data['list'] = $this->frontend->getActividades(1); //1 = basico meditacion
		$this->load->view('curso_meditacion-view',$data);
		$this->load->view('footer');
	}
	function curso_masaje_ayurvedico(){
		$data['title'] = 'Curso Masaje Ayurvédico | Método Rasayana Ayurveda | Relajación y Autoconocimiento';
		$data['keywords'] = 'Masaje Ayurvédico, Curso Masaje, ayurveda, masaje con aceites';
		$data['description'] = 'En este curso teórico-práctico incorporarás nociones y recomendaciones que te ayudarán a vivir en equilibrio. Aprenderás las maniobras específicas del Masaje Tradicional Ayurvédico y apreciarás sus beneficios. No se necesita experiencia previa.';
		
		$data['image'] = 'cursos_masaje_ayurvedico.jpg';
		$this->load->view('header',$data);
		$data['list'] = $this->frontend->getActividades(2); //2 = basico masaje
		$this->load->view('curso_masaje_ayurvedico-view',$data);
		$this->load->view('footer');
	}
	function el_camino_del_instructor(){
		$data['title'] = 'Ayurveda | Centro Ayurveda Buenos Aires | Instructorados';
		$data['keywords'] = 'Instrutorado Meditacion, Instructorado Ayurveda';
		$data['description'] = 'Comprende dos Instructorados en tecnicas de meditacion y procedimientos ayurvedicos';
		$data['image'] = 'camino-instructor.jpg';
		$this->load->view('header',$data);
		$this->load->view('el_camino_del_instructor-view');
		$this->load->view('footer');
	}
        
        
        
        function capacitaciones(){
		$hData['title'] = 'Capacitaciones | Centro Rasayana Ayurveda | Ayurveda Buenos Aires';
		$hData['keywords'] = 'capacitaciones, cursos, ayurveda, buenos aires, argentina, masaje ayurveda, meditación, curso meditación';
		$hData['description'] = 'Las capacitaciones en el Centro Rasayana Ayurveda consisten en Módulos de Profundización, independientes e interrelacionados, en los que se establecen los principios y fundamentos del Masaje Ayurvédico y de la Meditación Biodinámica.';
		
		$hData['image'] = 'charlas_y_talleres.jpg';
		//$hData['image'] = 'seminarios_emociones.jpg';
		$this->load->view('header',$hData);
		//$data['list'] = $this->frontend->getSeminariosList();
                $data['list'] = $this->frontend->getActividades(7, 4); //7 = todos los avanzados
		$this->load->view('capacitaciones-view', $data);
		$this->load->view('footer');
	}
        /*
	function counseling(){
		$hData['title'] = 'Ayurveda | Centro Ayurveda Buenos Aires | Counseling';
		$hData['keywords'] = 'Ayurveda, Centro Ayurveda Buenos Aires';
		$hData['description'] = 'Counseling, o Consulta Psicológica es una relación de ayuda orientada a personas que dentro de un marco de normalidad viven situaciones difíciles en lo cotidiano';
		
		$hData['image'] = 'counseling.jpg';
		$this->load->view('header',$hData);
		$this->load->view('counseling-view');
		$this->load->view('footer');
	}
	function seminarios(){
		$hData['title'] = 'Ayurveda | Centro Ayurveda Buenos Aires | Seminarios y Talleres';
		$hData['keywords'] = 'Seminarios Ayurveda';
		$hData['description'] = 'Los objetivos principales son desarrollar la sensibilidad, optimizar la comunicación con uno mismo para la prevención de enfermedades y promoción de un estado de salud integral.';
		
		$hData['image'] = 'charlas_y_talleres.jpg';
		//$hData['image'] = 'seminarios_emociones.jpg';
		$this->load->view('header',$hData);
		$data['list'] = $this->frontend->getSeminariosList();
		$this->load->view('seminarios-view', $data);
		$this->load->view('footer');
	}        
        
	function seminarios_vitalidad(){
		$hData['title'] = 'Ayurveda | Centro Ayurveda Buenos Aires | Seminarios estres y Ayurveda';
		$hData['keywords'] = 'Estres y Ayurveda';
		$hData['description'] = 'A través de rutinas saludables, ejercicios, meditaciones, automasaje, aprenderás a equilibrar tu fisiología y lograr un funcionamiento óptimo cuerpo-mente, con el fin de poder acercarte a tu verdadera naturaleza';
		
		$hData['image'] = 'charlas_y_talleres.jpg';
		$this->load->view('header',$hData);
		$data['list'] = $this->frontend->getSeminariosList(1);
		$this->load->view('seminarios_vitalidad-view',$data);
		$this->load->view('footer');
	}
	function seminarios_emociones(){
		$hData['title'] = 'Ayurveda | Centro Ayurveda Buenos Aires | Seminarios Autoestima y Emociones';
		$hData['keywords'] = 'Autoestima, Emociones';
		$hData['description'] = 'A través de trabajos vivenciales y de las herramientas del Counseling y la Meditación, transitaremos un camino hacia una mayor autenticidad y congruencia, para lograr deshacernos de aquellas insatisfacciones';
		
		$hData['image'] = 'charlas_y_talleres.jpg';
		$this->load->view('header',$hData);
		$data['list'] = $this->frontend->getSeminariosList(2);
		$this->load->view('seminarios_emociones-view',$data);
		$this->load->view('footer');
	}
	function seminarios_espiritualidad(){
		$hData['title'] = 'Taller Chakras | Las 7 leyes espirituales del éxito | Deepak Chopra';
		$hData['keywords'] = 'Chakras, Deepak Chopra';
		$hData['description'] = 'Estos talleres incluyen técnicas avanzadas de meditación, junto con trabajos sobre los Centros energéticos y Leyes universales superiores para activar y expandir las cualidades del corazón, la mente y el espíritu.';
		
		$hData['image'] = 'charlas_y_talleres.jpg';
		$this->load->view('header',$hData);
		$data['list'] = $this->frontend->getSeminariosList(3);
		$this->load->view('seminarios_espiritualidad-view',$data);
		$this->load->view('footer');
	}
	function tratamientos(){
		$hData['title'] = 'Masaje Ayurvedico | Tratamientos Ayurveda | Aromaterapia';
		$hData['keywords'] = 'Masaje Ayurvedico, Masaje Ayurveda';
		$hData['description'] = 'El Ayurveda considera que el masaje es un método eficaz para eliminar toxinas e impurezas, revitalizar y relajar, permitiendo disolver bloqueos corporales físicos y emocionales. Es parte de todos los tratamientos ayurvédicos';
		
		$hData['image'] = 'tratamientos.jpg';
		$this->load->view('header',$hData);
		$this->load->view('tratamientos-view');
		$this->load->view('footer');
	}
	function cosmetica_y_tratamientos(){
		$hData['title'] = 'Centro Ayurveda | Rasayana | Cosmetica Artesanal | Tratamientos Ayurveda';
		$hData['image'] = 'cosmetica2.jpg';
		$hData['keywords'] = 'Tratamientos Ayurvedicos, Rasayana';
		$hData['description'] = 'Los tratamientos incluyen el masaje con aceites y plantas rejuvenecedoras llamadas “rasayanas”.';
		
		$this->load->view('header',$hData);
		$this->load->view('cosmetica_y_tratamientos-view');
		$this->load->view('footer');
	}
	function cosmetica_ayurvedica(){
		$hData['title'] = 'Centro Ayurveda | Rasayana | Cosmetica Artesanal Vata, Pitta, Kapha';
		$hData['keywords'] = 'Cosmetica Ayurvedica, Rasayana';
		$hData['description'] = 'Una piel en armonía es perfectamente capaz de cuidarse a si misma. Todo lo que necesita es mantenerse perfectamente limpia y humectada.';
		
		$hData['image'] = 'cosmetica2.jpg';
		$this->load->view('header',$hData);
		$this->load->view('cosmetica_ayurvedica-view');
		$this->load->view('footer');
	}
	function cosmetica_biomarine(){
		$hData['title'] = 'COSMETICA DE TRATAMIENTO';
		$hData['keywords'] = 'Ayurveda, Centro Ayurveda Buenos Aires';
		$hData['description'] = 'Nuestros programas incluyen counseling, técnicas de meditación, masaje Ayurveda, tratamientos holísticos, cursos, talleres temáticos y capacitaciones Ayurveda';
		$hData['image'] = 'cosmetica-rasayana1.jpg';
		$this->load->view('header',$hData);
		$this->load->view('cosmetica_biomarine-view');
		$this->load->view('footer');
	}
         
         */
	function test(){
		$hData['title'] = 'VITALIDAD';
		$hData['keywords'] = 'Ayurveda, Centro Ayurveda Buenos Aires';
		$hData['description'] = 'Nuestros programas incluyen counseling, técnicas de meditación, masaje Ayurveda, tratamientos holísticos, cursos, talleres temáticos y capacitaciones Ayurveda';
		
		$hData['image'] = 'charlas_y_talleres.jpg';
		$this->load->view('header',$hData);
		$data['list'] = $this->frontend->getSeminariosList(1);
		$this->load->view('test-view',$data);
		$this->load->view('footer');
	}
	function counseling_form(){	
		$this->load->view('counseling_form-view');
	}
	function form() 
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Nombre', 'required');
		$this->form_validation->set_rules('lastname', 'Apellido', 'required');
		$this->form_validation->set_rules('phone', 'Tel&eacute;fono', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		
		if ($this->form_validation->run() == FALSE)
		{
			echo validation_errors();
		}
		else
		{
			$section = '';
			$section = $_POST['section'];
			$name = $_POST['name'];
			$lastname = $_POST['lastname'];
			$phone = $_POST['phone'];
			$email = $_POST['email'];
			$message = "<html><body>		   		
						  <table>
						    <tr><th>Nombre</th><td>$name</td></tr>
						    <tr><th>Apellido</th><td>$lastname</td></tr>
						    <tr><th>Telefono</th><td>$phone</td></tr>
						    <tr><th>Email</th><td>$email</td></tr>
						  </table>
						</body></html>
						";
			$to = 'reports@hoaworldwide.com';
			$subject = 'New GS form, section: '.$section;
    		$headers = "Content-type:text/html;charset=utf-8" . "\r\n";		
		 	$headers .= "From: \"Centro Graciela Schnöller\" <info@rasayana-ayurveda.com>\n";
                        $headers .= 'Cc: info@rasayana-ayurveda.com' . "";
			if(mail($to, $subject, $message, $headers))
				echo 'done';
			else 	
				echo 'Unable to send the message!';
		}
	}
	
	function emailtest() 
	{
		
			$message = "<html><body>		   		
						  <table>
						    <tr><th>Nombre</th><td>a</td></tr>
						    <tr><th>Apellido</th><td>b</td></tr>
						    <tr><th>Tel&eacute;fono</th><td>c</td></tr>
						    <tr><th>Email</th><td>d</td></tr>
						  </table>
						</body></html>
						";
			$to = 'reports@hoaworldwide.com';
			$subject = 'New Counseling Message';
                        $headers = "Content-type:text/html;charset=utf-8" . "\r\n";		
		 	$headers .= "From: \"Centro Graciela Schnöller\" <info@rasayana-ayurveda.com>\n";
                        $headers .= 'Cc: info@rasayana-ayurveda.com' . "";
			mail($to, $subject, $message, $headers);
			echo 'Thank you for contacting us!';
	}
	
}
?>
