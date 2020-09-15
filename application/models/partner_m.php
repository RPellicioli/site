<?php

class Partner_m extends CI_Model {
    public $table = 'partner';
    public $table_file = 'file';
    public $primary_key = 'id';
    public $foreign_key = 'imageId';

    function get($id = FALSE){

        $this->db->select('partner.id, partner.name, partner.description, partner.url, file.file, file.path')
            ->from($this->table.' as partner')
            ->join($this->table_file.' as file', 'partner.imageId'.' = file.id', 'inner')
            ->order_by('partner.id', 'ASC');

        if($id)
            $this->db->where('partner.id', $id);
        
        $query = $this->db->get();
        $data = $query->result();

        return $data;
    }
}

?>