<?php
class Common_Model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }
}