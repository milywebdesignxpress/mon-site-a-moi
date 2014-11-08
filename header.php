<!DOCTYPE html>
<html>
<head>
  <title><?php wp_title('|', true, 'right') ;?></title>
   <meta charset="<?php bloginfo( 'charset' ); ?>"> <!--instead of UTF-8-->
  <!--copier link viewport-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <!--copier link bootsrap-->
  <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
      <!-- Optional theme -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <link href='http://fonts.googleapis.com/css?family=Comfortaa:700&subset=cyrillic,cyrillic-ext,latin-ext,greek' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Henny+Penny' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Cherry+Swash' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Changa+One' rel='stylesheet' type='text/css'>
    <!--link rel="stylesheet" type="text/css" href="style.css"-->
    <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" /> <!--instead of style.css-->
    <?php wp_head();?> <!--A METTRE IMPERAtIVEMENT-->
</head>

<body>
  <div id="home">
    <div class="container-fluid">
          <div class="row">
          <div class="col-md-12">
          <header id="header">
            <div class="box-h">
            <h1><a href="<?php echo home_url(); ?>">LA <span>G</span>UERRE DES <span>P</span>LUMES N'AURA PAS <span>L</span>IEU</a></h1>            
            <h2><span>GPL</span> - Les Sens des Arts</h2>
            </div>
                          <nav class="navbar navbar-default" role="navigation">
                                <div class="container-fluid">
                                  <!-- Brand and toggle get grouped for better mobile display -->
                                  <div class="navbar-header">
                                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                          <span class="sr-only">Toggle navigation</span>
                                          <span class="icon-bar"></span>
                                          <span class="icon-bar"></span>
                                          <span class="icon-bar"></span>
                                      </button>
                                      <a class="navbar-brand visible-xs" href="#">Accueil</a>
                                    </div>
                                    <?php
                                        wp_nav_menu( array(
                                        'menu' => 'secondary-nav',
                                        'theme_location' => 'secondary-nav',
                                        'depth' => 2,
                                        'container' => 'div',
                                        'container_class' => 'collapse navbar-collapse row',
                                        'container_id' => 'bs-example-navbar-collapse-1',
                                        'menu_class' => 'nav navbar-nav',
                                        'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                                        'walker' => new wp_bootstrap_navwalker())
                                      );
                                    ?>  
                                    <!-- Collect the nav links, forms, and other content for toggling -->

                                    <!--<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                      <ul class="nav navbar-nav">
                                          <li><a href="#" id="lienart1">Artiste du mois</a></li>
                                          <li><a href="#" id="lienart2">Arts Audiovisuels</a></li>
                                          <li><a href="#" id="lienart3">Arts de l'Ecrit</a></li>
                                          <li><a href="#" id="lienart4">Arts Plastiques</a></li>
                                          <li><a href="#" id="lienart5">Arts de la Scène</a></li>
                                          <li><a href="#" id="lienart6">Arts de l'Artisanat</a></li>
                                          <li><a href="#" id="lienagenda">Agenda</a></li>
                                      </ul>
                                      <form class="navbar-form navbar-right" role="search">
                                        <div class="form-group">
                                          <input type="text" class="form-control" placeholder="Search">
                                        </div>
                                        <button type="submit" class="btn btn-default">Let's go !!</button>
                                      </form>
                                    </div> /.navbar-collapse -->
                                </div><!-- /.container-fluid -->
                            </nav> <!--navbar-->
                    </header>