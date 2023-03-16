<footer>
    <div class="footer-group">
      <div class="footer-info">
        <div class="footer-newsletter">
          <h3 class="newsletter-title">
            Start being eyeconic
          </h3>
          <p>
            Subscribe to our newsletter and be the first one to know product launches  and exclusive offers!
          </p>
          <div class="newsletter-input">
            <input type="email" name="newsletter-email" id="newsletter-email" placeholder='Enter your email*' />
          </div>
          <p class='newsletter-disclaimer'>
            * By signing to our newsletter you are agreeing to receive varying number of marketing emails, and by extend you are agreeing to our <a href="#terms-and-conditions">Terms & Conditions</a>  and <a href="#terms-and-conditions">Privacy Policy</a> .
          </p>
        </div>
        <div class="footer-socialmedia">
          <svg width="23" height="16" viewBox="0 0 23 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_111_4882)">
              <path id="eye-outline" d="M1.60739 8.02564C4.53216 3.89577 8.12219 1.96875 11.4834 1.96875C15.4919 1.96875 19.1383 4.57867 21.3976 8.00156C19.1483 11.4584 15.5309 14.0312 11.4834 14.0312C7.39251 14.0312 3.85317 11.4739 1.60739 8.02564Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M11.5 11C13.1569 11 14.5 9.65685 14.5 8C14.5 6.34315 13.1569 5 11.5 5C9.84315 5 8.5 6.34315 8.5 8C8.5 9.65685 9.84315 11 11.5 11Z" id="eye-circle" />
            </g>
            <defs>
              <clipPath id="clip0_111_4882">
                <rect width="23" height="16" fill="white" />
              </clipPath>
            </defs>
          </svg>
          <h3 class="socialmedia-title">
            Follow eyecon beauty everywhere
          </h3>
          <div class="socialmedia-links">
            <?php
              wp_nav_menu ( array
              (
                'theme_location' => 'socialmedia-menu',
                'container' => false
              ));
            ?>
          </div>
        </div>
      </div>
      <div class="footer-nav">
        <div class="footer-col">
          <ul class="nav-group">
            <li class="nav-item">
              <a href="<?php echo home_url ( '/shop/' ); ?>">Shop</a>
              <?php
                wp_nav_menu ( array
                (
                  'theme_location' => 'shop-menu',
                  'container' => false
                ));
              ?>
            </li>
            <!-- <li class="nav-item">
              Singular Shadows
            </li>
            <li class="nav-item">
              Eyeshadow palettes
            </li> -->
          </ul>

          <ul class="nav-group">
            <li class="nav-item">
              Help
              <?php
                wp_nav_menu ( array
                (
                  'theme_location' => 'help-menu',
                  'container' => false
                ));
              ?>
            </li>
            <!-- <li class="nav-item">Contact Us</li>
            <li class="nav-item">F.A.Q</li> -->
          </ul>
        </div>

        <div class="footer-col">

          <ul class="nav-group">
            <li class="nav-item">
              Company
              <?php
                wp_nav_menu ( array
                (
                  'theme_location' => 'company-menu',
                  'container' => false
                ));
              ?>
            </li>
            <!-- <li class="nav-item">About us</li>
            <li class="nav-item">Sustainability</li> -->
          </ul>

          <ul class="nav-group">
            <li class="nav-item">
              Legal
              <?php
                wp_nav_menu ( array
                (
                  'theme_location' => 'legal-menu',
                  'container' => false
                ));
              ?>
            </li>
            <!-- <li class="nav-item">Terms & Conditions</li>
            <li class="nav-item">Privacy Policy</li>
            <li class="nav-item">Cookies Policy</li>
            <li class="nav-item">Return Policy</li> -->
          </ul>
        </div>
      </div>

    </div>
    <div class="footer-copyright">
      © 2023 Eyecon Beauty. All rights reserved
    </div>
  </footer>
  <?php wp_footer(); ?>
</body>

</html>