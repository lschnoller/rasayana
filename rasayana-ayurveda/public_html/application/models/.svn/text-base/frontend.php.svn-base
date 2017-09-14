<?php

class Frontend extends Model {

    function Frontend() {
        parent::Model();
        $this->load->library('session');
        $this->load->database();
    }

    function getFooter() {
        $list = FALSE;

        $list[0]['link'] = base_url() . 'instructorado_en_tecnicas_meditativas';
        $list[0]['header'] = 'INSTRUCTORADO EN TÉCNICAS MEDITATIVAS';
        $list[0]['p'] = '';

        $list[1]['link'] = base_url() . 'instructorado_en_procedimientos_ayurvedicos';
        $list[1]['header'] = 'INSTRUCTORADO EN PROCEDIMIENTOS AYURVÉDICOS';
        $list[1]['p'] = '';

        $list[2]['link'] = base_url() . 'equipo';
        $list[2]['header'] = 'EQUIPO';
        $list[2]['p'] = 'Link a las hojas de vida de cada uno de nuestros integrantes.';

        $list[3]['link'] = base_url() . '';
        $list[3]['header'] = 'REGISTRATE';
        $list[3]['p'] = '';

        $list[4]['link'] = base_url() . '';
        $list[4]['header'] = 'QUERÉS RECIBIR NOTICIAS';
        $list[4]['p'] = '';

        $list[5]['link'] = base_url() . 'contactenos';
        $list[5]['header'] = 'CONTACTENOS';
        $list[5]['p'] = '';

        $list[6]['link'] = base_url() . 'servicios/seminarios';
        $list[6]['header'] = 'SEMINARIOS';
        $list[6]['p'] = 'aprender como tomar elecciones saludables en su estilo de vida. Cada uno tiene como objetivo avanzar en el autoconocimiento a través de la práctica meditativa.';

        $list[7]['link'] = base_url() . 'ayurveda/consulta';
        $list[7]['header'] = 'COUNSELING AYURVEDICO';
        $list[7]['p'] = '';

        $list[8]['link'] = base_url() . 'actividades/calendario';
        $list[8]['header'] = 'CALENDARIO';
        $list[8]['p'] = '';

        $list[9]['link'] = base_url() . '';
        $list[9]['header'] = 'PUBLICACIONES Y NOTICIAS';
        $list[9]['p'] = '';

        $list[10]['link'] = base_url() . '';
        $list[10]['header'] = 'QUERÉS RECIBIR NOTICIAS';
        $list[10]['p'] = '';

        $list[11]['link'] = base_url() . '';
        $list[11]['header'] = 'TRATAMIENTOS';
        $list[11]['p'] = '';

        $list[12]['link'] = base_url() . '';
        $list[12]['header'] = 'COSMETICA AYURVEDICA';
        $list[12]['p'] = '';

        $list[13]['link'] = base_url() . '';
        $list[13]['header'] = 'CAMINO DEL INSTRUCTOR';
        $list[13]['p'] = 'La Formación RAW está centrada en el trabajo sobre sí mismo y en el aprendizaje de técnicas para restablecer el equilibrio físico, emocional y energético del individuo.';

        $list[14]['link'] = base_url() . '';
        $list[14]['header'] = 'MASAJE AYURVÉDICO';
        $list[14]['p'] = 'El masaje con aceites es una técnica energética y armonizadora. Vigoriza los tejidos del cuerpo físico permitiendo disolver bloqueos, aliviar dolores y corregir la postura.';

        $list[15]['link'] = base_url() . '';
        $list[15]['header'] = 'CHARLAS Y TALLERES';
        $list[15]['p'] = '';

        $list[16]['link'] = base_url() . 'equipo/graciela_schnoller';
        $list[16]['header'] = 'GRACIELA SCHNÖLLER';
        $list[16]['p'] = 'Cosmetóloga hospitalaria Consultora de Salud Ayurvédica Formación en Yoga Facilitadora en Técnicas Introspectivas';

        $list[17]['link'] = base_url() . '';
        $list[17]['header'] = 'EQUIPO';
        $list[17]['p'] = 'Contamos con un staff de profesionales expertos en tratar los ditintos temas que ofrece el centro';

        $list[18]['link'] = base_url() . '';
        $list[18]['header'] = 'ESPIRITUALIDAD';
        $list[18]['p'] = 'En estos seminarios podrás adentrarte todavía más en el conocimiento de la sabiduría espiritual de la India y de los estudiosos occidentales';

        $list[19]['link'] = base_url() . '';
        $list[19]['header'] = 'VITALIDAD';
        $list[19]['p'] = 'El componente principal de nuestras enseñanzas es que el cuerpo, la mente y el espíritu son una unidad.';

        $list[20]['link'] = base_url() . '';
        $list[20]['header'] = '';
        $list[20]['p'] = '';

        $list[21]['link'] = base_url() . '';
        $list[21]['header'] = 'SEMINARIOS Y TALLERES';
        $list[21]['p'] = 'Aprender como tomar elecciones saludables en su estilo de vida. Cada uno tiene como objetivo avanzar en el autoconocimiento a través de la práctica meditativa.';
    }

    function getCursosList($id = 0) {
        $query = $this->db->query("select * from cursos where cursos_cats_id = $id and status = 1 and course_date > NOW() order by course_date ASC");
        $list = FALSE;
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $rs) {
                $list[$rs->id]['title'] = $rs->title;
                $list[$rs->id]['subtitle'] = $rs->subtitle;
                $list[$rs->id]['desci'] = $rs->description;
                $list[$rs->id]['date_text'] = $rs->date_text;
                $list[$rs->id]['date'] = $rs->course_date;
            }
        }
        return $list;
    }

    function getSeminariosList($id = 0) {
        if ($id == 0)
            $query = $this->db->query("select * from seminarios where status = 1");
        else
            $query = $this->db->query("select * from seminarios where seminarios_cats_id = $id and status = 1");
        $list = FALSE;
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $rs) {
                $list[$rs->id]['title'] = $rs->title;
                $list[$rs->id]['subtitle'] = $rs->subtitle;
                $list[$rs->id]['desci'] = $rs->description;
                $list[$rs->id]['date_text'] = $rs->date_text;
            }
        }
        return $list;
    }

    /*
      function getCalendar() {
      $query = $this->db->query("select * from calendario where status = 1 order by event_date ASC");
      $left = FALSE;
      $right = FALSE;
      $i = 0;
      if ($query->num_rows() > 0) {
      foreach ($query->result() as $rs) {
      $left[$rs->id]['title'] = $rs->title;
      $left[$rs->id]['event_date '] = $rs->event_date;
      $left[$rs->id]['desci'] = $rs->description;
      $left[$rs->id]['date_text'] = $rs->date_text;
      /* if($i%2==0){
      $left[$rs->id]['title'] = $rs->title;
      $left[$rs->id]['event_date '] = $rs->event_date;
      $left[$rs->id]['desci'] = $rs->description;
      $left[$rs->id]['date_text'] = $rs->date_text;
      }else{
      $right[$rs->id]['title'] = $rs->title;
      $right[$rs->id]['event_date '] = $rs->event_date;
      $right[$rs->id]['desci'] = $rs->description;
      $right[$rs->id]['date_text'] = $rs->date_text;
      }
      $i++; *//*
      }
      }
      $list['left'] = $left;
      $list['right'] = $right;
      return $list;
      }
     */

    /*
    function getCalendar() {
        $m[1] = 'Ene';
        $m[2] = 'Feb';
        $m[3] = 'Mar';
        $m[4] = 'Abr';
        $m[5] = 'May';
        $m[6] = 'Jun';
        $m[7] = 'Jul';
        $m[8] = 'Ago';
        $m[9] = 'Sep';
        $m[10] = 'Oct';
        $m[11] = 'Nov';
        $m[12] = 'Dic';

        $query = $this->db->query("select * from calendario where status = 1 and YEAR(event_date) >= YEAR(CURDATE()) order by event_date ASC");
        $events = FALSE;
        $oldEvents = FALSE;
        $i = 0;
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $rs) {
                $eventTime = strtotime($rs->event_date);
                $eventDay = date("d", $eventTime);
                $eventMonth = $m[date("n", $eventTime)];

                if ($eventTime < time()) { //datetime is in the past.
                    $oldEvents[$rs->id]['title'] = $rs->title;
                    $oldEvents[$rs->id]['event_date'] = $rs->event_date;
                    $oldEvents[$rs->id]['desci'] = $rs->description;
                    $oldEvents[$rs->id]['desci_short'] = $this->tokenTruncate($rs->description, 90);
                    $oldEvents[$rs->id]['date_text'] = $rs->date_text;
                    $oldEvents[$rs->id]['event_day'] = $eventDay;
                    $oldEvents[$rs->id]['event_month'] = $eventMonth;
                    $oldEvents[$rs->id]['link_url'] = $rs->link_url;
                }
                else {                
                    $events[$rs->id]['title'] = $rs->title;
                    $events[$rs->id]['event_date'] = $rs->event_date;
                    $events[$rs->id]['desci'] = $rs->description;
                    $events[$rs->id]['desci_short'] = $this->tokenTruncate($rs->description, 90);
                    $events[$rs->id]['date_text'] = $rs->date_text;
                    $events[$rs->id]['event_day'] = $eventDay;
                    $events[$rs->id]['event_month'] = $eventMonth;
                    $events[$rs->id]['link_url'] = $rs->link_url;
                }
            }
        }
        $list['events'] = $events;
        $list['oldEvents'] = $oldEvents;
        return $list;
    }

    function getCalendarHome() {
        $m[1] = 'Ene';
        $m[2] = 'Feb';
        $m[3] = 'Mar';
        $m[4] = 'Abr';
        $m[5] = 'May';
        $m[6] = 'Jun';
        $m[7] = 'Jul';
        $m[8] = 'Ago';
        $m[9] = 'Sep';
        $m[10] = 'Oct';
        $m[11] = 'Nov';
        $m[12] = 'Dic';

        $query = $this->db->query("select * from calendario where status = 1 and event_date >= CURDATE() order by event_date ASC limit 4");
        $events = FALSE;
        $i = 0;
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $rs) {
                $eventTime = strtotime($rs->event_date);
                $eventDay = date("d", $eventTime);
                $eventMonth = $m[date("n", $eventTime)];

                $events[$rs->id]['title'] = $rs->title;
                $events[$rs->id]['event_date'] = $rs->event_date;
                $events[$rs->id]['desci'] = $rs->description;
                $events[$rs->id]['desci_short'] = $this->tokenTruncate($rs->description, 90);
                $events[$rs->id]['date_text'] = $rs->date_text;
                $events[$rs->id]['event_day'] = $eventDay;
                $events[$rs->id]['event_month'] = $eventMonth;
                $events[$rs->id]['link_url'] = $rs->link_url;
            }
        }
        $list['events'] = $events;
        return $list;
    }
    */
    
    //returns only activities after today.
    //catId = 1 basico meditacion
    //catId = 2 basico masaje
    //catId = 3 talleres
    //catId = 4 MT
    //catId = 5 MB    
    //catId = 6 todos los basicos
    //catId = 7 todas las capacitaciones
    function getActividades($catId = false, $limitNum = false) {
        $cat = '';
        $limit = '';
        if ($catId) {
            if($catId == 6)
                $cat = '(category_id = 1 or category_id = 2) and';
            elseif($catId == 7)
                $cat = '(category_id = 4 or category_id = 5) and';
            else
                $cat = 'category_id = '.$catId.' and';
        }
            
        
        if($limitNum)
            $limit = 'limit '.$limitNum;
        
        $m[1] = 'Ene';
        $m[2] = 'Feb';
        $m[3] = 'Mar';
        $m[4] = 'Abr';
        $m[5] = 'May';
        $m[6] = 'Jun';
        $m[7] = 'Jul';
        $m[8] = 'Ago';
        $m[9] = 'Sep';
        $m[10] = 'Oct';
        $m[11] = 'Nov';
        $m[12] = 'Dic';

        $query = $this->db->query("select * from calendario where $cat status = 1 and event_date >= CURDATE() order by event_date ASC $limit");
        $events = FALSE;
        $i = 0;
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $rs) {
                $eventTime = strtotime($rs->event_date);
                $eventDay = date("d", $eventTime);
                $eventMonth = $m[date("n", $eventTime)];

                $events[$rs->id]['cat_id'] = $rs->category_id;
                $events[$rs->id]['title'] = $rs->title;
                $events[$rs->id]['event_date'] = $rs->event_date;
                $events[$rs->id]['desci'] = $rs->description;
                $events[$rs->id]['desci_short'] = $this->tokenTruncate($rs->description, 90);
                $events[$rs->id]['date_text'] = $rs->date_text;
                $events[$rs->id]['event_day'] = $eventDay;
                $events[$rs->id]['event_month'] = $eventMonth;
                $events[$rs->id]['link_url'] = $rs->link_url;
            }
        }
        $list['events'] = $events;
        return $list;
    }
    
    //returns all activities old and new.
    function getActividadesAll($catId = false, $limitNum = false) {
        $cat = '';
        $limit = '';
        if ($catId)
            $cat = 'category_id = '.$catId.' and';
        
        if($limitNum)
            $limit = 'limit '.$limitNum;
        
        $m[1] = 'Ene';
        $m[2] = 'Feb';
        $m[3] = 'Mar';
        $m[4] = 'Abr';
        $m[5] = 'May';
        $m[6] = 'Jun';
        $m[7] = 'Jul';
        $m[8] = 'Ago';
        $m[9] = 'Sep';
        $m[10] = 'Oct';
        $m[11] = 'Nov';
        $m[12] = 'Dic';
        
        $query = $this->db->query("select * from calendario where $cat status = 1 and YEAR(event_date) >= YEAR(CURDATE()) order by event_date ASC $limit");
        $events = false;
        $oldEvents = false;
        $i = 0;
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $rs) {
                $eventTime = strtotime($rs->event_date);
                $eventDay = date("d", $eventTime);
                $eventMonth = $m[date("n", $eventTime)];
                
                if ($eventTime < time()) { //datetime is in the past.
                    $oldEvents[$rs->id]['cat_id'] = $rs->category_id;
                    $oldEvents[$rs->id]['title'] = $rs->title;
                    $oldEvents[$rs->id]['event_date'] = $rs->event_date;
                    $oldEvents[$rs->id]['desci'] = $rs->description;
                    $oldEvents[$rs->id]['desci_short'] = $this->tokenTruncate($rs->description, 90);
                    $oldEvents[$rs->id]['date_text'] = $rs->date_text;
                    $oldEvents[$rs->id]['event_day'] = $eventDay;
                    $oldEvents[$rs->id]['event_month'] = $eventMonth;
                    $oldEvents[$rs->id]['link_url'] = $rs->link_url;
                }
                else {                
                    $events[$rs->id]['cat_id'] = $rs->category_id;
                    $events[$rs->id]['title'] = $rs->title;
                    $events[$rs->id]['event_date'] = $rs->event_date;
                    $events[$rs->id]['desci'] = $rs->description;
                    $events[$rs->id]['desci_short'] = $this->tokenTruncate($rs->description, 90);
                    $events[$rs->id]['date_text'] = $rs->date_text;
                    $events[$rs->id]['event_day'] = $eventDay;
                    $events[$rs->id]['event_month'] = $eventMonth;
                    $events[$rs->id]['link_url'] = $rs->link_url;
                }
            }
        }
        $list['events'] = $events;
        $list['oldEvents'] = $oldEvents;
        return $list;
    }
    

    function tokenTruncate($string, $your_desired_width) {
        $parts = preg_split('/([\s\n\r]+)/', $string, null, PREG_SPLIT_DELIM_CAPTURE);
        $parts_count = count($parts);

        $length = 0;
        $last_part = 0;
        for (; $last_part < $parts_count; ++$last_part) {
            $length += strlen($parts[$last_part]);
            if ($length > $your_desired_width) {
                break;
            }
        }

        return implode(array_slice($parts, 0, $last_part));
    }

    function getRef() {
        $query = $this->db->query("select * from referencias where status = 1");
        $left = FALSE;
        $right = FALSE;
        $center = FALSE;
        $i = 0;
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $rs) {
                if ($i % 3 == 0) {
                    $left[$rs->id]['name'] = $rs->company_name;
                    $left[$rs->id]['url'] = $rs->url;
                    $left[$rs->id]['desci'] = $rs->company_info;
                    $left[$rs->id]['image'] = $rs->image_url;
                } elseif ($i % 3 == 1) {
                    $center[$rs->id]['name'] = $rs->company_name;
                    $center[$rs->id]['url'] = $rs->url;
                    $center[$rs->id]['desci'] = $rs->company_info;
                    $center[$rs->id]['image'] = $rs->image_url;
                } else {
                    $right[$rs->id]['name'] = $rs->company_name;
                    $right[$rs->id]['url'] = $rs->url;
                    $right[$rs->id]['desci'] = $rs->company_info;
                    $right[$rs->id]['image'] = $rs->image_url;
                }
                $i++;
            }
        }
        $list['left'] = $left;
        $list['center'] = $center;
        $list['right'] = $right;
        return $list;
    }

    function getTallers() {
        $query = $this->db->query("select * from talleres where status = 1");
        $list = FALSE;
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $rs) {
                $list[$rs->id]['title'] = $rs->title;
                $list[$rs->id]['subtitle'] = $rs->subtitle;
                $list[$rs->id]['desci'] = $rs->description;
                $list[$rs->id]['date_text'] = $rs->date_text;
                $list[$rs->id]['date'] = $rs->course_date;
            }
        }
        return $list;
    }

    function getRandQuote() {
        $query = $this->db->query("select * from testimonios where status = 1 ORDER BY rand() LIMIT 1");
        $list = FALSE;
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $rs) {
                $list['author'] = $rs->author;
                $list['text'] = $rs->quote_text;
                $list['profession'] = $rs->profession;
            }
        }
        return $list;
    }
    
    function getQuotesRandOrder() {
        $query = $this->db->query("select * from testimonios where status = 1 ORDER BY rand()");
        $list = FALSE;
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $rs) {
                $list[$rs->id]['author'] = $rs->author;
                $list[$rs->id]['text'] = $rs->quote_text;
                $list[$rs->id]['profession'] = $rs->profession;
            }
        }
        return $list;
    }
    
    function getTestimonios() {
        $query = $this->db->query("select * from testimonios where status = 1");
        $list = FALSE;
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $rs) {
                $list[$rs->id]['author'] = $rs->author;
                $list[$rs->id]['quote'] = $rs->quote_text;
                $list[$rs->id]['profession'] = $rs->profession;
            }
        }
        return $list;
    }

    function getCalCalendar($time) {

        $today = date("Y/n/j", time());
        $current_month = date("n", $time);
        $current_year = date("Y", $time);
        $current_month_text = date("F Y", $time);
        $total_days_of_current_month = date("t", $time);

        $events = array();

        $query = $this->db->query("
		SELECT DATE_FORMAT(event_date,'%d') AS day,
		description as eventContent, title as eventTitle,date_text  as user,id 
		FROM calendario 
		WHERE status = 1 AND event_date BETWEEN  '$current_year/$current_month/01' 
						AND '$current_year/$current_month/$total_days_of_current_month'");

        foreach ($query->result() as $row_event) {
            $events[intval($row_event->day)][] = $row_event;
        }
        $query->free_result();
        return $events;
    }

}
