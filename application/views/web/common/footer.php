
<footer class="main-footer style-two" style="background-image: url(<?=assets_url()?>images/background/4.jpg);">
  <div class="auto-container">
    <div class="widgets-section">
      <div class="row clearfix">
        <div class="footer-column col-md-3">
          <div class="footer-widget logo-widget">
            <div class="logo"> <a href="#"><img src="<?=assets_url()?>images/make9bharat.png" width="200px" alt="" /></a> </div>
            <ul class="list-style-one">
              <li><span class="icon fa fa-envelope"></span>ceo@make9bharat.com</li>
              <li><span class="icon fa fa-phone"></span>+91-8042781527</li>
            </ul>
            <ul class="social-icon-one">
              <li><a href="#"><span class="fa fa-facebook"></span></a></li>
              <li><a href="#"><span class="fa fa-twitter"></span></a></li>
              <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
              <li><a href="#"><span class="fa fa-instagram"></span></a></li>
            </ul>
          </div>
        </div>
        <div class="footer-column col-md-3">
          <div class="footer-widget hours-widget">
            <h2>Opening Hours</h2>
            <div class="widget-content">
              <ul>
                <li class="clearfix">Monday to Saturday<span>10 AM to 6 PM</span></li>
                <li class="clearfix">Sunday<span>Off</span></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="footer-column col-md-1">
          <div class="footer-widget hours-widget">
            <h2>Useful</h2>
            <div class="widget-content">
              <ul>
                <li><a href="<?=base_url()?>">Home </a></li>
                <li><a href="<?=base_url()?>aboutus">About Us</a></li>
                <li><a href="#">Legal</a></li>
                <li><a href="<?=base_url()?>contactus">Contact Us</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="footer-column col-md-3">
          <div class="footer-widget hours-widget">
            <h2>Instagram</h2>
            <div class="widget-content"> <img src="<?=assets_url()?>footer/footer_1.jpg"> <img src="<?=assets_url()?>footer/footer_2.jpg"> <img src="<?=assets_url()?>footer/footer_3.jpg"> <img src="<?=assets_url()?>footer/footer_4.jpg"> <img src="<?=assets_url()?>footer/footer_5.jpg"> <img src="<?=assets_url()?>footer/footer_6.jpg"> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="auto-container">
      <div class="row clearfix">
        <div class="column col-md-6 col-sm-12 col-xs-12">
          <div class="copyright">Copyrights &copy; <?=date('Y')?>. All Rights are Reserved by Make 9 Bharat</div>
        </div>
        <div class="social-column col-md-6 col-sm-12 col-xs-12">
          <ul class="social-icon-one">
            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
            <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
            <li><a href="#"><span class="fa fa-instagram"></span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>
<script src="<?=assets_url()?>js/jquery.js"></script>
<!--Revolution Slider-->
<script src="<?=assets_url()?>js/bootstrap.min.js"></script>
<script src="<?=assets_url()?>js/jquery.fancybox.js"></script>
<script src="<?=assets_url()?>js/mixitup.js"></script>
<script src="<?=assets_url()?>js/jquery-ui.js"></script>
<script src="<?=assets_url()?>js/owl.js"></script>
<script src="<?=assets_url()?>js/wow.js"></script>
<script src="<?=assets_url()?>js/appear.js"></script>
<script src="<?=assets_url()?>js/script.js"></script>


</div>

<!-- modal on screen -->
<link rel="stylesheet" type="text/css" href="<?=assets_url()?>fancy-box-new/jquery.fancybox.css">
<script type="text/javascript" src="<?=assets_url()?>fancy-box-new/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="<?=assets_url()?>fancy-box-new/jquery.fancybox.pack1.js"></script>
<script type="text/javascript">
		$(document).ready(function() {
		$(".fbox").fancybox({
			openEffect	: 'elastic',
			closeEffect	: 'elastic'
		});
		});
	</script>
<script type="text/javascript"> 

		var delay=1000; 
		
		setTimeout(function(){
		
		$(document).ready(function () {
			$("#First").fancybox({
				helpers: { 
				
			},
			
			'afterClose': function() { 
				$("#Second").fancybox().trigger("click");
			 }
			}).trigger('click');
		
		});
		}, delay); 
    
				
	</script>
</body>

</html>
