<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

    public function __construct() {
        parent::__construct();
		ini_set('max_execution_time', '0'); 
        header('Content-Type: application/json');
    }

    public function checkLoginDetails()
    {
        if(!empty($this->input->post('emailLogin')) && !empty($this->input->post('passwordLogin')))
        {
            $emailLogin= $this->input->post('emailLogin');
            $passwordLogin= $this->input->post('passwordLogin');

            $userCheck=$this->Common_modal->checkCustomerLoginDetails($emailLogin,md5($passwordLogin));
            if($userCheck->num_rows())
            {
                $Array=$userCheck->result()[0];
                $returnArr['status']=1;
                $returnArr['details']=$Array;
            }else{
                $returnArr['status']=0;
            }
        }else{
            $returnArr['status']=2;
        }
        
        echo json_encode($returnArr); die();
    }

    public function registrationSave()
    {
        $refCode= $this->input->post('refCode');
        
        if(!empty($this->input->post('name')) || !empty($this->input->post('email')) || !empty($this->input->post('mobile')) || !empty($this->input->post('side')))
        {
            $side=$this->input->post('side');
            $planId=$this->inout->post('planId');
            $pass=1;
            if($refCode)
            {
                $userCheck=$this->Common_modal->checkRefCode($refCode,$side);
                $userCount=$userCheck->num_rows();
                if(!$userCount)
                {
                    $pass=0;
                    $returnArr['status']=4;
                    goto printOutPut;
                }else{
                    $Urow=$userCheck->result()[0];
                    if($userCount>1)
                    {
                        $returnArr['status']=5;
                        goto printOutPut;
                    }else{
                        if($Urow->side==$side)
                        {
                            $returnArr['status']=6;
                            goto printOutPut;
                        }
                    }
                    $pass=1;
                }
            }

            $name= $this->input->post('name');
            $email= $this->input->post('email');
            $mobile= $this->input->post('mobile');
            $password=$this->input->post('password');

            $userCheck2=$this->Common_modal->checkUserIfExist(0,$email);
            if($userCheck2->num_rows())
            {
                $returnArr['status']=3;
                goto printOutPut;
            }

            if($pass>0)
            {
                $data=array(
                    'parentId'=>$refCode,
                    'planId'=>$planId,
                    'name'=>$name,
                    'email'=>$email,
                    'mobile'=>$mobile,
                    'password'=>md5($password),
                    'status'=>0,
                    'side'=>$side
                );
               $Res=$this->Common_modal->insertMaster('customers',$data);
                if($Res)
                {
                    $LastUserName = $this->Common_modal->getLastUserName();
                    if (!$LastUserName->num_rows()) {
                        $NewUserName = 'M'.date('mY').'001';
                    }else{
                        $NewUserName = 'M'.date('mY').'00'.$Res;
                    }

                    $updateUser=array('username'=>$NewUserName,);
                    $Res=$this->Common_modal->updateMaster(array('id'=>$Res),'customers', $updateUser);
                   $html = '<!DOCTYPE html> 
                            <html lang = "en"> 
                               <head> 
                                  <meta charset = "utf-8"> 
                                  <title>' . PROJECTTITLE . ' - Mail</title> 
                               </head>
                               <body> 
                                    <div>
                                        <p><b>Dear ' . $name . '</b>,<br>You have registered with '.PROJECTTITLE.'. <br>Please find the your login details as follows:-<br></p>
                                        <p>User Name : <b>' . $NewUserName . '</b></p>
                                        <p>Password : <b>' . $password . '</b></p>

                                        <p>Name : <b>' . $name . '</b></p>
                                        <p>Email : <b>' . $email . '</b></p>
                                        <p>Mobile : <b>' . $mobile . '</b></p>
                                                <br><br><br>

                                        <p>
                                            <b>Thanks & Regards</b><br>
                                            <b>Team - ' . PROJECTTITLE . '</b>
                                        </p>
                                    </div>
                               </body>

                            </html>';

                    $subject='Registration - '.PROJECTTITLE .' - '.$NewUserName;
                    $this->sendMail(SUPPORTMAIL, $fromMail, PROJECTTITLE, $subject, $html);
                }

                if($Res)
                {
                    $returnArr['status']=1;
                    goto printOutPut;
                }else{
                    $returnArr['status']=0;
                    goto printOutPut;
                }
            }
        }else{
            $returnArr['status']=2;
            goto printOutPut;
        }
        printOutPut : echo json_encode($returnArr); die();
    }
        
    public function checkRefCode()
    {
        $username=$this->input->post('refCode');
        $userCheck=$this->Common_modal->checkRefCode($username,'');
        if($userCheck->num_rows())
        {
            $name=$userCheck->result()[0]->name;
            $returnArr['status']=1;
            $returnArr['parentname']=$name;
        }else{
            $returnArr['status']=0;
        }
        
        echo json_encode($returnArr); die();
    }
    
    public function getPlansDetails()
    {
        $whereArr=array('status'=>1);
        $userCheck=$this->Common_modal->getPlansDetails($whereArr);
        if($userCheck->num_rows())
        {
            $plans=$userCheck->result();
            $returnArr['status']=1;
            $returnArr['details']=$plans;
        }else{
            $returnArr['status']=0;
        }
        
        echo json_encode($returnArr); die();
    }
	
	public function getTreeDetailsById()
	{
	$GLOBALS['user']=array();
		$username=$this->input->post('username');
		
		$this->getChildsDetails($username);
		
		//echo '<pre>';print_r($GLOBALS['user']); die();
		
		if(!empty($GLOBALS['user']))
        {
            $returnArr['status']=1;
            $returnArr['details']=$GLOBALS['user'];
        }else{
            $returnArr['status']=0;
        }
		
        echo json_encode($returnArr); die();
	}
	
	function getChildsDetails($username)
	{
		$userCheck=$this->Common_modal->getTreeDetailsById($username);
		if($userCheck->num_rows())
        {
			foreach($userCheck->result() as $trow)
			{
				$GLOBALS['user'][$username][]=array('side'=>$trow->side,'username'=>$trow->username,'status'=>$trow->status);
				
				$this->getChildsDetails($trow->username);
			}
		}
	}
    
}
