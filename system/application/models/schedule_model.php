<?php
class Schedule_model extends Model {

    function Schedule_model()
    {
        parent::Model();
    }

    function getInstitutes(){
        $this->db->select('id, name'); //change this to the two main values you want to use
        $this->db->from('category');
        $this->db->where('category_online', 1);
        $query = $this->db->get();
        foreach($query->result_array() as $row){
            $data[$row['id']]=$row['name'];
        }
        return $data;
     }
}
