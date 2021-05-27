<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function index()
    {
        if ($this->session->userdata('logged_in') == true && $this->session->userdata('peran') == "user") {
            $a['data'] = $this->post->getPost()->result_array();
            $this->load->view('profile/dashboard_profile', $a);
        } elseif ($this->session->userdata('logged_in') == true && strchr($this->session->userdata('peran'), "admin")) {
            redirect('Auth/Register');
        } else {
            redirect('Auth/Login');
        }
    }

    public function posting()
    {
        $post = $this->input->post();

        $user_id = $post['user_id'];
        $caption = $post['caption'];

        $config['upload_path']          = './template/uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 0;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('img')) {
            $error = array('error' => $this->upload->display_errors());

            print_r($error);
        } else {
            $data = array('upload_data' => $this->upload->data());
            $posting = [
                'user_id' => $user_id,
                'post_caption' => $caption,
                'post_image' => $data['upload_data']['file_name'],
            ];

            $this->post->addPost($posting);
            $this->session->set_flashdata('msg', 'Posting success');
            redirect('Dashboard');
        }
    }

    public function likeunlike($post_id)
    {
        $user_id = $this->uri->segment(4);
        $post_id1 = $post_id;

        $data = [
            'user_id' => $user_id,
            'post_id' => $post_id1,
        ];

        $like = $this->post->checkLike($user_id, $post_id1);

        if ($like == TRUE) {
            $this->post->unlike($user_id, $post_id1);
            redirect('Dashboard');
        } else {
            $this->post->like($data);
            redirect('Dashboard');
        }
    }

    public function komentar()
    {
        $post = $this->input->post();

        $user_id = $post['user_id'];
        $post_id = $post['post_id'];
        $komentar = $post['komentar'];

        $data_komentar = [
            'komentar' => $komentar,
            'user_id' => $user_id,
            'post_id' => $post_id
        ];

        $this->post->addKomentar($data_komentar);
        redirect('Dashboard');
    }
}
