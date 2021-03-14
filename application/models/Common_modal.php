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
}