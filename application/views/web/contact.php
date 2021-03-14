<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<style>
@media only screen and (max-width: 600px) {
 
}

/* Small devices (portrait tablets and large phones, 600px and up) */
@media only screen and (min-width: 600px) {
 
}

/* Medium devices (landscape tablets, 768px and up) */
@media only screen and (min-width: 768px) {
    .contact-info-section{    margin-top: 40px;}
} 

/* Large devices (laptops/desktops, 992px and up) */
@media only screen and (min-width: 992px) {
    .contact-info-section{    margin-top: 40px;}
} 

/* Extra large devices (large laptops and desktops, 1200px and up) */
@media only screen and (min-width: 1200px) {
    .contact-info-section{    margin-top: 40px;}
}
</style>

<div class="page-title" style="background-image:url(<?=assets_url()?>images/background/11.jpg)">
    	<div class="auto-container">
        	<h1>Contact us</h1>
            <ul class="page-breadcrumb">
            	<li><a href="<?=base_url()?>">Home</a></li>
                <li>Contact us</li>
            </ul>
        </div>
    </div>
    <section class="contact-info-section">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <div class="column col-md-4 col-sm-6 col-xs-12">
                	<ul>
                    	<li>
                            <span class="icon flaticon-placeholder"></span>
                            <strong>Make 9 Bharat </strong> <br> Plat No 3 Bhilgaon Niyar Yashodhara Lawn Naka No 2 Kamptee Road Nagpur Maharashtra 440026
                        </li>
                    </ul>
                </div>
                
                <div class="column col-md-4 col-sm-6 col-xs-12">
                	<ul>
                    	<li>
                            <span class="icon flaticon-technology-2"></span>
                            +91-8459919922 <br> ceo@make9bharat.com
                        </li>
                    </ul>
                </div>
                
                <div class="column col-md-4 col-sm-6 col-xs-12">
                	<ul>
                    	<li>
                            <span class="icon flaticon-clock-2"></span>
                            10:00am to 6:00pm <br> Sunday Closed
                        </li>
                    </ul>
                </div>
                
            </div>
        </div>
    </section>
    <section class="default-form-section">
    	<div class="auto-container">
        	<div class="title-box">
            	<div class="title">Write a Message</div>
                <h2>Have Any Questions?</h2>
                <div class="text">Thank you very much for your interest in our company and our services and if you have any questions, please write us a message now!</div>
            </div>
            
            <!--Default Form-->
            <div class="default-form style-two contact-form">
                <form>
                    <div class="row clearfix">
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="firstname" value="" placeholder="Your name" required>
                        </div>
                        
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <input type="email" name="email" value="" placeholder="Your Email" required>
                        </div>
                        
                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            <textarea name="message" placeholder="Your Massage"></textarea>
                        </div>
                        
                        <div class="form-group text-center col-md-12 col-sm-12 col-xs-12">
                            <button type="submit" class="theme-btn message-btn">Send Massage</button>
                        </div>                                        
                    </div>
                </form>
            </div>

            
        </div>
    </section>
    <section class="contact-map-section">
        <div class="google-map" id="contact-google-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d14880.421153678875!2d79.11550423497417!3d21.18797597459614!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sPlat%20No%203%20Bhilgaon%20Niyar%20Yashodhara%20Lawn%20Naka%20No%202%20Kamptee%20Road%20Nagpur%20Maharashtra%20440026!5e0!3m2!1sen!2sin!4v1610111899030!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    </section>