<?php

class Contactenos extends Controller {

    function Contactenos() {
        parent::Controller();
        $this->load->helper('url');
    }

    function index() {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nombre', 'Nombre', 'required');
        $this->form_validation->set_rules('asunto', 'Asunto', 'required');
        $this->form_validation->set_rules('mensaje', 'Mensaje', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        $data['title'] = 'Rasayana&reg; | Centro Ayurveda Buenos Aires | Contactenos';
        $data['keywords'] = 'Rasayana&reg;, Rasayna Ayurveda Wellness, Ayurveda, Centro Ayurveda Buenos Aires';
        $data['description'] = 'Nos encontramos en Paraguay 3474 P.B. (Capital Federal, Buenos Aires, Argentina) | tel: 4822-3498';
        $data['image'] = 'headers-contacto.jpg';
        $this->load->view('header', $data);
        if ($this->form_validation->run() == FALSE) {
            $data['send'] = FALSE;
            $this->load->view('contactenos-view', $data);
        } else {
            $nombre = $_POST['nombre'];
            $asunto = $_POST['asunto'];
            $mensaje = $_POST['mensaje'];
            $email = $_POST['email'];

            $headers = "MIME-Version: 1.0\n";
            $headers .= "Content-type:text/html; charset=\"iso-8859-1\"\n";
            $headers .= "From: \"Administrador\" <admin@rasayana-ayurveda.com>\n";
            $headers .= "Bcc: notifications@hoaworldwide.com \n";

            $to = "info@rasayana-ayurveda.com";
            $subject = "Nuevo contacto de rasayana-ayurveda.com";
            $message = "<html>
			<head>
			</head>
			<body>
			  <table>
			  	<tr>
			      <th>Nombre :</th><td>$nombre</td>
			     </tr>
			     <tr>
			      <th>Asunto :</th><td>$asunto</td>
			     </tr>
			     <tr>
			      <th>Email :</th><td>$email</td>
			     </tr>
			     <tr>
			      <th>Mensaje :</th><td>$mensaje</td>
			    </tr>

			  </table>
			</body>
			</html>";
            // Mail it
            if (mail($to, $subject, $message, $headers))
                $data['send'] = TRUE;
            else
                $data['send'] = FALSE;

            $headers = "MIME-Version: 1.0\n";
            $headers .= "Content-type:text/html;charset=iso-8859-1\n";
            $headers .= "From: \"Centro Graciela Schnöller\" <info@rasayana-ayurveda.com>\n";
            $headers .= "Bcc: notifications@hoaworldwide.com\n";

            $message2 = "
				<html>
				<head>
				</head>
				<body>
				  <table>
					<tr>
						<td>Hola $nombre,</td>
					  </tr>
					  <tr>
						<td>Gracias por ponerte en contacto con nosotros. Muy pronto te estaremos enviando una respuesta.
						<br /><br />Mientras tanto te recomendamos seguir navegando nuestra web: <a href=\"" . base_url() . "\">www.rasayana-ayurveda.com</a>
						<br /><br />Saludos!
						<br /><br />Centro Graciela Schn&ouml;ller
						<br />Paraguay 3474 PB. Capital Federal
						<br />TE:011.4822-3498
						<br /><a href=\"mailto:info@rasayana-ayurveda.com\">info@rasayana-ayurveda.com</a>
						<br /><a href=\"http://www.rasayana-ayurveda.com/\">www.rasayana-ayurveda.com</a>
						</td>
					  </tr>
				  </table>
				</body>
				</html>
				";

            mail($email, 'Gracias por contactarnos!', $message2, $headers);

            //$data['send'] = TRUE;
            $this->load->view('contactenos-view', $data);
        }
        $this->load->view('footer');
    }

}

?>
