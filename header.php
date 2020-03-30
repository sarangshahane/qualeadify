<?php 
  
    if( isset( $pageTitle ) && 'Privacy Policy' == $pageTitle || 'Terms and Conditions' == $pageTitle ){
      $menu_link = WEBSITE_URL;
    }
    else{
      $menu_link = 'javascript:void(0);';
    }
?>
<header class="navbar-abs nav-style-3">
    <nav class="navbar navbar-expand-lg absolute-nav">
      <div class="container">
        <a class="navbar-brand" href="<?=WEBSITE_URL?>">
          <img src="images/qualeadify-logo.png" class="img-fluid" alt="">
          <!-- <h4 style="color: #fff;">Qualeadify</h4> -->
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="ti-menu"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="menu-item active">
              <a title="Home" href="<?=WEBSITE_URL?>">Home</a>
            </li>
            <li class="menu-item active">
              <a title="Lead Gen" href="<?php print $menu_link; ?>" scrool-to="lead_gen">Lead Gen</a>
            </li>
            <li class="menu-item active">
              <a title="Customer Success" href="<?php print $menu_link; ?>" scrool-to="customer_success">Customer Success</a>
            </li>
            <li class="menu-item active">
              <a title="Account Intelligence" href="<?php print $menu_link; ?>" scrool-to="account_intelligence">Account Intelligence</a>
            </li>
            <li class="menu-item active">
              <a title="Why Choose US" href="<?php print $menu_link; ?>" scrool-to="why-choose-us">Why Choose Us</a>
            </li>
            <li class="menu-item active">
              <a title="Contact" href="<?php print $menu_link; ?>" scrool-to="contact">Contact</a>
            </li>
            <li class="menu-item nav-button">
              <a class="nav-link" href="<?php print $menu_link; ?>" scrool-to="contact">Want Leads?</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>