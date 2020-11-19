<?php
class Dashboard extends CI_Controller {
    public function index ()
    {
        $data['title'] = "Dashboard";
        $this->load->view('templates_admin/header',$data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/dataMhs',$data);
        $this->load->view('templates_admin/footer');
    }
}

?>