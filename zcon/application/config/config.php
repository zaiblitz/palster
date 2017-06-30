<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// load CI config default first
require_once dirname(__FILE__) . '/config_default.php';

if (file_exists(dirname(__FILE__) . '/../../../secret_keys/config_secret_local.php')) {
    require_once dirname(__FILE__) . '/../../../secret_keys/config_secret_local.php';
}