<?php

class Testimony_m extends CI_Model {
    public $table = 'testimony';
    public $primary_key = 'id';

    function get($id = FALSE){

        $this->db->select('testimony.id, testimony.name, testimony.description, testimony.occupation')
            ->from($this->table.' as testimony');

        if($id)
            $this->db->where('testimony.id', $id);
        
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
                'name' => $data['name'],
                'description' => $data['description'],
                'occupation' => $data['occupation']
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
                'name' => $data['name'],
                'description' => $data['description'],
                'occupation' => $data['occupation']
            )
        );

        $this->db->trans_complete();
        
        return $id;
    }
}

?>