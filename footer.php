<footer id="contact">
      <div class="footer-bg">
        <?php /*?><div class="footer-top">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <div class="footer-logo">
                  <a href="#"><!-- <img src="images/logo-footer.png" class="img-fluid" alt="Brand Logo"> --><h4 style="color: #FFF;">Qualeadify</h4></a>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="footer-social">
                  <ul>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div><?php */?>
        <div class="footer-widget section-padding-40">
          <div class="container">
            <div class="row margin-balance">
              
              <div class="col-lg-6 col-sm-12">

                <div class="row">
                  
                  <div class="col-lg-6">
                    <div class="widget contact-widget">
                      <h4 class="widget-title">Contact Us</h4>

                      <div class="widget-inner">
                        <ul>
                          <li class="address">Qualeadify <span>Pune, <!-- Maharashtra, --> India.</span></li>
                          <li class="email"><a href="mailto:info@qualeadify.com">info@qualeadify.com</a></li>
                          <!-- <li class="phone">+0 (12) 345 678 90</li> -->
                        </ul>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="widget widget_nav_menu">
                      <h4 class="widget-title">Information</h4>
                      <div class="widget-inner">
                        <ul>
                          <!-- <li><a href="#">About Our Team</a></li> -->
                          <!-- <li><a href="#">Contact Us</a></li> -->
                          <!-- <li><a href="#">FAQs</a></li> -->
                          <li><a href="privacy-policy.php">Privacy Policy</a></li>
                          <li><a href="terms-and-conditions.php">Term &amp; Conditions </a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  
                </div>
                

                <div class="row">
                  
                  <div class="col-lg-6">
                    <div class="footer-logo">
                      <a href="#">
                        <img src="images/qualeadify-logo.png" class="img-fluid" alt="Qualeadify">
                      </a>
                    </div>

                  </div>
                  
                  <div class="col-lg-6">
                    <div class="footer-social">
                      <ul>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                      </ul>
                    </div>
                  </div>

                </div>


              </div>

              <div class="col-lg-6 col-sm-12">
                <div class="widget subscribe-widget widget_mc4wp_form_widget">
                  <h4 class="widget-title">Enquire Now</h4>
                  <div class="widget-inner">
                    <form class="text-right" name="contact_form" id="contact_form" action="post-contact.php" method="post" enctype="multipart/form-data" onsubmit="return validate();"> <!-- subscribtion-form -->
                      <input type="hidden" name="form_loc" value="footer">
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="form-group">
                            <input type="text" class="form-control" name="f_name" id="f_name" placeholder="First Name">
                          </div>
                        </div>

                        <div class="col-lg-6">
                          <div class="form-group">
                            <input type="text" class="form-control" name="l_name" id="l_name" placeholder="Last Name">
                          </div>
                        </div>
                      </div>
                      
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email address">
                          </div>
                        </div>

                        <div class="col-lg-6">
                          <div class="form-group">
                            <input type="text" class="form-control" name="contact_no" id="contact_no" placeholder="Contact Number">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-lg-12">
                          <div class="form-group max-width">
                            <textarea class="form-control w-100" name="message" id="message" placeholder="Your Message"></textarea>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-lg-6">
                          <div class="form-group max-width">
                            <p class="newsletter-error" id="newsletter-error"></p>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group max-width">
                            <button type="submit" class="button primary-bg pull-right">Send Enquiry <i class="fab fa-telegram-plane"></i></button>
                          </div>
                        </div>
                      </div>
                      
                      
                      <p class="newsletter-success">Thank you for subscribing!</p>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyright-footer">
        <div class="container">
          <div class="row">
            <div class="col">
              <p class="copyright-text">Copyright <a href="#">Qualeadify</a> <?php echo date('Y');?>, All rights reserved.</p>
            </div>
          </div>
        </div>
      </div> 
      <!-- Back to Top -->
      <div class="backtotop">
        <span class="ti-angle-up"></span>
      </div>
      <!-- Back to Top End -->
    </footer>