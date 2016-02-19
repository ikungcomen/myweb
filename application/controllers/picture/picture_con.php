<?php 
class picture_con extends CI_Controller{
        
    public function picture_view(){
        $this->load->view('include/header.php');
        $this->load->view('picture/picture_view.php');
        $this->load->view('include/footter.php');
    }
    public function picture_detail(){
        $this->load->view('include/header.php');
        $this->load->view('picture/picture_detail.php');
        $this->load->view('include/footter.php');
    }
}
?>