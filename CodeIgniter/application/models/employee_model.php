<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

  Class Employee_model extends CI_Model {

  public function saveEmployee($data)
 {
   {
     $this->db->insert('basic_info', $data);
     $id = $this->db->insert_id();
   }
   
   return $id;
 }
}