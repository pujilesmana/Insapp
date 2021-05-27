<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_auth extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    private $User = 'users';

    public function check()
    {
        $this->db->select('user_terkait');
        $this->db->like('user_terkait', 'Bidang');
        $this->db->group_by('user_terkait');
        return $this->db->get($this->User);
    }

    public function getBidang($bidang)
    {
        $this->db->select();
        $this->db->where('user_terkait', $bidang);
        $this->db->order_by('user_peran');
        return $this->db->get($this->User);
    }

    public function getPeran($peran)
    {
        $this->db->select();
        $this->db->where('user_peran', $peran);
        return $this->db->get($this->User);
    }

    public function checkUsers($email, $password)
    {
        $this->db->select('*');
        $this->db->from($this->User);
        $this->db->where('user_email', $email);
        $this->db->where('user_password', $password);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $exist = true;
        } else {
            $exist = false;
        }

        return $exist;
    }

    public function checkEmail($email)
    {
        $this->db->select('*');
        $this->db->from($this->User);
        $this->db->where('user_email', $email);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $exist = true;
        } else {
            $exist = false;
        }

        return $exist;
    }

    public function getUser($email, $password)
    {
        $this->db->select('*');
        $this->db->from($this->User);
        $this->db->where('user_email', $email);
        $this->db->where('user_password', $password);
        $this->db->limit(1);

        $query = $this->db->get();
        $row = $query->row();

        $data_user['id'] = $row->user_id;
        $data_user['email'] = $row->user_email;
        $data_user['nama'] = $row->user_nama;
        $data_user['peran'] = $row->user_peran;

        return $data_user;
    }

    public function addUser($data)
    {
        $this->db->insert($this->User, $data);
    }
}
