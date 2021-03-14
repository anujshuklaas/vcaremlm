<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Website extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            $this->setDefaultData();
        }

						public function index()
						{   
								$this->load->view('web/common/header');
								$this->load->view('web/home');
								$this->load->view('web/common/footer');
						}
							
        public function aboutus()
        {
            $this->load->view('web/common/header');
            $this->load->view('web/about');
            $this->load->view('web/common/footer');
        }
        
        public function contactus()
        {
            $this->load->view('web/common/header');
            $this->load->view('web/contact');
            $this->load->view('web/common/footer');
        }
        
        public function register()
        {
            $this->load->view('web/common/header');
            $this->load->view('web/register');
            $this->load->view('web/common/footer');
        }
        
        public function login()
        {
            $this->load->view('web/common/header');
            $this->load->view('web/login');
            $this->load->view('web/common/footer');
        }
        
        public function setDefaultData()
        {
            $settings=$this->Common_modal->getGeneralSettingDetailsById(1)[0];
            $this->session->set_userdata($settings);
        }
}
