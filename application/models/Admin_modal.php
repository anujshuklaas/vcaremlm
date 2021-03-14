<?php
class Admin_modal extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    
    public function getGeneralSettingDetailsById($generalId)
    {
        $this->db->select('*');
        $this->db->from('settings');
        if($generalId)
        {
            $this->db->where('id',$generalId);
        }
        $Query=$this->db->get();
        return $Query;
    }
    
}