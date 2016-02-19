<?php 
class education_con extends CI_Controller{
    
    
    
    public function education_view(){
        $this->load->view('include/header.php');
        $this->load->view('education/education_view.php');
        $this->load->view('include/footter.php');
    }
}


?>