<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_post extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    private $User = 'users';
    private $Post = 'post';
    private $Likey = 'likey';
    private $Komentar = 'komentar';

    public function addPost($data)
    {
        $this->db->insert($this->Post, $data);
    }

    public function getPost()
    {
        $this->db->select('DATE_FORMAT(' . $this->Post . '.post_tanggal, "%d %M %Y, %k:%i:%s") as tanggal, ' . $this->Post . '.post_id, ' . $this->Post . '.user_id , ' . $this->Post . '.post_caption, ' . $this->Post . '.post_image, ' . $this->User . '.user_nama ');
        $this->db->from($this->Post);
        $this->db->join($this->User, $this->User . '.user_id =' . $this->Post . '.user_id');
        $this->db->order_by($this->Post . '.post_id', 'DESC');

        return $this->db->get();
    }

    public function like($data)
    {
        $this->db->insert($this->Likey, $data);
    }

    public function unlike($user_id, $post_id)
    {
        $this->db->where('post_id', $post_id);
        $this->db->where('user_id', $user_id);
        $this->db->delete($this->Likey);
    }

    public function checkLike($user_id, $post_id)
    {
        $this->db->select('*');
        $this->db->from($this->Likey);
        $this->db->where('post_id', $post_id);
        $this->db->where('user_id', $user_id);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $exist = true;
        } else {
            $exist = false;
        }

        return $exist;
    }

    public function addKomentar($data)
    {
        $this->db->insert($this->Komentar, $data);
    }
}
