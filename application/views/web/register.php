<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<link href="<?=assets_url()?>login/css/font-awesome.min.css" rel="stylesheet">
<link href="<?=assets_url()?>login/css/style.css" rel='stylesheet' type='text/css' media="all">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
<style>


@media only screen and (max-width: 600px) {
  .txt-left-side {
    
    border-top-left-radius: 0% 0%;
    border-bottom-left-radius: 0% 0%;}
}

/* Small devices (portrait tablets and large phones, 600px and up) */
@media only screen and (min-width: 600px) {
  .txt-left-side {
    
    border-top-left-radius: 0% 0%;
    border-bottom-left-radius: 0% 0%;}
}

/* Medium devices (landscape tablets, 768px and up) */
@media only screen and (min-width: 768px) {
  .txt-left-side {
  border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
} }

/* Large devices (laptops/desktops, 992px and up) */
@media only screen and (min-width: 992px) {
  .txt-left-side {
  border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
}
} 

/* Extra large devices (large laptops and desktops, 1200px and up) */
@media only screen and (min-width: 1200px) {
  .txt-left-side {
  border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
}
}




    select option{
        background: #0f78ba;
    }
    select{
        border: none;
    }
    .form-left-to-jlpl span{
      color: #000000;
    }
    .form-left-to-jlpl input[type="text"] placeholder,.form-control{
     color:black !important;
   }
    .marg-b{
        margin-bottom: 35px;
    }
    .form-left-to-jlpl{
      border: 1px solid #000 !important;
    }
    .txt-left-side{
      background: #f8f9fa;
     
    }

.page-wrapper{
  background: -webkit-linear-gradient(left, #3931af, #00c6ff);
 

}
::placeholder{
  color:black !important;
}
.img-right-side{
  background: #f8f9fa;
}

.form-left-to-jlpl input[type="text"] {
  color:black;
}
.jowell_more-buttn h3 {
  
  color: #000 !important;
}

.jowell_more-buttn a {
    BACKGROUND-COLOR: #0268b3 !important;
    FONT-SIZE: 14PX !important;
    PADDING: 8px !important;
    BORDER-RADIUS: 33PX !important;
    COLOR: WHITE !important;
  
    font-weight: 500 !important;
}
.txt-left-side h2 {
    color: #121415 !important;
}
input[type=submit] {
    background: #3145ba !important;
    border-radius: 45px !important;
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
      <!-- <div class="jowell_more-buttn">
        <h3>Already a Member?  <a href="<?=base_url()?>login">Login Now </a> </h3>
      </div>  -->
    </div>
    <div class="img-right-side">

    <a href="<?=base_url()?>">
          <img src="<?=assets_url()?>images/make9bharat.png" class="img-fluid" alt="">
      </a>
      <h3> Manage Your Business Account</h3>
      <p> We are new innovative and rapidly growing company of dynamic hardcore professionals.</p>
   
      <!-- <div>
        <input id="ContentPlaceHolder1_chkterms" type="checkbox" name="ctl00$ContentPlaceHolder1$chkterms" />
        I agree with Terms & Conditions
    </div>
  
    <div class="btnn">
      <input type="submit" name="btnlogin" value=" Register Now" id="btnlogin" />
    </div> -->
  </form>
  <div class="jowell_more-buttn">
    <h3>Already a Member?  <a href="<?=base_url()?>login">Login Now </a> </h3>
  </div>
    </div>
  </div>
</div>
