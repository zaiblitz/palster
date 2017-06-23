<?php

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('admin_user');
    }

    public function index() {
        $this->load->view('dashboard/index');
    }

    public function get_data() {
        echo 'ok';
    }

}