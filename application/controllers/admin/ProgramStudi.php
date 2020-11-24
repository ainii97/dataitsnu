<?php

class ProgramStudi extends CI_Controller{
/*
    public function __construct(){
        parent::__construct;
        $this->load->model('programstudimodel');
    }
*/
    public function index()
    {
        $data['title'] = "Program Studi";
        //$data['programstudi'] = $this->programstudimodel->getAllprogramstudi();
        $this->load->view('templates_admin/header',$data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/programstudi',$data);
        $this->load->view('templates_admin/footer');
    }
}

?>