<?php
error_reporting(E_ALL | E_STRICT); 
define('ROOT', dirname(dirname(__FILE__)));
define('DS',   DIRECTORY_SEPARATOR); 
define('SYS',  ROOT.DS.'system'.DS); 
define('APPS',  ROOT.DS.'app'.DS);
define('MOD',   ROOT.DS.'module'.DS);
define('DIR',  APPS . 'directories'.DS);
define('SELF', pathinfo(__FILE__, PATHINFO_BASENAME));
define('PHP_EXT',  '.php');
if (version_compare(phpversion(), '5.3.0', '<') == true) {exit('PHP5.3+ Required');}
date_default_timezone_set("Asia/Jakarta");
//panggil class inti (core)
require (SYS.DS.'core'.DS.'base.php'); 	
	
require 'config.php';

$c_apps = "$c_url/app";
$c_sys  = "$c_url/system";
$c_mod = "$c_url/module";

include(CONFIG.DS.'linkf.php');
if (empty($_SESSION['username']) && empty($_SESSION['password'])) {
    header('location:'.$c_url.'/admin/');
} else {   
	if(isset($_REQUEST["page"])){ $p=$_GET["page"];}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Administrator</title>
		<link rel="apple-touch-icon" href="<?php echo $c_cdn_img;?>/favi.png" />
		<link async='async' rel="shortcut icon" href="<?php echo $c_cdn_img;?>/favi.png" type="image/x-icon" />
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="<?php echo $c_cdn;?>/new/admin/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <link href="<?php echo $c_cdn;?>/new/admin/css/chosen.min.css" media="all" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="<?php echo $c_cdn;?>/new/admin/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="<?php echo $c_cdn;?>/new/admin/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo $c_cdn;?>/new/admin/css/AdminLTE.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo $c_cdn;?>/new/admin/css/datatable.css" rel="stylesheet" type="text/css" />
		<script src="<?php echo $c_cdn;?>/new/admin/js/jquery.js"></script>
		<script src="<?php echo $c_cdn;?>/new/javascript/v1/jquery-1.9.1.js"></script>
    </head>
    <body class="skin-black fixed">
        <header class="header">
            <a href="?page=dashboard" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                <img src="<?php echo $c_cdn_img;?>/mobile/vanectro-logo-web-mobile.png" style="width: 80%;" alt="<?php echo $c_title;?>" title="<?php echo $c_title;?>">
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">                
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>Helo, <?php $user=explode(" ", $_SESSION['fullname']); echo $user[0]; ?> <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="<?php echo $upload_dir."/users/".$_SESSION['avatar']; ?>" class="img-circle" alt="User Image" />
                                    <p>
                                        <?php echo $_SESSION['fullname']; ?>
                                        <small><?php echo $_SESSION['level']; ?> - <?php echo $_SESSION['email']; ?></small>
                                    </p>
                                </li>                      
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="<?php echo $c_url;?>/admin/ws-profile/detailprofile" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">                                        
                                        <a href="<?php echo $c_url;?>/admin/ws-keluar" class="btn btn-default btn-flat">Log out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?php echo $upload_dir."/users/".$_SESSION['avatar']; ?>" class="img" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p><a href="?page=profile&act=detailprofile"><?php echo $_SESSION['fullname']; ?></a></p>
                            <small style="font-family: 'ProximaNova', sans-serif; font-weight: normal !important;"><i class="glyphicon glyphicon-user"></i> <?php echo $_SESSION['level']; ?></small>
                        </div>
                    </div>                    
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <?php include 'side_menu.php'; ?>                                 
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Main content -->
                <section class="content">
                    <?php include 'content.php'; ?>
                </section><!-- end main content-->
            </aside>
        </div>


        <!-- jQuery 2.0.2 -->
        
		<script src="<?php echo $c_cdn;?>/new/admin/js/jquery.dataTables.js"></script>
		<script src="<?php echo $c_cdn;?>/new/admin/js/dataTables.bootstrap4.js"></script>
		<script>
  $(function () {
	$("#tabel1").DataTable();  
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
		</script>		
        <!-- Bootstrap -->
        <script src="<?php echo $c_cdn;?>/new/admin/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo $c_cdn;?>/new/admin/js/AdminLTE/apps.js" type="text/javascript"></script>
        
        <script src="<?php echo $c_cdn;?>/new/admin/js/chosen.jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo $c_cdn;?>/new/admin/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(function() {
                //bootstrap WYSIHTML5 - text editor
                $(".textarea").wysihtml5();
            });

            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#img_prev')
                        .attr('src', e.target.result)
                        .width()
                        .height();
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            }
        </script>		
        <!-- Bootstrap WYSIHTML5 -->
        <script type="text/javascript">

            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#img_prev')
                        .attr('src', e.target.result)
                        .width()
                        .height();
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            }
        </script>
        <script type="text/javascript">
            var config = {
              '.chosen-select'           : {},
              '.chosen-select-deselect'  : {allow_single_deselect:true},
              '.chosen-select-no-single' : {disable_search_threshold:10},
              '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
              '.chosen-select-width'     : {width:"95%"}
            }
            for (var selector in config) {
              $(selector).chosen(config[selector]);
            }
        </script>
	<script type="text/javascript">
         ( function() {
             if ( 'serviceWorker' in navigator ) {
                navigator.serviceWorker.register( '.<?php echo $c_cdn;?>/new/javascript/serviceworker.js' ).then( function() {
                   console.log( 'Service Worker Registered' );
                } );
             }
          } )();
      </script>		
    </body>
</html>
<?php } ?>