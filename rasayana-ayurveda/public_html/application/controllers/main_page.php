<?php

class Main_page extends Controller {

    function Main_page() {
        parent::Controller();
        $this->load->helper('url');
        $this->load->model('pcfunc');
        $this->load->model('frontend');
    }

    function index() {
        $data['title'] = 'Ayurveda | Centro Ayurveda Buenos Aires | Bienestar Integral';
        $data['keywords'] = 'Ayurveda, Centro Ayurveda Buenos Aires';
        $data['description'] = 'Nuestros programas incluyen counseling, técnicas de meditación, masaje Ayurveda, tratamientos holísticos, cursos, talleres temáticos y capacitaciones Ayurveda';

        $timeid = $this->uri->segment(3);
        if ($timeid == 0)
            $time = time();
        else
            $time = $timeid;

        $dateData = $this->_date($time);
        $this->load->vars($dateData);
        $data['cal'] = $dateData;
        //$data['list'] = $this->frontend->getCalendarHome();
        $data['list'] = $this->frontend->getActividades(false, 4);
        $quotes = $this->frontend->getQuotesRandOrder();
        
        $quotesJson = '{"quotes":[';
        foreach ($quotes as $key => $val) {
            $remove_character = array("\n", "\r\n", "\r");
            $text = str_replace($remove_character, '', $val['text']); 
            $quotesJson .= '{"text":"'.mb_convert_encoding($text, 'UTF-8', 'auto').'", "author":"'.mb_convert_encoding($val['author'], 'UTF-8', 'auto').'", "profession":"'.mb_convert_encoding($val['profession'], 'UTF-8', 'auto').'"},';
        }
        $quotesJson .= ']}';

        $data['quotes'] = $quotesJson;
        $this->load->view('home', $data);
    }

    function error($type = '') {
        $data['title'] = 'ERROR';
        $data['image'] = 'mba.jpg';
        $this->load->view('header', $data);
        $this->load->view('error-view');
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

}
