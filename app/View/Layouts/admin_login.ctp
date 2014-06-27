<!doctype html>
<html class="no-js">
  <head>
    <meta charset="UTF-8">
    <title>RMA Administration - Connexion</title>

    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php
    echo $this->Html->meta(
        'favicon.ico',
        'img/favicon.ico',
        array('type' => 'icon')
    );
    
      echo $this->Html->css('/lib/bootstrap/css/bootstrap.min');
      echo $this->Html->css('/lib/font-awesome/css/font-awesome.min');
      echo $this->Html->css('main.min');
      echo $this->Html->css('theme');

      echo $this->Html->script('/lib/modernizr/modernizr.min');
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
              <a href="/admin/admin" class="navbar-brand">
                <span>Connexion</span>
              </a> 
            </header>
            <div class="topnav">
              <div class="btn-group">
                <?php echo $this->Html->link("<i class=\"fa fa-share\"></i> Retour au site", array('controller'=>'home','action'=>'index', 'admin' => false), array('class' => 'btn btn-metis-3 btn-sw', 'escape'=>false)); ?>
              </div>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">

              <!-- .nav -->
              <ul class="nav navbar-nav">
                <!--<li class="active"><a href="dashboard.html">Dashboard</a></li>-->
              </ul><!-- /.nav -->
            </div>
          </div><!-- /.container-fluid -->
        </nav>
      </div><!-- /#top -->
      <div id="content" class="loginBlock">
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

	<script>
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

  </body>
  <?php echo $this->Html->script('jQuery-v1.11.1'); ?>
  <script type="text/javascript">
    $('#wrap').css('min-height', $(window).height() - 42);
  </script>
</html>