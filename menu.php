<!-- #menu -->
<header id="menu">
  <div class="btn-menu"><img src="<?php bloginfo("template_url"); ?>/assets/img/i-menulogo.svg" alt=""></div>
  <div class="menu">
    <nav class="top">
      <?php wp_nav_menu( array( 'menu' => 'header-menu-top', 'menu_class' => '' ) ); ?>
    </nav>
    <nav class="bottom">
      <?php wp_nav_menu( array( 'menu' => 'header-menu-bot', 'menu_class' => '' ) ); ?>
    </nav>
  </div>
</header>