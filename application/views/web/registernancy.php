<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<style>
.register{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
    margin-top: 3%;
    padding: 3%;<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<link href="<?=assets_url()?>login/css/font-awesome.min.css" rel="stylesheet">
<link href="<?=assets_url()?>login/css/style.css" rel='stylesheet' type='text/css' media="all">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
<style>
    select option{
        background: #0f78ba;
    }
    select{
        border: none;
    }
    
    .marg-b{
        margin-bottom: 35px;
    }
</style>
<div class="jowell-two-grids marg-b">
  <div class="mid-class">
    <div class="txt-left-side">
      <h2> Register to your Account </h2>
      <p> Enter your details to login.</p>
      <form method="post" action="" id="loginform">
        <span id="lblerror"></span>
        <div class="form-left-to-jlpl"> <span class="fa fa-user" aria-hidden="true"></span>
            <input name="userid" type="text" id="userid" placeholder="Referral" required="" />
            <div class="clear"></div>
          </div>

          <div class="form-left-to-jlpl"> <span class="fa fa-user" aria-hidden="true"></span>
            <select name="ctl00$ContentPlaceHolder1$rbleg" id="ContentPlaceHolder1_rbleg" style="width: 100%; background: inherit; color: #fff;" class="form-control">
                <option selected="selected" value="1">Left</option>
                <option value="2">Right</option>

            </select>
          </div>


        <div class="form-left-to-jlpl"> <span class="fa fa-user" aria-hidden="true"></span>
          <input name="userid" type="text" id="userid" placeholder="Username" required="" />
          <div class="clear"></div>
        </div>

        <div class="form-left-to-jlpl"> <span class="fa fa-user" aria-hidden="true"></span>
            <input name="userid" type="text" id="userid" placeholder="Mobile No." required="" />
            <div class="clear"></div>
          </div>

          <div class="form-left-to-jlpl"> <span class="fa fa-user" aria-hidden="true"></span>
            <input name="userid" type="text" id="userid" placeholder="Email Id" required="" />
            <div class="clear"></div>
          </div>

          <div class="form-left-to-jlpl"> <span class="fa fa-user" aria-hidden="true"></span>
            <select name="ctl00$ContentPlaceHolder1$CmbState" id="ContentPlaceHolder1_CmbState" style="width: 100%; background: inherit; color: #fff;" class="form-control" placeholder="State">
                <option value="0">---Select---</option>
                <option value="35">Andaman &amp; Nicobar Islands #</option>
                <option value="28">Andhra Pradesh</option>
                <option value="12">Arunachal Pradesh</option>
                <option value="18">Assam</option>
                <option value="10">Bihar</option>
                <option value="4">Chandigarh #</option>
                <option value="22">Chhattisgarh</option>
                <option value="26">Dadra &amp; Nagar Haveli #</option>
                <option value="25">Daman &amp; Diu #</option>
                <option value="43">DELHI </option>
                <option value="30">Goa</option>
                <option value="24">Gujarat</option>
                <option value="6">Haryana</option>
                <option value="2">Himachal&#160;Pradesh</option>
                <option value="1">Jammu &amp; Kashmir</option>
                <option value="20">Jharkhand</option>
                <option value="29">Karnataka</option>
                <option value="32">Kerala</option>
                <option value="31">Lakshadweep #</option>
                <option value="23">Madhya Pradesh</option>
                <option value="27">Maharashtra</option>
                <option value="14">Manipur</option>
                <option value="17">Meghalaya</option>
                <option value="15">Mizoram</option>
                <option value="13">Nagaland</option>
                <option value="7">NCR of Delhi #</option>
                <option value="21">Orissa</option>
                <option value="34">Puducherry #</option>
                <option value="3">Punjab</option>
                <option value="8">Rajasthan</option>
                <option value="11">Sikkim</option>
                <option value="33">Tamil Nadu</option>
                <option value="42">TELANGANA</option>
                <option value="16">Tripura</option>
                <option value="9">Uttar Pradesh</option>
                <option value="5">Uttarakhand</option>
                <option value="19">West Bengal</option>
            
            </select>
          </div>




        <div class="form-left-to-jlpl "> <span class="fa fa-lock" aria-hidden="true"></span>
          <input name="passwd" type="password" id="passwd" placeholder="Password" required="" />
          <div class="clear"></div>
        </div>

        <div>
            <input id="ContentPlaceHolder1_chkterms" type="checkbox" name="ctl00$ContentPlaceHolder1$chkterms" />
            I agree with Terms & Conditions
        </div>
      
        <div class="btnn">
          <input type="submit" name="btnlogin" value=" Register Now" id="btnlogin" />
        </div>
      </form>
      <div class="jowell_more-buttn">
        <h3>Already a Member?  <a href="<?=base_url()?>login">Login Now </a> </h3>
      </div>
    </div>
    <div class="img-right-side">
      <h3> Manage Your Business Account</h3>
      <p> We are new innovative and rapidly growing company of dynamic hardcore professionals.</p>
      <a href="<?=base_url()?>">
          <img src="<?=assets_url()?>images/make9bharat.png" class="img-fluid" alt="">
      </a>
    </div>
  </div>
</div>

}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 4%;
}
.register-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}
.register-right{
    background: #f8f9fa;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
}
.register-left img{
    margin-top: 15%;
    margin-bottom: 5%;
    width: 25%;
    -webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.register .register-form{
    padding: 10%;
    margin-top: 10%;
}
.btnRegister{
    float: right;
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #0062cc;
    color: #fff;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
}
.register .nav-tabs{
    margin-top: 3%;
    border: none;
    background: #0062cc;
    border-radius: 1.5rem;
    width: 28%;
    float: right;
}
.register .nav-tabs .nav-link{
    padding: 2%;
    height: 34px;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover{
    border: none;
}
.register .nav-tabs .nav-link.active{
    width: 100px;
    color: #0062cc;
    border: 2px solid #0062cc;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.register-heading{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #495057;
}
</style>
<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>You are 30 seconds away from earning your own money!</p>
                        <input type="submit" name="" value="Login"/><br/>
                    </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Employee</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Hirer</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Apply as a Employee</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="First Name *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control"  placeholder="Confirm Password *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="male" checked>
                                                    <span> Male </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="female">
                                                    <span>Female </span> 
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your Email *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="Your Phone *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option class="hidden"  selected disabled>Please select your Sequrity Question</option>
                                                <option>What is your Birthdate?</option>
                                                <option>What is Your old Phone Number</option>
                                                <option>What is your Pet Name?</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Enter Your Answer *" value="" />
                                        </div>
                                        <input type="submit" class="btnRegister"  value="Register"/>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h3  class="register-heading">Apply as a Hirer</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="First Name *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" maxlength="10" minlength="10" class="form-control" placeholder="Phone *" value="" />
                                        </div>


                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Confirm Password *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option class="hidden"  selected disabled>Please select your Sequrity Question</option>
                                                <option>What is your Birthdate?</option>
                                                <option>What is Your old Phone Number</option>
                                                <option>What is your Pet Name?</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="`Answer *" value="" />
                                        </div>
                                        <input type="submit" class="btnRegister"  value="Register"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>