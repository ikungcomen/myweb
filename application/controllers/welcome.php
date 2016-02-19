<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function index() {
        $this->load->view('include/header.php');
        //$this->load->view('main/slider.php');
        $this->load->view('main/index.php');
        $this->load->view('include/footter.php');
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */