<?php


class Templates
{
    protected $ci;

    public function __construct()
    {
        $this->ci = &get_instance();
    }

    public function admin($content, $data = Null)
    {
        $this->ci->load->view('templates_admin/v_admin_header');
        $this->ci->load->view('templates_admin/v_admin_sidebar', $data);
        $this->ci->load->view('admin/' . $content, $data);
        $this->ci->load->view('templates_admin/v_admin_footer');
        $this->ci->load->view('templates_admin/v_admin_script', $data);
    }
}
