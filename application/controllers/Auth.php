<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    //function untuk memanggil tampilan
    public function login()
    {
        $v['title'] = "Login";
        $this->load->view('auth/header', $v);
        $this->load->view('auth/login');
        $this->load->view('auth/footer');
    }

    public function register()
    {
        $v['title'] = "Register";
        $this->load->view('auth/header', $v);
        $this->load->view('auth/register');
        $this->load->view('auth/footer');
    }
    //end


    //function untuk melakukan authentikasi
    public function do_login()
    {
        $post = $this->input->post();

        $email = $post['email'];
        $password = $post['password'];

        $exist = $this->auth->checkUsers($email, $password);

        if ($exist == true) {
            $user = $this->auth->getUser($email, $password);

            $this->session->set_userdata('id', $user['id']);
            $this->session->set_userdata('email', $user['email']);
            $this->session->set_userdata('nama', $user['nama']);
            $this->session->set_userdata('peran', $user['peran']);
            $this->session->set_userdata('logged_in', TRUE);

            $this->session->set_flashdata('msg', 'gagal');
            redirect('Dashboard');
        } else {
            $this->session->set_flashdata('msg', 'gagal');
            redirect('Auth/Login');
        }
    }

    public function do_register()
    {
        $post = $this->input->post();

        $nama = $post['nama'];
        $email = $post['email'];
        $password = $post['password'];
        $confirm_password = $post['confpassword'];

        $exist_email = $this->auth->checkEmail($email);

        if ($password != $confirm_password) {
            $this->session->set_flashdata('msg', 'password tidak sama');
            redirect('Auth/Register');
        } else if ($exist_email == true) {
            $this->session->set_flashdata('msg', 'email ada');
            redirect('Auth/Register');
        } else {
            $data_register = [
                'user_nama' => $nama,
                'user_email' => $email,
                'user_password' => $password,
                'user_peran' => 'user'
            ];

            $this->auth->addUser($data_register);
            $this->session->set_flashdata('msg', 'Register telah berhasil');
            redirect('Auth/Login');
        }
    }

    public function checkUser()
    {
        $en = $this->input->post('EN');

        $exist = $this->auth->checkUsers($en);

        $findChar = strchr($en, "@");

        if ($en == "") {
            echo 2;
        } else {
            if ($findChar) {
                if ($exist == false) {
                    echo 0;
                } else {
                    echo 1;
                }
            } else {
                if ($exist == false) {
                    echo 2;
                } else {
                    echo 3;
                }
            }
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }
}
