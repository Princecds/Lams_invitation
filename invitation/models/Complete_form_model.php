<?php 

class Complete_form_model extends CI_Model {
    
    public function __construct()
    {
              
    }
        
        
    // Get single Data from table
    
    // public function getData($column = '', $fromTable = '', $record =''){
    //     this->db->select($column);
    //     $query = $this->db->get($fromTable);
    //     if($record == 1){
    //         $result = $query->row_array();
    //     }else{
    //         $result = $query->result_array();
    //     }
        
    //     return $result; 
    // }
    
    public function create_form($Family_detail,$Employment_details,$Education_details,$Experience_details,$Referral_details,$Other_details,$Regular_employee,$Prev_employee){
        
        
        
        // print_r($Family_detail);die;
        $this->db->insert('compl_family_details' , $Family_detail);
        $this->db->insert('compl_employment_details' , $Employment_details);
        $this->db->insert('compl_education_details' , $Education_details);
        $this->db->insert('compl_experience_details' , $Experience_details);
        $this->db->insert('compl_referral_details' , $Referral_details);
        $this->db->insert('compl_other_details' , $Other_details);
        $this->db->insert('compl_regular_details' , $Regular_employee);
        $this->db->insert('compl_prev_details' , $Prev_employee);
        return true;
        
        // $this->db->insert('Family_details' , $Family_details);
        // $this->db->insert('Family_details' , $Family_details);
        // $this->db->insert('Family_details' , $Family_details);
        
    }
    
}
?>