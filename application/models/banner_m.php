<?php

class Food_m extends CI_Model {
    public $table = 'banner';
    public $table_file = 'file';
    public $primary_key = 'id';
    public $foreign_key = 'imageId';

    function get($id = FALSE){

        $this->db->select('banner.id, banner.title, file.file, file.path')
            ->from($this->table.' as banner')
            ->join($this->table_file.' as file', 'food.imageId'.' = file.id', 'inner')
            ->where('banner.status = 1')
            ->order_by('banner.title', 'ASC');

        if($id)
            $this->db->where('banner.id', $id);
        
        $query = $this->db->get();
        $data = $query->result();

        return $data;
    }
}

?>