<?php
class Common_modal extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    
    public function insertMaster($tableName, $data) {
        $this->db->insert($tableName, $data);
        $recordId=$this->db->insert_id();
        return $recordId;
    }
    
    public function updateMaster($whereArr, $tableName, $data) {
        $this->db->where($whereArr);
        $Query = $this->db->update($tableName, $data);
        return $Query;
    }
    
    public function checkUserNameIfExists($userId,$username)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('email',$username);
        $this->db->where('id!=',$userId);
        $Query=$this->db->get();
        return $Query;
    }
    
    public function getUsersDetailsById($userId)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('id',$userId);
        $Query=$this->db->get();
        return $Query;
    }
    
    public function checkRefCode($username,$side)
    {
        $this->db->select('*');
        $this->db->from('customers');
        $this->db->where('username',$username);
        if($side)
        {
            $this->db->where('side',$side);
        }
        $Query=$this->db->get();
        return $Query;
    }
    
    public function getGeneralSettingDetailsById($generalId)
    {
        $this->db->select('*');
        $this->db->from('settings');
        if($generalId)
        {
            $this->db->where('id',$generalId);
        }
        $Query=$this->db->get()->result_array();
        return $Query;
    }
    
    public function checkCustomerLoginDetails($emailLogin,$passwordLogin)
    {
        $this->db->select('*');
        $this->db->from('customers');
        $this->db->where("id>0 and password='$passwordLogin' and (BINARY(email)='$emailLogin' or BINARY(username)='$emailLogin') and status=1");        
        $Query=$this->db->get();
        return $Query;
    }
    
    public function getLastUserName()
    {
        $this->db->select('username');
        $this->db->from('customers');
        $this->db->order_by('id','desc');
        $this->db->limit(1);
        $Query=$this->db->get();        
        return $Query;
    }
    
    public function checkUserIfExist($userId,$email)
    {
        $this->db->select('*');
        $this->db->from('customers');
        $this->db->where('email',$email);
        if($userId>0)
        {
            $this->db->where('id!=',$userId);
        }
        $Query=$this->db->get();
        return $Query;
    }
    
	
	
    public function getPlansDetails($whereArr)
    {
        $this->db->select('*');
        $this->db->from('plans');
        $this->db->where($whereArr);
        $Query=$this->db->get();
        return $Query;
    }
	
	public function getTreeDetailsById($whereUsername)
    {
        $this->db->select('*');
        $this->db->from('customers');
        $this->db->where('parentId',$whereUsername);
        $Query=$this->db->get();
        return $Query;
    }
}