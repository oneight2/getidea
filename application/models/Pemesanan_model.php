<?php

class Pemesanan_model extends CI_Model
{
    public function addMultiple($data = array())
    {
        return $this->db->insert_batch('detail_komplain', $data);
    }

    public function add()
    {
        $data = [
            "nama_client" => $this->input->post('nama_client', true),
            "nomor_client" => $this->input->post('nomor_client', true),
            "email" => $this->input->post('email', true),
            "website" => $this->input->post('website', true),
            "komplain" => $this->input->post('komplain', true),
        ];

        $this->db->insert('komplain', $data);
    }

    public function getData()
    {
        $this->db->limit(1);
        $this->db->order_by("id", "desc");
        return $this->db->get('komplain')->result_array();
    }
}
