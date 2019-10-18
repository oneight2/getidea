<?php
class Portfolio_model extends CI_Model
{
    public function getAll()
    {
        return $this->db->get('aplikasi')->result_array();
    }
}
