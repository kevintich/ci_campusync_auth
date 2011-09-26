<?php
class Schedule_model extends Model {

    function Schedule_model()
    {
        parent::Model();
    }

    function getInstitutes(){
        $this->db->select('inst_ID, inst_Name');
        $query = $this->db->get('institutes');
 
        $institutes = array();
 
         if($query->result()){
            foreach ($query->result() as $institute) {
                $institutes[$institute->inst_ID] = $institute->inst_Name;
         }
            return $institutes;
         }else{
            return FALSE;
         }
     }
}
