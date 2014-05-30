<!doctype html>
<html class="no-js">
  <head>
    <meta charset="UTF-8">
    <title>Dashboard</title>

    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <!--<link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.min.css">

    <!-- Font Awesome --><!--
    <link rel="stylesheet" href="assets/lib/font-awesome/css/font-awesome.min.css">

    <!-- Metis core stylesheet --><!--
    <link rel="stylesheet" href="assets/css/main.min.css">

    <!-- Metis Theme stylesheet -->
    <!--<link rel="stylesheet" href="assets/css/theme.css">
    <link rel="stylesheet" href="assets/lib/fullcalendar/fullcalendar.css">-->
    <?php
      echo $this->Html->css('/lib/bootstrap/css/bootstrap.min');
      echo $this->Html->css('/lib/font-awesome/css/font-awesome.min');
      echo $this->Html->css('main.min');
      echo $this->Html->css('theme');
      echo $this->Html->css('/lib/fullcalendar/fullcalendar');

      echo $this->Html->script('/lib/modernizr/modernizr.min');
    ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>
      <script src="/lib/html5shiv/html5shiv.js"></script>
        <script src="/lib/respond/respond.min.js"></script>
        <![endif]-->

    <!--Modernizr 2.7.2-->
    <!--<script src="assets/lib/modernizr/modernizr.min.js"></script>-->
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
              <a href="index.html" class="navbar-brand">
                <img src="/img/logo.png" alt="">
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
                <?php echo $this->Html->link("<i class=\"fa fa-power-off\"></i>", array('controller'=>'users','action'=>'logout', 'admin' => true), array('class' => 'btn btn-metis-1 btn-sw', 'escape'=>false)); ?>
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
        <header class="head">
          <div class="search-bar">
            <form class="main-search" action="">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Live Search ...">
                <span class="input-group-btn">
                  <button class="btn btn-primary btn-sm text-muted" type="button">
                      <i class="fa fa-search"></i>
                  </button>
                </span>
              </div>
            </form><!-- /.main-search -->
          </div><!-- /.search-bar -->
          <div class="main-bar">
            <h3>
              <i class="fa fa-dashboard"></i> Dashboard</h3>
          </div><!-- /.main-bar -->
        </header><!-- /.head -->
      </div><!-- /#top -->
      <div id="left">
        <div class="media user-media">
          <div class="user-media-toggleHover">
            <span class="fa fa-user"></span> 
          </div>
          <div class="user-wrapper">
            <a class="user-link" href="">
              <img class="media-object img-thumbnail user-img" alt="User Picture" src="/img/user.gif">
              <span class="label label-danger user-label">16</span>
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
          <li class="nav-header">Menu</li>
          <li class="nav-divider"></li>
          <li>
            <a href="dashboard.html"><i class="fa fa-dashboard"></i><span class="link-title"> Dashboard</span></a>
          </li>
          <li>
            <a href="dashboard.html"><i class="fa fa-dashboard"></i><span class="link-title"> Dashboard</span></a>
          </li>
          <li>
            <a href="dashboard.html"><i class="fa fa-dashboard"></i><span class="link-title"> Dashboard</span></a>
          </li>
          <li>
            <a href="dashboard.html"><i class="fa fa-dashboard"></i><span class="link-title"> Dashboard</span></a>
          </li>
          <li>
            <a href="dashboard.html"><i class="fa fa-dashboard"></i><span class="link-title"> Dashboard</span></a>
          </li>
          <li>
            <a href="dashboard.html"><i class="fa fa-dashboard"></i><span class="link-title"> Dashboard</span></a>
          </li>
          <li>
            <a href="dashboard.html"><i class="fa fa-dashboard"></i><span class="link-title"> Dashboard</span></a>
          </li>
          <li class="">
            <a href="javascript:;"><i class="fa fa-tasks"></i><span class="link-title"> Components</span><span class="fa arrow"></span></a>
            <ul>
              <li class=""><a href="icon.html"><i class="fa fa-angle-right"></i>&nbsp;Icon</a></li>
              <li class=""><a href="button.html"><i class="fa fa-angle-right"></i>&nbsp;Button</a></li>
              <li class=""><a href="progress.html"><i class="fa fa-angle-right"></i>&nbsp;Progress</a></li>
              <li class=""><a href="pricing.html"><i class="fa fa-credit-card"></i>&nbsp;Pricing Table</a></li>
              <li class=""><a href="bgimage.html"><i class="fa fa-angle-right"></i>&nbsp;Bg Image</a></li>
              <li class=""><a href="bgcolor.html"><i class="fa fa-angle-right"></i>&nbsp;Bg Color</a></li>
            </ul>
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
      echo $this->Html->script('style-switcher');
      echo $this->Html->script('/lib/jquery/jquery.min');
      echo $this->Html->script('/lib/jquery-ui/jquery-ui.min');
      echo $this->Html->script('/lib/fullcalendar/fullcalendar.min');
      echo $this->Html->script('/lib/jquery.tablesorter/jquery.tablesorter.min');
      echo $this->Html->script('/lib/jquery.sparkline/jquery.sparkline.min');
      echo $this->Html->script('/lib/flot/jquery.flot');
      echo $this->Html->script('/lib/flot/jquery.flot.selection');
      echo $this->Html->script('/lib/flot/jquery.flot.resize');
    ?>

    <!-- Metis core scripts -->
    <!--<script src="assets/js/main.min.js"></script>

    <!--For Demo Only. Not required -->
    <!--<script src="assets/js/style-switcher.min.js"></script>-->
  </body>
</html>