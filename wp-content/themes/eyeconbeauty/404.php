<?php get_header(); the_post();?>
  <main>
    <h1 class="hide">404 Error</h1>
    <div class="error-container">
      <div class="error__info">
        <h2>Oops!</h2>
        <h3>It looks like the page you are looking for can't be found</h3>
        <p>Your link might be icorrect, moved or out of date</p>
      </div>
      

      <a href="<?php echo home_url( '/shop/' ); ?>" class="btn btn-main">Shop Eyecon Beauty</a>
    </div>
  </main>
<?php get_footer(); ?>