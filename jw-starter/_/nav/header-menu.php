<nav class="navbar mainnav" role="navigation">
  <div class="container">
   <div class="thenav">
  
 
  <!-- Collect the nav links for toggling -->
  <?php // Loading WordPress Custom Menu
     wp_nav_menu( array(
        'container_class' => 'collapse navbar-collapse navbar-collapse',
        'menu_class'      => 'nav navbar-nav',
        'menu_id'         => 'header-menu',
        //'walker'          => new Cwd_wp_bootstrapwp_Walker_Nav_Menu()
		'walker' => new wp_bootstrap_navwalker()
    ) );
  ?>
  
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
  </div>
  
  </div>
</nav>