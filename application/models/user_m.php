<?php

class User_m extends CI_Model {
    public $table = 'user';
    public $primary_key = 'id';

    function get($params = array()){
        $options = array(
            'order_by'  => FALSE, // Ordena��o das colunas
            'count'     => FALSE, // TRUE para trazer apenas a contagem / FALSE para trazer os resultados
            'id'        => FALSE, // Trazer apenas um registro espec�fico pelo id
            'where'     => FALSE, // Array especifico de where
        );
        $params = array_merge($options, $params);

        $this->db->select('*')
            ->from($this->table)
            ->where('status', 1);

        if($params['where'])
            $this->db->where($params['where']);

        $query = $this->db->get();
        $data = $query->result();

        return $data;
    }
}

?>