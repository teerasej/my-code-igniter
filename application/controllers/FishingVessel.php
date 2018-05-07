<?php

defined('BASEPATH') or exit('No direct script access allowed');

class FishingVessel extends CI_Controller
{

    public function index()
    {
        $this->load->model('fishingvessel_model');
        $result = $this->fishingvessel_model->get_all();

        $data['vessels'] = $result;
        $data['title'] = "รายชื่อเรือประมงทั้งหมด";

        $this->load->view('header', $data);
        $this->load->view('fishing-vessel/index', $data);
        $this->load->view('footer');
    }

    public function all()
    {
        echo 'Show all vessels...';
    }

    public function new_vessel()
    {
        $this->load->model('country_model');
        $result = $this->country_model->get_all();

        $data['country_list'] = $result;
        $data['title'] = "เพิ่มข้อมูลเรือประมง";

        $this->load->view('header', $data);
        $this->load->view('fishing-vessel/new-ship', $data);
        $this->load->view('footer');
    }

    public function create()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('vesselName', 'ชื่อเรือ', 'required|max_length[10]', array('required' => 'ช่วยกรอกชื่อสำเภาด้วยนะออเจ้า' ));

        if ($this->form_validation->run() == false) 
        {
            $this->load->model('country_model');
            $result = $this->country_model->get_all();

            $data['country_list'] = $result;
            $data['title'] = "เพิ่มข้อมูลเรือประมง";

            $this->load->view('header', $data);
            $this->load->view('fishing-vessel/new-ship', $data);
            $this->load->view('footer');
        }
        else 
        {
            $this->load->model('fishingvessel_model');
            $this->fishingvessel_model->save_new_vessel();

            redirect('fishingvessel/');
        }
        
    }

    public function new_success()
    {

    }

    public function delete_vessel()
    {
        // var_dump($_POST);
        $this->load->model('fishingvessel_model');
        $this->fishingvessel_model->delete_vessel();

        redirect('fishingvessel/');
    }

}

/* End of file FishingVessel.php */
