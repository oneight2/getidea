<?php

class Admin_model extends CI_Model
{
    public function login()
    {
        $username = 'getidea';
        $password = 'tahun2019';
        if ($this->input->post('username') == $username && $this->input->post('password') == $password) {
            return true;
        } else {
            return false;
        }
    }

    public function getAllApp()
    {
        return $this->db->get('aplikasi')->result_array();
    }

    public function add($photo)
    {
        $data = [
            "nama_app" => $this->input->post('nama_app', true),
            "detail" => $this->input->post('detail', true),
            "photo_preview" => $photo,
            "video_preview" => 'video.mkv'
        ];

        $this->db->insert('aplikasi', $data);
    }

    public function delete($id)
    {
        $this->db->delete('aplikasi', ['id' => $id]);
    }

    public function getAppById($id)
    {
        return $this->db->get_where('aplikasi', ['id' => $id])->row_array();
    }

    public function edit($photo)
    {
        $data = [
            "nama_app" => $this->input->post('nama_app', true),
            "detail" => $this->input->post('detail', true),
            "photo_preview" => $photo,
            "video_preview" => 'video.mkv'
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('aplikasi', $data);
    }
}
