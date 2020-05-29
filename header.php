<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/0980e14444.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri()?>" />
  <?php wp_head() ?>
  <script>
    function openSidebar() {
      const sidebar = document.getElementById("sidebar")
      sidebar.classList.remove("closed")
    }

    function closeSidebar() {
      const sidebar = document.getElementById("sidebar")
      sidebar.classList.add("closed")
    }
  </script>
</head>

<body>
  <header id="mobile-header">
    <?php echo the_custom_logo(); ?>
    <button onClick="openSidebar();">
      <i class="far fa-bell"></i>
    </button>
  </header>

  <div id="sidebar" class="closed">
    <div id="close-sidebar">
    <button onClick="closeSidebar();">
      <i class="fas fa-times"></i>
    </button>
    </div>

    <div id="sidebar-content">
      <div id="logo">
        <?php echo the_custom_logo(); ?>
      </div>

      <div id="leads">
        <h2>Em breve!</h2>
        <p>
          Nosso projeto ainda está em desenvolvimento.<br />Seja o primeiro a
          ser informado quando a plataforma for lançada!
        </p>
        <div class="email-form-widget-area">
          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("E-mail sign-up form") ) : ?>
          <?php endif;?>
        </div>
      </div>
    </div>
    <footer>
      <div id="social-networks">
        <ul>
          <li>
            <a target="_blank" href="https://facebook.com/ancaphub"><i class="fab fa-facebook-f"></i></a>
          </li>
          <li>
            <a target="_blank" href="https://instagram.com/ancaphub"><i class="fab fa-instagram"></i></a>
          </li>
          <li>
            <a target="_blank" href="https://twitter.com/ancaphub"><i class="fab fa-twitter"></i></a>
          </li>
          <li>
            <a target="_blank" href="https://youtube.com/ancaphub"><i class="fab fa-youtube"></i></a>
          </li>
          <li>
            <a target="_blank" href="https://github.com/ancaphub"><i class="fab fa-github"></i></a>
          </li>
        </ul>
        <span>contato@ancaphub.com</span>
      </div>
      <span class="copyright">&copy; Propriedade intelectual não existe, pode copiar.</span>
    </footer>
  </div>
  <div id="sidebar-wrapper"></div>