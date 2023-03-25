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
  <header class='topbar topbar-checkout'>
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

    <a href="<?php echo home_url( '/bag/' ); ?>" class="return-bag">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
      </svg>

      
      Return to bag
    </a>
    
  </header>