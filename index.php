<!DOCTYPE html>

<?php if (is_user_logged_in()) { ?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en" class="wpadmin-logged-in">
<?php } else { ?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<?php } ?>

<?php include('header.php'); ?>

  <body>

    <header>
      <div>
        <img src="/img/logo.svg" alt="Marvel">
      </div>

      <nav>
        <?php wp_nav_menu( [
          'container_class' => 'menu-header',
          'theme_location'  => 'primary'
        ] ); ?>
      </nav>
    </header>

    <main>

      <section id='hero' class=''>
        <h1>Marvel Power Group</h1>
        <p>Marvel Power Group is a boutique consulting firm with a fresh, markets-based approach to value creation. We offer services to clients in energy, water, manufacturing and transportation sectors.</p>
        
        <button>Contact Us</button>

        <small>Scroll for more</small>
      </section>

      <!-- About Us -->

    </main>

    <?php include('footer.php'); ?>

  </body>

</html>