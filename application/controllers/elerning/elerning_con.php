<?php
class elerning_con extends CI_Controller{
     function __construct() {
        parent::__construct();
        $this->load->model('m_category');
    }
    public function elerning_view(){
        $data['result'] = $this->m_category->get_category();
        $this->load->view('include/header.php');
        $this->load->view('elerning/elerning_view.php',$data);
        $this->load->view('include/footter.php');
    }
    public function elerning_view_detail($id = ""){
        
        $data['hdr'] = $this->m_category->get_category_hdr($id);
        $this->load->view('include/header.php');
        $this->load->view('elerning/elerning_view_detail.php',$data);
        $this->load->view('include/footter.php');
    }
}

?>