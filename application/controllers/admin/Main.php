<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_modal');
    }

    public function index()
    {
        $this->setDefaultData();
        if($this->session->has_userdata('adminId')){ redirect(admin_url().'dashboard'); }

        $data['pageTitle']='Admin Login';
        $this->load->view('admin/common/header',$data);
        $this->load->view('admin/login');
        $this->load->view('admin/common/footer');
    }
        
    public function dashboard()
    {
        $this->setDefaultData();
        $this->checkLogin();
        $data['pageTitle']='Dashboard';
        $this->load->view('admin/common/header',$data);
        $this->load->view('admin/common/sidebar');
        $this->load->view('admin/dashboard');
    }
        
    public function checkLoginDetails()
    {
        $this->load->model('Login_modal');
        $username=$this->input->post('username');
        $pass=md5($this->input->post('pass'));
        $Result=$this->Login_modal->checkLoginDetails($username,$pass);
        if($Result->num_rows()>0)
        {
            $Array=$Result->result()[0];
            $newdata = array(
                    'adminId'=> $Array->id,
                    'name'=> $Array->name,
                    'username'=> $Array->username,
                    'gender'=> $Array->gender,
                    'email'=> $Array->email,
                    'image'=> $Array->image,
                    'dob'=> $Array->dob,
                    'userType'=> $Array->userType,
                    'loginUser'=> TRUE
            );

            $this->session->set_userdata($newdata);
            $this->session->set_flashdata('success','Congratulations you have logged in successfully!.');
            redirect(admin_url().'dashboard');
        }else{
            $this->session->set_flashdata('error','Invalid credientials, Please try again!.');
            redirect(admin_url());
        }
    }
    
    public function settings()
    {
        $data['pageTitle']='Settings';
        $data['settings']=  $this->Admin_modal->getGeneralSettingDetailsById(1);
        $this->load->view('admin/common/header',$data);
        $this->load->view('admin/common/sidebar');
        $this->load->view('admin/editGeneralSetting');
    }
    
    public function profile()
    {
        $adminid=  $this->uri->segment(3);
        $data['pageTitle']='Edit Profile';
        $data['admin']=  $this->Common_modal->getUsersDetailsById($adminid);
        $this->load->view('admin/common/header',$data);
        $this->load->view('admin/common/sidebar');
        $this->load->view('admin/addeditprofile');
    }

    public function saveProfileDetails()
    {
        $userId= $this->input->post('userId');
        $username= $this->input->post('username');
        if($this->input->post('dob'))
        {
            $dob= date('Y-m-d',strtotime($this->input->post('dob')));
        }else{
            $dob='';
        }
        $password= $this->input->post('password');
        $name= $this->input->post('name');
        $email= $this->input->post('email');
        $mobile= $this->input->post('mobile');
        $gender= $this->input->post('gender');
        $address= $this->input->post('address');
        $oldImage= $this->input->post('oldImage');
        
        $userCheck=$this->Common_modal->checkUserNameIfExists($userId,$email);
        if(!$userCheck->num_rows)
        {
            if(!empty($_FILES["batchImage"]))
            {
                $new_name = time().$_FILES["batchImage"]['name'];        
                $config['upload_path']          = 'assests/adminassests/images/users/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|PNG|JPG|JPEG|';
                $config['file_name'] = $new_name;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('batchImage'))
                {
                    $error = array('error' => $this->upload->display_errors());
                    $image=$oldImage;
                }
                else
                {
                       $image=$new_name;
                       @unlink('assests/adminassests/images/users/'.$oldImage);
                }
            }else{
               $image=$oldImage;
            }

            $data=array(
                'name'=>$name,
                'email'=>$email,
                'dob'=>$dob,
                'mobile'=>$mobile,
                'gender'=>$gender,
                'address'=>$address,
                'image'=>$image,
            );

            $whereArr=array('id'=>$userId);
            if($password)
            {
                $data2=array(
                    'password'=>md5($password),
                );

                
                $save=$this->Common_modal->updateMaster($whereArr, 'users', $data2);
                
            }

            $save=$this->Common_modal->updateMaster($whereArr, 'users', $data);
            if($save)
            {
                $Result=$this->Common_modal->getUsersDetailsById($userId);
               
                if($Result->num_rows()>0 && $userId==$this->session->userdata('adminId'))
                {
                    $Array=$Result->result()[0];
                    $newdata = array(
                            'adminId'=> $Array->id,
                            'name'=> $Array->name,
                            'username'=> $Array->username,
                            'gender'=> $Array->gender,
                            'email'=> $Array->email,
                            'image'=> $Array->image,
                            'dob'=> $Array->dob,
                            'userType'=> $Array->userType,
                            'loginUser'=> TRUE
                    );
                    $this->session->set_userdata($newdata);
                }else{
                    $Array=$Result->result()[0];
                }

                $this->session->set_flashdata('success','Congratulations '.$Array->name.' your details has been updated successfully!.');
                redirect(admin_url().'admin_profile/'.$userId);
            }else{
                $this->session->set_flashdata('error','Something went wrong, Please try again!.');
                redirect(admin_url().'admin_profile/'.$userId);
            }
        }else{
            $this->session->set_flashdata('error','Something went wrong, Please try again!.');
            redirect(admin_url().'admin_profile/'.$userId);
        }
    }

    public function saveGeneralSettingDetails()
    {
        $recordId=$this->input->post('recordId');
        $projectTitle=$this->input->post('projectTitle');
        $contactNo=$this->input->post('contactNo');
        $branchOffice=$this->input->post('branchOffice');
        $headOffice=$this->input->post('headOffice');
        $supportMail=$this->input->post('supportMail');
        $whatsappNo=$this->input->post('whatsappNo');
        
        $whereArr=array('id'=>$recordId);
        $data=array(
            'projectTitle'=>$projectTitle,
            'contactNo'=>$contactNo,
            'branchOffice'=>$branchOffice,
            'headOffice'=>$headOffice,
            'supportMail'=>$supportMail,
            'whatsappNo'=>$whatsappNo
        );
        
        $save=$this->Common_modal->updateMaster($whereArr, 'settings', $data);
        if($save)
        {
            $this->setDefaultData();
            $this->session->set_flashdata('success','Setting details has been saved successfully.');
        }else{
            $this->session->set_flashdata('success','Setting details has been saved successfully.');
        }
        
        redirect(admin_url().'settings');
    }
    
    public function checkUserNameIfExists()
    {
        $userId=$this->input->post('userId');
        $username= $this->input->post('username');
        $userCheck=$this->Common_modal->checkUserNameIfExists($userId,$username);
        if($userCheck->num_rows())
        {
            echo 's^exist^s';
        }else{
            echo 's^notexist^s';
        }
    }

    public function setDefaultData()
    {
        $settings=$this->Common_modal->getGeneralSettingDetailsById(1)[0];
        $this->session->set_userdata($settings);
    }
    
    function checkLogin()
    {
        if(!$this->session->has_userdata('adminId')){ redirect(admin_url()); }
    }

    public function logout()
    {
        session_destroy();
        redirect(admin_url());
    }
}
