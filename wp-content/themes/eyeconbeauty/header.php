<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="utf-8">
  <meta name="viewport"
        content="width=device-width, initial-scale=1">
  <meta name="theme-color"
        content="#FEFEFE">

  <?php the_field( 'site_head_scripts_styles', 'option' ) ?>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class='topbar'>
    <a href="<?php echo home_url(); ?>"
       class="logo">
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
      Eyecon Beauty
    </a>

    <nav class="navigation">
      <?php        
        wp_nav_menu ( array (
          'theme_location' => 'header-menu',
          'menu_class' => 'menu menu-list',
          'container' => false
        ));  
      ?>

      <ul class="nav-list-actions">
        <li class="nav-item-action nav-account">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none"viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
          </svg> 
          Account
        </li>
        <li class="nav-item-action nav-locale">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
					<path stroke-linecap="round" stroke-linejoin="round" d="M3 3v1.5M3 21v-6m0 0l2.77-.693a9 9 0 016.208.682l.108.054a9 9 0 006.086.71l3.114-.732a48.524 48.524 0 01-.005-10.499l-3.11.732a9 9 0 01-6.085-.711l-.108-.054a9 9 0 00-6.208-.682L3 4.5M3 15V4.5" />
				</svg>
				Locale
        </li>
      </ul>
    </nav>

    <div class="nav-actions">
      <a href="<?php echo home_url( '/bag/ '); ?>" class="nav-action nav-bag">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
				</svg>
        <span class="nav-bag__number" > 2</span>
      </a>
      <button class="nav-action nav-toggle" id="js-nav-toggle">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="burguer-menu-icon">
					<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
				</svg>

				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="close-menu-icon">
					<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
				</svg>
      </button>
      <button class="nav-action nav-account">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
				</svg>
				Account
      </button>
      <a href="account" class="nav-action nav-locale">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
					<path stroke-linecap="round" stroke-linejoin="round" d="M3 3v1.5M3 21v-6m0 0l2.77-.693a9 9 0 016.208.682l.108.054a9 9 0 006.086.71l3.114-.732a48.524 48.524 0 01-.005-10.499l-3.11.732a9 9 0 01-6.085-.711l-.108-.054a9 9 0 00-6.208-.682L3 4.5M3 15V4.5" />
				</svg>
      </a>
    </div>
  </header>
  <div class="overlay hide" ></div>