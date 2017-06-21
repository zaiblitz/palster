<?php

class Config_Management extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('admin_user');
    }

    public function get_data() {
        echo 'ok';
    }
}
