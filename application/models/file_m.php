<?php

class File_m extends CI_Model {
    public $table = 'file';
    public $primary_key = 'id';

    public function insert($data)
    {
        $this->db->trans_start();

        $sql = $this->db->insert(
            $this->table,
            array(
                'file' => $data['file'],
                'path' => $data['path'],
                'extension' => $data['extension']
            )
        );

        $id = $this->db->insert_id();
        $this->db->trans_complete();
        
        return $id;
    }
}

?>