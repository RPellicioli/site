<?php

class Partner_m extends CI_Model {
    public $table = 'partner';
    public $table_file = 'file';
    public $primary_key = 'id';
    public $foreign_key = 'imageId';

    function get($id = FALSE){

        $this->db->select('partner.id, partner.name, partner.description, partner.url, file.id as imageId, file.file, file.path')
            ->from($this->table.' as partner')
            ->join($this->table_file.' as file', 'partner.imageId'.' = file.id', 'left')
            ->order_by('partner.id', 'ASC');

        if($id)
            $this->db->where('partner.id', $id);
        
        $query = $this->db->get();
        $data = $query->result();

        return $data;
    }

    public function delete($id = 0)
    {
        try {
            $delete = false;
            $delete = $this->db->where('id', $id)->delete($this->table);

            return $delete;
        } catch (Exception $e) {
            log_message('error', print_r($e, true));
        }
    }

    public function insert($data)
    {
        $this->db->trans_start();

        $sql = $this->db->insert(
            $this->table,
            array(
                'imageId' => $data['imageId'],
                'name' => $data['name'],
                'description' => $data['description'],
                'url' => $data['url']
            )
        );

        $id = $this->db->insert_id();
        $this->db->trans_complete();
        
        return $id;
    }

    public function update($data, $id)
    {
        $this->db->trans_start();
        
        $this->db->where('id', $id);
        $this->db->update(
            $this->table,
            array(
                'imageId' => $data['imageId'],
                'name' => $data['name'],
                'description' => $data['description'],
                'url' => $data['url']
            )
        );

        $this->db->trans_complete();
        
        return $id;
    }
}

?>