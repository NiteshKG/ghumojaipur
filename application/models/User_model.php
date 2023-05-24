<?php
class User_model extends CI_Model{

    public function create($formArray){
        $this->db->insert('users',$formArray);
    }

    public function update($formArray){
        $this->db->insert('usertopic',$formArray);
    }

    public function work($formArray){
        $this->db->insert('work',$formArray);
    }
}




?>