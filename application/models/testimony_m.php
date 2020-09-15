<?php

class Testimony_m extends CI_Model {
    public $table = 'testimony';
    public $primary_key = 'id';

    function get($id = FALSE){

        $this->db->select('testimony.id, testimony.name, testimony.description, testimony.occupation')
            ->from($this->table.' as testimony')
            ->order_by('testimony.id', 'RANDOM')
            ->limit(2);

        if($id)
            $this->db->where('testimony.id', $id);
        
        $query = $this->db->get();
        $data = $query->result();

        return $data;
    }
}

?>