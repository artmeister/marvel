<!DOCTYPE html>

<?php if (is_user_logged_in()) { ?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en" class="wpadmin-logged-in">
<?php } else { ?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<?php } ?>

<?php include('header.php'); ?>

<body>

  <header class='navbar navbar-expand-lg navbar-dark bd-navbar sticky-top'>
    <nav class='container-xxl bd-gutter flex-wrap flex-lg-nowrap'>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuHeader"
        aria-controls="menuHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <a class="navbar-brand p-0 m-0" href="/">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.svg" alt="Marvel">
      </a>

      <?php wp_nav_menu( [
        'theme_location'  => 'primary-menu',
        'container_id'    => 'menuHeader',
        'container_class' => 'collapse navbar-collapse',
        'menu_class' => 'navbar-nav flex-row flex-wrap bd-navbar-nav'
      ] ); ?>
    </nav>

    <section id='hero' class='row g-lg-5 mb-5'>
      <h1 class='hero__heading'>Marvel Power Group</h1>
      <p class='hero__text'>
        Marvel Power Group is a boutique consulting firm with a fresh, markets-based approach to value creation. We
        offer services to clients in energy, water, manufacturing and transportation sectors.
      </p>
      <button class='hero__button'>Contact Us</button>
      <small class='hero__scroll'>Scroll for more</small>
    </section>
  </header>

  <main class='bd-content order-1 py-5'>
    <div class='container-xxl bd-gutter'>

      <section id='about-us' class='row g-lg-5 mb-5'>
        <h2>About Us</h2>
        <div>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about-us.png" alt="About Us">
          <p>Our dynamic, solutions-oriented team brings decades
            of relevant transactional, analytical and regulatory experience to supporting our clients’ unique agendas.

            We are experienced practitioners who have run companies, successfully originated and closed complex deals,
            advocated and negotiated favorable policy and advanced technological innovation and climate leadership.

            We specialize in structuring balanced solutions for all affected stakeholders and uncovering economic
            opportunities in otherwise opaque environments.</p>
        </div>
      </section>

    </div>
  </main>

  <?php include('footer.php'); ?>

</body>

</html>