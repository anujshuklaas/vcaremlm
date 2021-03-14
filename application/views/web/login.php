<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
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
      <h2> Login to your Account </h2>
      <p> Enter your details to login.</p>
      <form method="post" action="" id="loginform">
        <span id="lblerror"></span>
        <div class="form-left-to-jlpl"> <span class="fa fa-user" aria-hidden="true"></span>
          <input name="userid" type="text" id="userid" placeholder="Username" required="" />
          <div class="clear"></div>
        </div>
        <div class="form-left-to-jlpl "> <span class="fa fa-lock" aria-hidden="true"></span>
          <input name="passwd" type="password" id="passwd" placeholder="Password" required="" />
          <div class="clear"></div>
        </div>
        <div class="main-two-jlpl">
          <div class="right-side-forget"> <a href="javascript:void(0);" class="for">Forgot password...?</a> </div>
        </div>
        <div class="btnn">
          <input type="submit" name="btnlogin" value=" Secure Login" id="btnlogin" />
        </div>
      </form>
      <div class="jowell_more-buttn">
        <h3>Don't Have an account..? <a href="<?=base_url()?>register">Register Here </a> </h3>
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