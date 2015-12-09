<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

    function __construct() {
        parent::__construct();
//        $this->load->model('Pessoas_model', 'model', TRUE);
//        $this->load->helper('form');
    }

    function index() {
        $this->data['topo'] = 'templates/topo';
        $this->data['slide'] = 'templates/slide';
        $this->data['home'] = 'templates/home';
        $this->data['rodape'] = 'templates/rodape';
        $this->load->view('principal.php', $this->data);
    }
}


