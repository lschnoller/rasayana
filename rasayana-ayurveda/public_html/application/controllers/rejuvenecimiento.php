<?php
class Rejuvenecimiento extends Controller {

	function Rejuvenecimiento()
	{
		parent::Controller();	
		$this->load->helper('url');	
		$this->load->model('frontend');
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
	function cosmetica_artesanal(){
		$hData['title'] = 'Centro Ayurveda | Rasayana | Cosmetica Artesanal Vata, Pitta, Kapha';
		$hData['keywords'] = 'Cosmetica Ayurvedica, Rasayana';
		$hData['description'] = 'Una piel en armonía es perfectamente capaz de cuidarse a si misma. Todo lo que necesita es mantenerse perfectamente limpia y humectada.';
		
		$hData['image'] = 'cosmetica2.jpg';
		$this->load->view('header',$hData);
		$this->load->view('cosmetica_artesanal-view');
		$this->load->view('footer');
	}
	function aceites_naturales(){
		$hData['title'] = 'Centro Ayurveda | Rasayana | Cosmetica Artesanal Vata, Pitta, Kapha';
		$hData['keywords'] = 'Cosmetica Ayurvedica, Rasayana';
		$hData['description'] = 'Aceites esenciales de las rasayanas. Equilibran emociones profundas, mejoran la armonía de la mente conduciéndola a un estado de armonía.';
		
		$hData['image'] = 'aceites-naturales.jpg';
		$this->load->view('header',$hData);
		$this->load->view('aceites_naturales-view');
		$this->load->view('footer');
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
