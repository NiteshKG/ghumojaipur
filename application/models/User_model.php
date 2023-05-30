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
        $val = $this->db->where('email',$data['email'])->where('password',$data['password'])->get('admin')->row_array();
        if($val!=NULL){
            return $val;
        }  
    }
    public function all(){
        return $users=$this->db->get('users')->result_array();
    }
    public function news(){
        return $users=$this->db->get('usertopic')->result_array();
    }
    public function involved(){
        return $users=$this->db->get('work')->result_array();
    }

    public function register($formArray){
        $this->db->insert('admin',$formArray);
    }

}

 


?>