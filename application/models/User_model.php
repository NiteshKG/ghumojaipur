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

    

    public function login($data){
        $val = $this->db->where('name',$data['name'])->where('password',$data['password'])->get('admin')->row_array();
        if($val!=NULL){
            return $val;
        }  
    }
    public function all(){
        return $users=$this->db->get('users')->result_array();
    }

}

 


?>