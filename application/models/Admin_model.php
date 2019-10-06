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
}
