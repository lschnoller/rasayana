<?php

class Equipo extends Controller {

    function Equipo() {
        parent::Controller();
        $this->load->helper('url');
    }

    function index() {
        $data['title'] = 'Ayurveda | Centro Ayurveda Buenos Aires | Nuestro Equipo';
        $data['keywords'] = 'Ayurveda, Centro Ayurveda Buenos Aires';
        $data['description'] = 'Somos un equipo de profesionales especializados en facilitar el conocimiento del Ayurveda en las rutinas cotidianas de cada persona';
        $data['image'] = 'headers-equipo.jpg';
        $this->load->view('header', $data);
        $this->load->view('equipo-view');
        $this->load->view('footer');
    }

    function erika_schnoller() {
        $data['title'] = 'ERIKA SCHNÖLLER';
        $data['image'] = 'equipo2.jpg';
        $this->load->view('header', $data);
        $this->load->view('erika_schnoller-view');
        $this->load->view('footer');
    }

    function graciela_schnoller() {
        $data['title'] = 'GRACIELA SCHNÖLLER';
        $data['image'] = 'equipo2.jpg';
        $this->load->view('header', $data);
        $this->load->view('graciela_schnoller-view');
        $this->load->view('footer');
    }

    function nos_acompanan() {
        $data['title'] = 'EQUIPO';
        $data['image'] = 'equipo4.jpg';
        $this->load->view('header', $data);
        $this->load->view('nos_acompanan-view');
        $this->load->view('footer');
    }

}