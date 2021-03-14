<?php
class Login_modal extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    
    public function insertMaster($tableName,$data)
    {
        $Query=$this->db->insert($tableName,$data);
        return $Query;
    }
    
    public function checkLoginDetails($username,$password)
    {
        $this->db->select('id,name,email,dob,gender,username,image,address,userType');
        $this->db->from('users');
        $this->db->where('BINARY(username)',$username);
        $this->db->where('BINARY(password)',$password);
        $this->db->where('status',1);
        $Query=$this->db->get();
        return $Query;
    }
    
    public function checkUserNameOrEmail($username)
    {
        $this->db->select('id,name,email,dob,gender,username,address,userType');
        $this->db->from('users');
        $this->db->where('BINARY(username)',$username);
        $this->db->or_where('email',$username);
        $this->db->where('status',1);
        $Query=$this->db->get();
        return $Query;
    }
    
    public function updatePasswordByUser($username,$password)
    {
        $data=array('password'=>$password);
        $this->db->where('BINARY(username)',$username);
        $this->db->or_where('email',$username);
        $Query= $this->db->update('users',$data);
        return $Query;
    }

}