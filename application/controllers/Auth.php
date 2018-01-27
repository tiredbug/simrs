<?php
Class Auth extends CI_Controller{
    
    
    
    function index(){
        $this->load->view('auth/login');
    }
    
    function cheklogin(){
        $username      = $this->input->post('username');
        $password   = $this->input->post('password');
        // query chek users
        $this->db->where('username',$username);
        $this->db->where('password',  md5($password));
        $user       = $this->db->get('tbl_user');
        if($user->num_rows()>0){
            // retrive user data to session
            $this->session->set_userdata($user->row_array());
            redirect('user');
        }else{
            $this->session->set_flashdata('status_login','Username atau Password anda salah!');
            redirect('auth');
        }
    }
    
    function logout(){
        $this->session->sess_destroy();
        $this->session->set_flashdata('status_login','Anda sudah berhasil keluar dari aplikasi');
        redirect('auth');
    }
}
