<?php
  class m_category extends CI_Model{
      
      public function get_category(){
          $sql = "select * from tb_category order by category_id asc ";
          $result = $this->db->query($sql);
          $result = $result->result_array();
          return $result;
      }
      public function get_category_hdr($id = ""){
          $sql = "select * from tb_category_hdr where  category_id = $id order by category_hdr_id asc ";
          $result = $this->db->query($sql);
          $result = $result->result_array();
          return $result;
      }
      
  }
?>