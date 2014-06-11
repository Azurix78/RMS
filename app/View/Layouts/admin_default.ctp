<!doctype html>
<html class="no-js">
  <head>
    <meta charset="UTF-8">
    <title><?php echo $this->fetch('title'); ?></title>

    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <!--<link rel="stylesheet" href="/lib/bootstrap/css/bootstrap.min.css">

    <!-- Font Awesome --><!--
    <link rel="stylesheet" href="/lib/font-awesome/css/font-awesome.min.css">

    <!-- Metis core stylesheet --><!--
    <link rel="stylesheet" href="/css/main.min.css">

    <!-- Metis Theme stylesheet -->
    <!--<link rel="stylesheet" href="/css/theme.css">
    <link rel="stylesheet" href="/lib/fullcalendar/fullcalendar.css">-->
    <?php
      echo $this->Html->css('/lib/bootstrap/css/bootstrap.min');
      echo $this->Html->css('/lib/font-awesome/css/font-awesome.min');
      echo $this->Html->css('main.min');
      echo $this->Html->css('theme');
      echo $this->Html->css('/lib/fullcalendar/fullcalendar');

      echo $this->Html->script('/lib/modernizr/modernizr.min');
      echo $this->Html->script('custom');

      /* CKEditor */
      echo $this->Html->script('/lib/ckeditor/ckeditor.js');
    ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>
      <script src="/lib/html5shiv/html5shiv.js"></script>
        <script src="/lib/respond/respond.min.js"></script>
        <![endif]-->

    <!--Modernizr 2.7.2-->
    <!--<script src="/lib/modernizr/modernizr.min.js"></script>-->
  </head>
  <body>
    <div id="wrap">
      <div id="top">

        <!-- .navbar -->
        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container-fluid">

            <!-- Brand and toggle get grouped for better mobile display -->
            <header class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a href="/admin/admin" class="navbar-brand">
                <span><i class="fa fa-dashboard"></i> Administration</span>
              </a> 
            </header>
            <div class="topnav"><!--
              <div class="btn-group">
                <a data-placement="bottom" data-original-title="Fullscreen" data-toggle="tooltip" class="btn btn-default btn-sm" id="toggleFullScreen">
                  <i class="glyphicon glyphicon-fullscreen"></i>
                </a> 
              </div>
              <div class="btn-group">
                <a data-placement="bottom" data-original-title="E-mail" data-toggle="tooltip" class="btn btn-default btn-sm">
                  <i class="fa fa-envelope"></i>
                  <span class="label label-warning">5</span> 
                </a> 
                <a data-placement="bottom" data-original-title="Messages" href="#" data-toggle="tooltip" class="btn btn-default btn-sm">
                  <i class="fa fa-comments"></i>
                  <span class="label label-danger">4</span> 
                </a> 
                <a data-toggle="modal" data-original-title="Help" data-placement="bottom" class="btn btn-default btn-sm" href="#helpModal">
                  <i class="fa fa-question"></i>
                </a> 
              </div>-->
              <div class="btn-group">
                <?php echo $this->Html->link("<i class=\"fa fa-power-off\"></i>", array('controller'=>'users','action'=>'logout', 'admin' => true), array('class' => 'btn btn-metis-3 btn-sw', 'escape'=>false)); ?>
              </div><!--
              <div class="btn-group">
                <a data-placement="bottom" data-original-title="Show / Hide Left" data-toggle="tooltip" class="btn btn-primary btn-sm toggle-left" id="menu-toggle">
                  <i class="fa fa-bars"></i>
                </a> 
                <a data-placement="bottom" data-original-title="Show / Hide Right" data-toggle="tooltip" class="btn btn-default btn-sm toggle-right"> <span class="glyphicon glyphicon-comment"></span>  </a> 
              </div>-->
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">

              <!-- .nav -->
              <ul class="nav navbar-nav">
                <!--<li class="active"><a href="dashboard.html">Dashboard</a></li>-->
              </ul><!-- /.nav -->
            </div>
          </div><!-- /.container-fluid -->
        </nav><!-- /.navbar -->
       <!--  <header class="head">
          <div class="main-bar">
            <h3>
              <i class="fa fa-dashboard"></i> Administration</h3>
          </div> /.main-bar 
        </header> --><!-- /.head -->
      </div><!-- /#top -->
      <div id="left">
        <div class="media user-media">
          <div class="user-media-toggleHover">
            <span class="fa fa-user"></span> 
          </div>
          <div class="user-wrapper">
            <a class="user-link" href="">
              <img class="media-object img-thumbnail user-img" alt="User Picture" src="/img/logo-site.png">
              <!--<span class="label label-danger user-label">16</span>-->
            </a>
            <div class="media-body">
              <h5 class="media-heading"><?php echo ucfirst($this->Session->read('Auth.User.username')); ?></h5>
              <ul class="list-unstyled user-info">
                <li> <a href="">Administrateur</a>  </li>
                <li>Dernière connexion :
                  <br>
                  <small>
                    <i class="fa fa-calendar"></i>&nbsp;16 Mar 16:32</small>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- #menu -->
        <ul id="menu" class="">
          <li class="nav-header" data-current="<?php echo $this->params['controller']; ?>">Menu</li>
          <li class="nav-divider"></li>
          <li>
            <?php echo $this->Html->link("<i class=\"fa fa-home\"></i><span class=\"link-title\"> Acceuil</span>", array('controller'=>'admin','action'=>'index', 'admin' => true), array('class' => 'link-title li-admin','admin' => true, 'escape'=>false)); ?>
          </li>
          <li>
            <?php echo $this->Html->link("<i class=\"fa fa-user\"></i><span class=\"link-title\"> L'équipe</span>", array('controller'=>'teams','action'=>'index', 'admin' => true), array('class' => 'link-title li-teams','admin' => true, 'escape'=>false)); ?>
          </li>
          <li>
            <?php echo $this->Html->link("<i class=\"fa fa-star\"></i><span class=\"link-title\"> Les partenaires</span>", array('controller'=>'partners','action'=>'index', 'admin' => true), array('class' => 'link-title li-partners','admin' => true, 'escape'=>false)); ?>
          </li>
          <li>
            <?php echo $this->Html->link("<i class=\"fa fa-briefcase\"></i><span class=\"link-title\"> Les programmes</span>", array('controller'=>'programs','action'=>'index', 'admin' => true), array('class' => 'link-title li-programs','admin' => true, 'escape'=>false)); ?>
          </li>
          <li>
            <?php echo $this->Html->link("<i class=\"fa fa-globe\"></i><span class=\"link-title\"> L'actualité</span>", array('controller'=>'news','action'=>'index', 'admin' => true), array('class' => 'link-title li-news','admin' => true, 'escape'=>false)); ?>
          </li>
          <li>
            <?php echo $this->Html->link("<i class=\"fa fa-dashboard\"></i><span class=\"link-title\"> Le coaching</span>", array('controller'=>'coach','action'=>'edit', 'admin' => true), array('class' => 'link-title li-coaching','admin' => true, 'escape'=>false)); ?>
          </li>
          <li>
            <?php echo $this->Html->link("<i class=\"fa fa-envelope\"></i><span class=\"link-title\"> Informations de contact</span>", array('controller'=>'contact','action'=>'edit', 'admin' => true), array('class' => 'link-title li-contact','admin' => true, 'escape'=>false)); ?>
          </li>
          <li>
            <?php echo $this->Html->link("<i class=\"fa fa-globe\"></i><span class=\"link-title\"> Médias</span>", array('controller'=>'Medias','action'=>'index', 'admin' => true), array('class' => 'link-title li-news','admin' => true, 'escape'=>false)); ?>
          </li>
          <li>
            <?php echo $this->Html->link("<i class=\"fa fa-share\"></i><span class=\"link-title\"> Retour au site</span>", array('controller'=>'home','action'=>'index', 'admin' => false), array('class' => 'link-title','admin' => true, 'escape'=>false)); ?>
          </li>
          <li class="nav-divider"></li>
        </ul><!-- /#menu -->
      </div><!-- /#left -->
      <div id="content">
        <div class="outer">
          <div class="inner">
            <div class="row">
              <div class="col-lg-12">
                <?php echo $this->Session->flash(); ?>
                <?php echo $this->fetch('content'); ?>
              </div>
            </div>
          </div><!-- /.inner -->
        </div><!-- /.outer -->
      </div><!-- /#content -->
    </div><!-- /#wrap -->
    <footer id="footer">
      <p>2014 &copy; Metis Bootstrap Admin Template</p>
    </footer><!-- /#footer -->
    <?php
      echo $this->Html->script('/lib/jquery/jquery.min');
      echo $this->Html->script('/lib/bootstrap/js/bootstrap.min');
    ?>
    <!--jQuery 2.1.0 -->
    <!--<script src="assets/lib/jquery/jquery.min.js"></script>

    <!--Bootstrap -->
    <!--<script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>

    <!-- Screenfull -->
    <!--<script src="assets/lib/screenfull/screenfull.js"></script>-->
    <!--<script src="/lib/jquery-ui/jquery-ui.min.js"></script><!--
    <script src="assets/lib/fullcalendar/fullcalendar.min.js"></script>
    <script src="assets/lib/jquery.tablesorter/jquery.tablesorter.min.js"></script>
    <script src="assets/lib/jquery.sparkline/jquery.sparkline.min.js"></script>
    <script src="assets/lib/flot/jquery.flot.js"></script>
    <script src="assets/lib/flot/jquery.flot.selection.js"></script>
    <script src="assets/lib/flot/jquery.flot.resize.js"></script>
    --><script>
      $(function() {
        dashboard();
      });
    </script>
    <?php
      echo $this->Html->script('main');
      //echo $this->Html->script('style-switcher');
      echo $this->Html->script('/lib/jquery/jquery.min');
      echo $this->Html->script('/lib/jquery-ui/jquery-ui.min');
      echo $this->Html->script('/lib/fullcalendar/fullcalendar.min');
      echo $this->Html->script('/lib/jquery.tablesorter/jquery.tablesorter.min');
      echo $this->Html->script('/lib/jquery.sparkline/jquery.sparkline.min');
      echo $this->Html->script('/lib/flot/jquery.flot');
      echo $this->Html->script('/lib/flot/jquery.flot.selection');
      echo $this->Html->script('/lib/flot/jquery.flot.resize');
      echo $this->Html->script('custom');
    ?>

    <!-- Metis core scripts -->
    <!--<script src="assets/js/main.min.js"></script>

    <!--For Demo Only. Not required -->
    <!--<script src="assets/js/style-switcher.min.js"></script>-->
  </body>
  <?php echo $this->Html->script('jQuery-v1.11.1'); ?>
  <script type="text/javascript">
    $('.li-' + $('.nav-header').data('current')).addClass('active');
  </script>
</html>