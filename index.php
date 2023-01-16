<!DOCTYPE html>

<?php if (is_user_logged_in()) { ?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en" class="wpadmin-logged-in">
<?php } else { ?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<?php } ?>

<?php include('header.php'); ?>

<body>

  <header class='navbar navbar-expand-lg fixed-top'>
    <nav class='container-xxl flex-wrap flex-lg-nowrap'>
      <a class="navbar-brand p-0 m-0" href="/">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.svg" alt="Marvel">
      </a>

      <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#menuHeader"
        aria-controls="menuHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span> </span>
        <span> </span>
      </button>

      <?php wp_nav_menu( [
        'theme_location'  => 'primary-menu',
        'container_id'    => 'menuHeader',
        'container_class' => 'collapse navbar-collapse justify-content-end',
        'menu_class' => 'navbar-nav flex-row flex-wrap'
      ] ); ?>
    </nav>
  </header>

  <main class='bd-content order-1 py-5'>
    <div class='container-fluid'>

      <section id='hero' class='row g-lg-5 mb-5'>
        <h1 class='hero__heading'>Marvel Power Group</h1>
        <p class='hero__text'>
          Marvel Power Group is a boutique consulting firm with a fresh, markets-based approach to value creation. We
          offer services to clients in energy, water, manufacturing and transportation sectors.
        </p>
        <button class='hero__button'>Contact Us</button>
        <small class='hero__scroll'>Scroll for more</small>
      </section>

      <section id='about-us' class='row g-lg-5 mb-5'>
        <h2>About Us</h2>
        <div>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about-us.png" alt="">
          <p>Our dynamic, solutions-oriented team brings decades of relevant transactional, analytical and regulatory
            experience to supporting our clients’ unique agendas. We are experienced practitioners who have run
            companies, successfully originated and closed complex deals, advocated and negotiated favorable policy and
            advanced technological innovation and climate leadership. We specialize in structuring balanced solutions
            for all affected stakeholders and uncovering economic opportunities in otherwise opaque environments.</p>
        </div>
      </section>

    </div>
  </main>

  <?php include('footer.php'); ?>

</body>

</html>