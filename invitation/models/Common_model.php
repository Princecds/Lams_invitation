<?php 

class Common_model extends CI_Model {
    
    public function __construct()
    {
              
    }
        
        
    // Get single Data from table
    
    public function getData($column = '', $fromTable = '', $record =''){
        this->db->select($column);
        $query = $this->db->get($fromTable);
        if($record == 1){
            $result = $query->row_array();
        }else{
            $result = $query->result_array();
        }
        
        return $result; 
    }
    
    
    
}
?>