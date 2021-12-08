<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index()
    {
        $data = array(
            'title' => "Data Dashboard",
        );
        $this->templates->admin('v_dashboard', $data);
    }

}


?>