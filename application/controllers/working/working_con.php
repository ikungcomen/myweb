<?php

class working_con extends CI_Controller {

    function __construct() {
        parent::__construct();
        //$this->load->model('m_category');
    }
    public function working_view() {

        $this->load->view('include/header.php');
        $this->load->view('working/working_view.php');
        $this->load->view('include/footter.php');
    }

}

?>