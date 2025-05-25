<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="stylesheet" href="custom-style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
  <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'fols-security-theme' ); ?></a>

  <header id="masthead" class="site-header">
    <div class="header-container">

      <!-- Logo Area -->
      <div class="site-logo">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shield-icon.png" alt="Shield Icon" class="logo-icon" />
          <span class="logo-text">FOLS Security Group</span>
        </a>
      </div>

      <!-- Navigation Menu -->
      <nav class="main-menu">
		<ul class="nav-links">
			<li><a href="">Accueil</a></li>
			<li><a href="">Services</a></li>
			<li><a href="">À Propos</a></li>
			<li><a href="">Contact</a></li>
		</ul>
      </nav>

      <!-- Language Switch -->
      <div class="language-switch">
        <button class="lang-btn active">FR</button>
        <button class="lang-btn">EN</button>
      </div>

    </div>
  </header>
