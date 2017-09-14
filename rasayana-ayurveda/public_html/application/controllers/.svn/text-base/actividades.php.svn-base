<?php

class Actividades extends Controller {

    function Actividades() {
        parent::Controller();
        $this->load->helper('url');
        $this->load->model('pcfunc');
        $this->load->model('frontend');
    }

    function formacion_a_distancia() {
        $data['title'] = 'Rasayana&reg; | Cursos a Distancia: Meditación y Masaje Ayurveda';
        $data['keywords'] = 'Cursos a distancia ayurveda';
        $data['description'] = 'Cursos a Distancia: Meditación y Masaje Ayurveda';
        $data['image'] = 'distancia1.jpg';
        $this->load->view('header', $data);
        $this->load->view('formacion_a_distancia-view');
        $this->load->view('footer');
    }

    function formacion_a_distancia_inscripcion() {
        $data['title'] = 'Rasayana&reg; | Formación a Distancia | Centro Ayurveda en Buenos Aires.';
        $data['keywords'] = '';
        $data['description'] = '';
        $data['image'] = 'distancia2.jpg';
        $this->load->view('header', $data);

        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nombre', 'Nombre', 'required');
        $this->form_validation->set_rules('apellido', 'Apellido', 'required');
        $this->form_validation->set_rules('fecha', 'Fecha de nacimiento', 'required');
        $this->form_validation->set_rules('acupa', 'Ocupación', 'required');
        $this->form_validation->set_rules('direc', 'Dirección', 'required');
        $this->form_validation->set_rules('tel', 'Teléfono', 'required');
        $this->form_validation->set_rules('curso', 'Curso que quieres realizar', 'required');
        $this->form_validation->set_rules('paypal', 'Modalidad de pago: (deposito bancario o PayPal)', 'required');
        $this->form_validation->set_rules('desci', 'Describe que te motivó a realizar este curso', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        if ($this->form_validation->run() == FALSE) {
            $data['send'] = FALSE;
            $this->load->view('formacion_a_distancia_inscripcion-view', $data);
        } else {
            $nombre = mysql_real_escape_string($_POST['nombre']);
            $apellido = mysql_real_escape_string($_POST['apellido']);
            $fecha = mysql_real_escape_string($_POST['fecha']);
            $acupa = mysql_real_escape_string($_POST['acupa']);
            $direc = mysql_real_escape_string($_POST['direc']);
            $tel = mysql_real_escape_string($_POST['tel']);
            $curso = mysql_real_escape_string($_POST['curso']);
            $paypal = mysql_real_escape_string($_POST['paypal']);
            $desci = mysql_real_escape_string($_POST['desci']);
            $email = mysql_real_escape_string($_POST['email']);

            $headers = 'MIME-Version: 1.0' . "\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-9' . "\n";
            $headers .= "From: \"Centro Graciela Schnöller\" <info@rasayana-ayurveda.com>\n";
            $to = 'info@rasayana-ayurveda.com, notifications@hoaworldwide.com';
            $subject = 'rasayana ayurveda';

            // message
            $message = '
			<html>
			<head>
			</head>
			<body>
			  <p>Contact form submitted.</p>
			  <table>
			  	<tr>
			      <th>Nombre :</th><td>' . $nombre . '</td>
			     </tr>
			     <tr>
			      <th>Apellido :</th><td>' . $apellido . '</td>
			     </tr>
			     <tr>
			      <th>Email :</th><td>' . $email . '</td>
			     </tr>
			     <tr>
			      <th>Fecha de nacimiento :</th><td>' . $fecha . '</td>
			    </tr>
			    <tr>
			      <th>Ocupación :</th><td>' . $acupa . '</td>
			    </tr>
			    <tr>
			      <th>Dirección :</th><td>' . $direc . '</td>
			    </tr>
			    <tr>
			      <th>Teléfono :</th><td>' . $tel . '</td>
			    </tr>
			    <tr>
			      <th>Curso que quieres realizar :</th><td>' . $curso . '</td>
			    </tr>
			    <tr>
			      <th>Modalidad de pago: (deposito bancario o PayPal) :</th><td>' . $paypal . '</td>
			    </tr>
			    <tr>
			      <th>Describe que te motivó a realizar este curs :</th><td>' . $desci . '</td>
			    </tr>

			  </table>
			</body>
			</html>
			';


            // Mail it
            if (mail($to, $subject, $message, $headers)) {
                $data['send'] = TRUE;
            } else {
                $data['send'] = FALSE;
            }
            $this->load->view('formacion_a_distancia_inscripcion-view', $data);
        }

        $this->load->view('footer');
    }

    function agenda() {
        $timeid = $this->uri->segment(3);
        if ($timeid == 0)
            $time = time();
        else
            $time = $timeid;

        $data = $this->_date($time);
        $this->load->vars($data);
        $data['cal'] = $data;

        $data['title'] = 'Rasayana&reg; | Calendario de Actividades | Centro Ayurveda en Buenos Aires.';
        $data['keywords'] = 'Cursos y Actividades Ayurveda';
        $data['description'] = 'Cursos y actividades del Centro Graciela Schnoller';
        $data['image'] = 'headers-agenda.jpg';
        $this->load->view('header', $data);
        //$data['list'] = $this->frontend->getCalendar();
        $data['list'] = $this->frontend->getActividadesAll();
        $this->load->view('agenda-view', $data);
        $this->load->view('footer');
    }

    function enlaces_relacionados() {
        $data['title'] = 'Rasayana&reg; | Enlaces | Centro Ayurveda en Buenos Aires.';
        $data['keywords'] = 'Centro Ayurveda Bs As';
        $data['description'] = 'Enlaces Relacionados';
        $data['image'] = 'enlaces.jpg';
        $this->load->view('header', $data);
        $data['list'] = $this->frontend->getRef();
        $this->load->view('enlaces_relacionados-view', $data);
        $this->load->view('footer');
    }

    function charlas_y_talleres() {
        $data['title'] = 'Rasayana&reg; | Charlas y Talleres | Centro Ayurveda en Buenos Aires.';
        $data['keywords'] = '';
        $data['description'] = '';
        $data['image'] = 'charlas_y_talleres.png';
        $this->load->view('header', $data);
        $data['list'] = $this->frontend->getTallers();
        $this->load->view('charlas_y_talleres-view', $data);
        $this->load->view('footer');
    }

    function _date($time) {

        $m[1] = 'Enero';
        $m[2] = 'Febrero';
        $m[3] = 'Marzo';
        $m[4] = 'Abril';
        $m[5] = 'Mayo';
        $m[6] = 'Junio';
        $m[7] = 'Julio';
        $m[8] = 'Agosto';
        $m[9] = 'Septiembre';
        $m[10] = 'Octubre';
        $m[11] = 'Noviembre';
        $m[12] = 'Diciembre';

        $data['events'] = $this->frontend->getCalCalendar($time);

        $today = date("Y/n/j", time());
        $data['today'] = $today;

        $current_month = date("n", $time);
        $data['current_month'] = $current_month;

        $current_year = date("Y", $time);
        $data['current_year'] = $current_year;
        $monthNumber = date("n", $time);

        if ($monthNumber != 1) {
            $previousMonthNumber = $monthNumber - 1;
            $prevYear = $current_year;
        } else {
            $previousMonthNumber = 12;
            $prevYear = $current_year - 1;
        }

        if ($monthNumber != 12) {
            $nextMonthNumber = $monthNumber + 1;
            $nextYear = $current_year;
        } else {
            $nextMonthNumber = 1;
            $nextYear = $current_year + 1;
        }

        $current_month_text = $m[$monthNumber] . ' ' . date("Y", $time);
        $data['current_month_text'] = $current_month_text;

        $total_days_of_current_month = date("t", $time);
        $data['total_days_of_current_month'] = $total_days_of_current_month;

        $first_day_of_month = mktime(0, 0, 0, $current_month, 1, $current_year);
        $data['first_day_of_month'] = $first_day_of_month;

        //geting Numeric representation of the day of the week for first day of the month. 0 (for Sunday) through 6 (for Saturday).
        $first_w_of_month = date("w", $first_day_of_month);
        $data['first_w_of_month'] = $first_w_of_month;

        //how many rows will be in the calendar to show the dates
        $total_rows = ceil(($total_days_of_current_month + $first_w_of_month) / 7);
        $data['total_rows'] = $total_rows;

        //trick to show empty cell in the first row if the month doesn't start from Sunday
        $day = -$first_w_of_month;
        $data['day'] = $day;

        $data['next_month'] = mktime(0, 0, 0, $current_month + 1, 1, $current_year);
        $data['next_month_text'] = 'Pr&oacute;ximos Mes: ' . $m[$nextMonthNumber] . ' ' . $nextYear;

        $data['previous_month'] = mktime(0, 0, 0, $current_month - 1, 1, $current_year);
        $data['previous_month_text'] = 'Mes Anterior: ' . $m[$previousMonthNumber] . ' ' . $prevYear;

        $data['next_year'] = mktime(0, 0, 0, $current_month, 1, $current_year + 1);
        $data['next_year_text'] = 'Pr&oacute;ximos A&ntilde;o: ' . $m[$monthNumber] . ' ' . date("Y", $current_year + 1);

        $data['previous_year'] = mktime(0, 0, 0, $current_month, 1, $current_year - 1);
        $data['previous_year_text'] = 'A&ntilde;o Anterior: ' . $m[$monthNumber] . ' ' . date("Y", $current_year - 1);

        return $data;
    }

    function getevent($type, $id) {
        $data['values'] = $this->pcfunc->getCalendario($id);
        if (isset($_POST['name'])) {
            $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');
            $this->form_validation->set_rules('name', 'Nombre', 'required');
            $this->form_validation->set_rules('lastname', 'Apellido', 'required');
            $this->form_validation->set_rules('phone', 'Tel&eacute;fono', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            if ($this->form_validation->run() == FALSE) {
                echo validation_errors();
            } else {
                $headers = "Content-type:text/html;charset=utf-8" . "\r\n";
                $headers .= "From: \"Centro Graciela Schnöller\" <info@rasayana-ayurveda.com>\n";
                $headers .= 'Cc: reports@hoaworldwide.com' . "";
                $subject = 'GS: Nuevo Contacto - Formulario de Calendario';
                $to = 'notifications@hoaworldwide.com';

                $name = $_POST['name'];
                $lastname = $_POST['lastname'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                $title = $data['values']['title'];
                $date = $data['values']['date_text'];
                $desci = $data['values']['description'];


                $html_header = '<html><body>
                                <table width="630" cellpadding="0" cellspacing="0" border="0" align="center" style="background-color: #DEE6D5;">
                                      <tr><td>
                                      <table width="630" cellpadding="0" cellspacing="0" border="0" align="center" style="background-image: url(\'' . base_url() . 'design/newsletter-bg.jpg\');background-repeat: repeat-x;">
                                              <tr>
                                                      <td colspan="3">
                                                              <table width="630" cellpadding="0" cellspacing="0" border="0" align="center">
                                                                      <tr>
                                                                              <td width="15" >&nbsp;</td>
                                                                              <td width="365" height="120" valign="middle" align="left"><img src="' . base_url() . 'design/newsletter-header.png" height="88" width="365" /></td>
                                                                              <td width="250">&nbsp;</td>
                                                                      </tr>
                                                              </table>
                                                      </td>
                                              </tr>
                                              <tr>
                                                      <td width="15" >&nbsp;</td>
                                                      <td>
                                                              <table width="600" cellpadding="0" cellspacing="0" border="0" align="center">
                                                                      <tr>
                                                                              <td width="149" style="background-color: #CBD0A9;" align="center"><a href="' . base_url() . '" style="color: #FFF;font-family: \'Century Gothic\';font-size: 15px;text-decoration: none;">PAGINA WEB</a></td>
                                                                              <td width="1" >&nbsp;</td>
                                                                              <td width="149" style="background-color: #CBD0A9;" align="center"><a href="' . base_url() . 'mba" style="color: #FFF;font-family: \'Century Gothic\';font-size: 15px;text-decoration: none;">QUE ES EL RAW?</a></td>
                                                                              <td width="1" >&nbsp;</td>
                                                                              <td width="149" style="background-color: #CBD0A9;" align="center"><a href="' . base_url() . 'servicios/counceling" style="color: #FFF;font-family: \'Century Gothic\';font-size: 15px;text-decoration: none;">COUNSELING</a></td>
                                                                              <td width="1" >&nbsp;</td>
                                                                              <td width="150" style="background-color: #CBD0A9;" align="center"><a href="' . base_url() . 'actividades/calendario" style="color: #FFF;font-family: \'Century Gothic\';font-size: 15px;text-decoration: none;">CALENDARIO</a></td>
                                                                      </tr>
                                                              </table>
                                                      </td>
                                                      <td width="15" >&nbsp;</td>
                                              </tr>
                                              <tr>
                                                      <td width="15" >&nbsp;</td>
                                                      <td>
                                                              <table width="600" cellpadding="0" cellspacing="0" border="0" align="center">

                                                                      <tr>
                                                                              <td colspan="3" width="600" height="67" valign="middle" align="left"><img src="' . base_url() . 'design/newsletter-top.jpg" height="67" width="600" /></td>
                                                                      </tr>
                                                              </table>
                                                      </td>
                                                      <td width="15" >&nbsp;</td>
                                              </tr>
                                              <tr>
                                                      <td width="15" >&nbsp;</td>
                                                      <td style="background-color: #fff;">
                                                              <table width="600" cellpadding="0" cellspacing="0" border="0" align="center">
                                                                      <tr>
                                                                              <td width="15" >&nbsp;</td>
                                                                              <td colspan="2">
                                                                                      <h1 style="color: #F27F00;font-family: \'Century Gothic\';font-size: 16px;">Felicitaciones! Has reservado tu lugar para: "' . $title . '"</h1>
                                                                              </td>
                                                                      </tr>
                                                                      <tr>
                                                                              <td width="15" >&nbsp;</td>
                                                                              <td colspan="2" width="216" align="left" style="color: #666666;font-size: 14px;font-family: \'Century Gothic\';">' . $desci . '</td>
                                                                      </tr>
                                                                      <tr>
                                                                              <td width="15" >&nbsp;</td>
                                                                              <td colspan="2" width="216" align="left" style="color: #666666;font-size: 14px;font-family: \'Century Gothic\';">' . $date . '</td>
                                                                      </tr>';

                $userContent = '<tr>
									<td width="15" >&nbsp;</td>
									<td colspan="2" width="216" align="left" style="color: #666666;font-size: 14px;font-family: \'Century Gothic\';">Te estaremos contactando a la brevedad para brindarte los detalles de pagos e inscripci&oacute;n.</td>
								</tr>
								<tr>
									<td width="15" >&nbsp;</td>
									<td colspan="2" width="216" align="left" style="color: #666666;font-size: 14px;font-family: \'Century Gothic\';">&nbsp;</td>
								</tr>';

                $html_footer = '<tr>
													<td height="15" colspan="3">&nbsp;</td>
												</tr>

											</table>
										</td>
										<td width="15" >&nbsp;</td>
									</tr>

									<tr>
										<td width="15" >&nbsp;</td>
										<td>
											<table width="600" cellpadding="0" cellspacing="0" border="0" align="center">
												<tr>
													<td colspan="3" width="600" height="69" valign="middle" align="left"><img src="' . base_url() . 'design/newsletter-bottom.jpg" width="600" /></td>
												</tr>
												<tr>
													<td width="400" style="color: #FF9900;font-size: 12px;font-family: \'Century Gothic\';">
														Paraguay 3474 P.B. (Capital Federal, Buenos Aires, Argentina)<br/>
														Tel: 4822-3498
													</td>
													<td align="center" valign="bottom">
														<a href="' . base_url() . 'contactenos"><img border="0" src="' . base_url() . 'design/newsletter-contact.jpg" width="75" height="75" /></a>
													</td>
												</tr>
												<tr>
													<td width="400" style="color: #333333;font-size: 9px;font-family: \'Century Gothic\';">
														 2009 © Graciela Schnöller . - Todos los derechos reservad
													</td>
													<td align="center">
														<a href="' . base_url() . 'contactenos" style="color: #666600;font-size: 13px;font-family: \'Century Gothic\';text-decoration: none;">CONTACTANOS</a>
													</td>
												</tr>
												<tr>
													<td height="30" colspan="2" >&nbsp;</td>
												</tr>
											</table>
										</td>
										<td width="15" >&nbsp;</td>
									</tr>
								</table>
								</td></tr></table>
							</body></html>';


                $html_header_admin = '<html><body>
							  <table width="630" cellpadding="0" cellspacing="0" border="0" align="center" style="background-color: #DEE6D5;">
								<tr><td>
								<table width="630" cellpadding="0" cellspacing="0" border="0" align="center" style="background-image: url(\'' . base_url() . 'design/newsletter-bg.jpg\');background-repeat: repeat-x;">
									<tr>
										<td colspan="3" style="color: #F27F00; font-family: \'Century Gothic\';font-size: 16px;">
											Nuevo contacto de formulario de calendario: <br /><br />
										</td>
									</tr>

									<tr>
										<td width="15" >&nbsp;</td>
										<td style="background-color: #fff;">
											<table width="600" cellpadding="0" cellspacing="0" border="0" align="center">
												<tr>
													<td width="15" >&nbsp;</td>
													<td colspan="2">
														<h1 style="color: #F27F00;font-family: \'Century Gothic\';font-size: 16px;">' . $title . '</h1>
													</td>
												</tr>
												<tr>
													<td width="15" >&nbsp;</td>
													<td colspan="2" width="216" align="left" style="color: #666666;font-size: 14px;font-family: \'Century Gothic\';">' . $desci . '</td>
												</tr>
												<tr>
													<td width="15" >&nbsp;</td>
													<td colspan="2" width="216" align="left" style="color: #666666;font-size: 14px;font-family: \'Century Gothic\';">' . $date . '</td>
												</tr>';

                $infoContent = '<tr>
										<td colspan="3">
											<table>
												<tr>
													<td>&nbsp;</td>
													<td>&nbsp;</td>
													<td>&nbsp;</td>
												</tr>
												<tr>
													<td width="" >&nbsp;</td>
													<td width="" align="left" style="color: #666666;font-size: 14px;font-family: \'Century Gothic\';">Nombre: </td>
													<td align="left" style="color: #666666;font-size: 14px;font-family: \'Century Gothic\';">' . $name . '</td>
												</tr>
												<tr>
													<td width="" >&nbsp;</td>
													<td width="" align="left" style="color: #666666;font-size: 14px;font-family: \'Century Gothic\';">Apellido: </td>
													<td align="left" style="color: #666666;font-size: 14px;font-family: \'Century Gothic\';">' . $lastname . '</td>
												</tr>
												<tr>
													<td width="" >&nbsp;</td>
													<td width="" align="left" style="color: #666666;font-size: 14px;font-family: \'Century Gothic\';">Tel&eacute;fono: </td>
													<td align="left" style="color: #666666;font-size: 14px;font-family: \'Century Gothic\';">' . $phone . '</td>
												</tr>
												<tr>
													<td width="" >&nbsp;</td>
													<td width="" align="left" style="color: #666666;font-size: 14px;font-family: \'Century Gothic\';">Email: </td>
													<td align="left" style="color: #666666;font-size: 14px;font-family: \'Century Gothic\';">' . $email . '</td>
												</tr>
											</table>
										</td>
									</tr>';

                $html_footer_admin = '</table>
										</td>
										<td width="15" >&nbsp;</td>
									</tr>
								</table>
								</td></tr></table>
							</body></html>';



                if (mail($to, $subject, $html_header_admin . $infoContent . $html_footer_admin, $headers))
                    echo 'done';
                else
                    echo 'Unable to send the message!';

                mail($email, 'Contacto', $html_header . $userContent . $html_footer, $headers);
            }
        }
        else {
            $this->load->view('calendar-popup-view', $data);
        }
    }
    
    function popupform($title) {
        $data['title'] = $title;
        //$data['values'] = $this->pcfunc->getCalendario($id);
        if (isset($_POST['name'])) {
            $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');
            $this->form_validation->set_rules('name', 'Nombre', 'required');
            $this->form_validation->set_rules('lastname', 'Apellido', 'required');
            $this->form_validation->set_rules('phone', 'Tel&eacute;fono', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            if ($this->form_validation->run() == FALSE) {
                echo validation_errors();
            } else {
                $headers = "Content-type:text/html;charset=utf-8" . "\r\n";
                $headers .= "From: \"Centro Graciela Schnöller\" <info@rasayana-ayurveda.com>\n";
                $headers .= 'Cc: reports@hoaworldwide.com' . "";
                $subject = 'GS: Nuevo Contacto - Formulario de Calendario';
                $to = 'notifications@hoaworldwide.com';

                $name = $_POST['name'];
                $lastname = $_POST['lastname'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                //$title = $data['values']['title'];
                //$date = $data['values']['date_text'];
                //$desci = $data['values']['description'];


                $html_header = '<html><body>
                                <table width="630" cellpadding="0" cellspacing="0" border="0" align="center" style="background-color: #DEE6D5;">
                                      <tr><td>
                                      <table width="630" cellpadding="0" cellspacing="0" border="0" align="center" style="background-image: url(\'' . base_url() . 'design/newsletter-bg.jpg\');background-repeat: repeat-x;">
                                              <tr>
                                                      <td colspan="3">
                                                              <table width="630" cellpadding="0" cellspacing="0" border="0" align="center">
                                                                      <tr>
                                                                              <td width="15" >&nbsp;</td>
                                                                              <td width="365" height="120" valign="middle" align="left"><img src="' . base_url() . 'design/newsletter-header.png" height="88" width="365" /></td>
                                                                              <td width="250">&nbsp;</td>
                                                                      </tr>
                                                              </table>
                                                      </td>
                                              </tr>
                                              <tr>
                                                      <td width="15" >&nbsp;</td>
                                                      <td>
                                                              <table width="600" cellpadding="0" cellspacing="0" border="0" align="center">
                                                                      <tr>
                                                                              <td width="149" style="background-color: #CBD0A9;" align="center"><a href="' . base_url() . '" style="color: #FFF;font-family: \'Century Gothic\';font-size: 15px;text-decoration: none;">PAGINA WEB</a></td>
                                                                              <td width="1" >&nbsp;</td>
                                                                              <td width="149" style="background-color: #CBD0A9;" align="center"><a href="' . base_url() . 'mba" style="color: #FFF;font-family: \'Century Gothic\';font-size: 15px;text-decoration: none;">QUE ES EL RAW?</a></td>
                                                                              <td width="1" >&nbsp;</td>
                                                                              <td width="149" style="background-color: #CBD0A9;" align="center"><a href="' . base_url() . 'servicios/counceling" style="color: #FFF;font-family: \'Century Gothic\';font-size: 15px;text-decoration: none;">COUNSELING</a></td>
                                                                              <td width="1" >&nbsp;</td>
                                                                              <td width="150" style="background-color: #CBD0A9;" align="center"><a href="' . base_url() . 'actividades/calendario" style="color: #FFF;font-family: \'Century Gothic\';font-size: 15px;text-decoration: none;">CALENDARIO</a></td>
                                                                      </tr>
                                                              </table>
                                                      </td>
                                                      <td width="15" >&nbsp;</td>
                                              </tr>
                                              <tr>
                                                      <td width="15" >&nbsp;</td>
                                                      <td>
                                                              <table width="600" cellpadding="0" cellspacing="0" border="0" align="center">

                                                                      <tr>
                                                                              <td colspan="3" width="600" height="67" valign="middle" align="left"><img src="' . base_url() . 'design/newsletter-top.jpg" height="67" width="600" /></td>
                                                                      </tr>
                                                              </table>
                                                      </td>
                                                      <td width="15" >&nbsp;</td>
                                              </tr>
                                              <tr>
                                                      <td width="15" >&nbsp;</td>
                                                      <td style="background-color: #fff;">
                                                              <table width="600" cellpadding="0" cellspacing="0" border="0" align="center">
                                                                      <tr>
                                                                              <td width="15" >&nbsp;</td>
                                                                              <td colspan="2">
                                                                                      <h1 style="color: #F27F00;font-family: \'Century Gothic\';font-size: 16px;">Felicitaciones! Has reservado tu lugar para: "' . $title . '"</h1>
                                                                              </td>
                                                                      </tr>';

                $userContent = '<tr>
									<td width="15" >&nbsp;</td>
									<td colspan="2" width="216" align="left" style="color: #666666;font-size: 14px;font-family: \'Century Gothic\';">Te estaremos contactando a la brevedad para brindarte los detalles de pagos e inscripci&oacute;n.</td>
								</tr>
								<tr>
									<td width="15" >&nbsp;</td>
									<td colspan="2" width="216" align="left" style="color: #666666;font-size: 14px;font-family: \'Century Gothic\';">&nbsp;</td>
								</tr>';

                $html_footer = '<tr>
													<td height="15" colspan="3">&nbsp;</td>
												</tr>

											</table>
										</td>
										<td width="15" >&nbsp;</td>
									</tr>

									<tr>
										<td width="15" >&nbsp;</td>
										<td>
											<table width="600" cellpadding="0" cellspacing="0" border="0" align="center">
												<tr>
													<td colspan="3" width="600" height="69" valign="middle" align="left"><img src="' . base_url() . 'design/newsletter-bottom.jpg" width="600" /></td>
												</tr>
												<tr>
													<td width="400" style="color: #FF9900;font-size: 12px;font-family: \'Century Gothic\';">
														Paraguay 3474 P.B. (Capital Federal, Buenos Aires, Argentina)<br/>
														Tel: 4822-3498
													</td>
													<td align="center" valign="bottom">
														<a href="' . base_url() . 'contactenos"><img border="0" src="' . base_url() . 'design/newsletter-contact.jpg" width="75" height="75" /></a>
													</td>
												</tr>
												<tr>
													<td width="400" style="color: #333333;font-size: 9px;font-family: \'Century Gothic\';">
														 2009 © Graciela Schnöller . - Todos los derechos reservad
													</td>
													<td align="center">
														<a href="' . base_url() . 'contactenos" style="color: #666600;font-size: 13px;font-family: \'Century Gothic\';text-decoration: none;">CONTACTANOS</a>
													</td>
												</tr>
												<tr>
													<td height="30" colspan="2" >&nbsp;</td>
												</tr>
											</table>
										</td>
										<td width="15" >&nbsp;</td>
									</tr>
								</table>
								</td></tr></table>
							</body></html>';


                $html_header_admin = '<html><body>
							  <table width="630" cellpadding="0" cellspacing="0" border="0" align="center" style="background-color: #DEE6D5;">
								<tr><td>
								<table width="630" cellpadding="0" cellspacing="0" border="0" align="center" style="background-image: url(\'' . base_url() . 'design/newsletter-bg.jpg\');background-repeat: repeat-x;">
									<tr>
										<td colspan="3" style="color: #F27F00; font-family: \'Century Gothic\';font-size: 16px;">
											Nuevo contacto por Capacitaciones: '.strtoupper($title).': <br /><br />
										</td>
									</tr>

									<tr>
										<td width="15" >&nbsp;</td>
										<td style="background-color: #fff;">
											<table width="600" cellpadding="0" cellspacing="0" border="0" align="center">
												<tr>
													<td width="15" >&nbsp;</td>
													<td colspan="2">
														<h1 style="color: #F27F00;font-family: \'Century Gothic\';font-size: 16px;">' . strtoupper($title) . '</h1>
													</td>
												</tr>';

                $infoContent = '<tr>
										<td colspan="3">
											<table>
												<tr>
													<td>&nbsp;</td>
													<td>&nbsp;</td>
													<td>&nbsp;</td>
												</tr>
												<tr>
													<td width="" >&nbsp;</td>
													<td width="" align="left" style="color: #666666;font-size: 14px;font-family: \'Century Gothic\';">Nombre: </td>
													<td align="left" style="color: #666666;font-size: 14px;font-family: \'Century Gothic\';">' . $name . '</td>
												</tr>
												<tr>
													<td width="" >&nbsp;</td>
													<td width="" align="left" style="color: #666666;font-size: 14px;font-family: \'Century Gothic\';">Apellido: </td>
													<td align="left" style="color: #666666;font-size: 14px;font-family: \'Century Gothic\';">' . $lastname . '</td>
												</tr>
												<tr>
													<td width="" >&nbsp;</td>
													<td width="" align="left" style="color: #666666;font-size: 14px;font-family: \'Century Gothic\';">Tel&eacute;fono: </td>
													<td align="left" style="color: #666666;font-size: 14px;font-family: \'Century Gothic\';">' . $phone . '</td>
												</tr>
												<tr>
													<td width="" >&nbsp;</td>
													<td width="" align="left" style="color: #666666;font-size: 14px;font-family: \'Century Gothic\';">Email: </td>
													<td align="left" style="color: #666666;font-size: 14px;font-family: \'Century Gothic\';">' . $email . '</td>
												</tr>
											</table>
										</td>
									</tr>';

                $html_footer_admin = '</table>
										</td>
										<td width="15" >&nbsp;</td>
									</tr>
								</table>
								</td></tr></table>
							</body></html>';



                if (mail($to, $subject, $html_header_admin . $infoContent . $html_footer_admin, $headers))
                    echo 'done';
                else
                    echo 'Unable to send the message!';

                mail($email, 'Contacto', $html_header . $userContent . $html_footer, $headers);
            }
        }
        else {
            $this->load->view('form-popup-view', $data);
        }
    }

}
