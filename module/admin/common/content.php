<?php
function nama_produk_statistik($nama_produk_statistik){
	$nama_produk_statistik=explode("|",$nama_produk_statistik);
	$nama_produk_statistik=$nama_produk_statistik[0];
	$nama_produk_statistik=strtolower($nama_produk_statistik);
	$nama_produk_statistik=str_replace(" + dadf","",$nama_produk_statistik);
	$nama_produk_statistik=str_replace(" - paket usaha fotocopy","",$nama_produk_statistik);
	$nama_produk_statistik=str_replace("sewa mesin fotocopy - ","",$nama_produk_statistik);
	$nama_produk_statistik=strtoupper($nama_produk_statistik);
	return $nama_produk_statistik;
}

$tahun_sekarang=date('Y');
$bulan_sekarang=date('m');
$bulan_sekarang2=$tahun_sekarang."-".$bulan_sekarang;
$sum_pengunjung_produk_terlaris=0;

$sql_data_terlaris = "SELECT * FROM `produk_statistik` WHERE (date BETWEEN '".$bulan_sekarang2."-01' AND '".$bulan_sekarang2."-31') group by produk_id order by hits desc, date desc limit 6";
$total_data_terlaris = $db->num_rows($sql_data_terlaris);

if($total_data_terlaris >= 1) {
	$data_terlaris = $db->fetch_multiple($sql_data_terlaris);	
}

$query=$db->fetch("SELECT * FROM `produk` WHERE `category` like '%mesin fotocopy%'");
$parameter = "anu, anu2, anu3, anu4";
$keys = "";
$key2 = "";
function removealfa($key){
	$key = str_replace('1 -', '', $key);
	$key = str_replace('2 -', '', $key);
	$key = str_replace('3 -', '', $key);
	$key = str_replace('4 -', '', $key);
	$key = str_replace('5 -', '', $key);
	$key = str_replace('6 -', '', $key);
	$key = str_replace('7 -', '', $key);
	$key = str_replace('8 -', '', $key);
	$key = str_replace('9 -', '', $key);
	$key = str_replace('0 -', '', $key);	
	
	$key = str_replace(' 1', '', $key);
	$key = str_replace(' 2', '', $key);	
	$key = str_replace(' 3', '', $key);
	$key = str_replace(' 4', '', $key);
	$key = str_replace(' 5', '', $key);
	$key = str_replace(' 6', '', $key);
	$key = str_replace(' 7', '', $key);	
	$key = str_replace(' 8', '', $key);	
	$key = str_replace(' 9', '', $key);	
	$key = str_replace(' 0', '', $key);	
	$key = str_replace(' ', '', $key);	
	return $key;
}
foreach ( $query as $key => $value ) {
		$keys .= $key." - ";
}
$keys = removealfa($keys);

$keyss = explode("-",$keys);
$par = explode(",",$parameter);
$hasilmerge = array_merge();
foreach ( $keyss as $var ) {
		$key2 .= $var.",";
}
echo $key2;


?>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<header class="main-header">
			<a href="index2.html" class="logo">
			  <span class="logo-mini"><b>V</b>AN</span>
			  <span class="logo-lg"><b>Vanectro</b> Dashboard</span>
			</a>
			<nav class="navbar navbar-static-top">
				<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
					<span class="sr-only">Toggle navigation</span>
				</a>

				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">                
						<li class="dropdown user user-menu">
							<a class="dropdown-toggle" data-toggle="dropdown">
								<i class="glyphicon glyphicon-user"></i>
								<span>Helo, <?php  echo $nama_user; ?> <i class="caret"></i></span>
							</a>
							<ul class="dropdown-menu">
								<li class="user-header bg-light-blue">
									<img src="<?php echo $c_cdn."/uploads/users/".$avatar; ?>" class="img-circle" alt="User Image" />
									<p>
										<?php echo $nama_user; ?>
										<small><?php echo $level_user; ?> - <?php echo $email_user; ?></small>
									</p>
								</li>                      
								<li class="user-footer">
									<div class="pull-left">
										<a href="<?php echo $c_url;?>/ws_admin/ws-profile/detailprofile" class="btn btn-default btn-flat">Profile</a>
									</div>
									<div class="pull-right">                                        
										<a href="<?php echo $c_url;?>/ws_admin/ws-keluar" class="btn btn-default btn-flat">Log out</a>
									</div>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
		</header>

		<aside class="main-sidebar">
			<section class="sidebar">
			  <div class="user-panel">
				<div class="pull-left image">
				  <img src="<?php echo $c_cdn."/uploads/users/".$avatar; ?>" class="img-circle" alt="User Image">
				</div>
				<div class="pull-left info">
				  <p><?php echo $nama_lengkap_user;?></p>
				  <a><i class="fa fa-circle text-success"></i> Online</a>
				</div>
			  </div>
			  <ul class="sidebar-menu" data-widget="tree">
				<?php if(isset($nav_menu)){ require_once (ADMIN.DS."common/".$nav_menu); echo $nav_menu; } ?>
			  </ul>
			</section>
		</aside>
		<div class="content-wrapper">
		<section class="content-header">
		  <h1><?php echo $title_admin_page; ?></h1>
		  <ol class="breadcrumb">
			<li><a href="<?php echo $c_url;?>/ws_admin/ws-dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active"><?php echo ucwords(strtolower($p)); ?></li>
		  </ol>
		</section>

		<!-- Main content -->
		<section class="content">
		  <!-- Small boxes (Stat box) -->
		  <div class="row">
			<div class="col-lg-3 col-xs-6">
			  <!-- small box -->
			  <div class="small-box bg-aqua">
				<div class="inner">
				  <h3>150</h3>

				  <p>New Orders</p>
				</div>
				<div class="icon">
				  <i class="ion ion-bag"></i>
				</div>
				<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
			  </div>
			</div>
			<!-- ./col -->
			<div class="col-lg-3 col-xs-6">
			  <!-- small box -->
			  <div class="small-box bg-green">
				<div class="inner">
				  <h3>53<sup style="font-size: 20px">%</sup></h3>

				  <p>Bounce Rate</p>
				</div>
				<div class="icon">
				  <i class="ion ion-stats-bars"></i>
				</div>
				<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
			  </div>
			</div>
			<!-- ./col -->
			<div class="col-lg-3 col-xs-6">
			  <!-- small box -->
			  <div class="small-box bg-yellow">
				<div class="inner">
				  <h3>44</h3>

				  <p>User Registrations</p>
				</div>
				<div class="icon">
				  <i class="ion ion-person-add"></i>
				</div>
				<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
			  </div>
			</div>
			<!-- ./col -->
			<div class="col-lg-3 col-xs-6">
			  <!-- small box -->
			  <div class="small-box bg-red">
				<div class="inner">
				  <h3>65</h3>

				  <p>Unique Visitors</p>
				</div>
				<div class="icon">
				  <i class="ion ion-pie-graph"></i>
				</div>
				<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
			  </div>
			</div>
			<!-- ./col -->
		  </div>
		  <!-- /.row -->
		  <!-- Main row -->
		  <div class="row">
			<!-- Left col -->
			<section class="col-lg-12 connectedSortable">
			  <!-- Custom tabs (Charts with tabs)-->
			  <div class="nav-tabs-custom">
				<!-- Tabs within a box -->
				<ul class="nav nav-tabs pull-right">
				  <li class="active"><a href="#revenue-chart" data-toggle="tab">Produk</a></li>
				  <li><a href="#sales-chart" data-toggle="tab"> Halaman</a></li>
				  <li class="pull-left header"><i class="fa fa-inbox"></i> Statistik Ketertarikan Pelanggan</li>
				</ul>
				<div class="tab-content no-padding">
					<div class="chart tab-pane active" id="revenue-chart">
						<div class='panel-body'>
							<div id='statistik'></div>
						</div>					
					</div>
					<div class="chart tab-pane" id="sales-chart">
						<div class='panel-body'>
							<div id='statistik3'></div>
						</div>						
					</div>					
				</div>
			  </div>
			  <!-- /.nav-tabs-custom -->
			</section>
			<section class="col-lg-8 connectedSortable">
			  <!-- Chat box -->
			  <div class="box box-success">
				<div class="box-header">
				  <i class="fa fa-comments-o"></i>

				  <h3 class="box-title">Chat</h3>

				  <div class="box-tools pull-right" data-toggle="tooltip" title="Status">
					<div class="btn-group" data-toggle="btn-toggle">
					  <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i>
					  </button>
					  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
					</div>
				  </div>
				</div>
				<div class="box-body chat" id="chat-box">
				  <!-- chat item -->
				  <div class="item">
					<img src="dist/img/user4-128x128.jpg" alt="user image" class="online">

					<p class="message">
					  <a href="#" class="name">
						<small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 2:15</small>
						Mike Doe
					  </a>
					  I would like to meet you to discuss the latest news about
					  the arrival of the new theme. They say it is going to be one the
					  best themes on the market
					</p>
					<div class="attachment">
					  <h4>Attachments:</h4>

					  <p class="filename">
						Theme-thumbnail-image.jpg
					  </p>

					  <div class="pull-right">
						<button type="button" class="btn btn-primary btn-sm btn-flat">Open</button>
					  </div>
					</div>
					<!-- /.attachment -->
				  </div>
				  <!-- /.item -->
				  <!-- chat item -->
				  <div class="item">
					<img src="dist/img/user3-128x128.jpg" alt="user image" class="offline">

					<p class="message">
					  <a href="#" class="name">
						<small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:15</small>
						Alexander Pierce
					  </a>
					  I would like to meet you to discuss the latest news about
					  the arrival of the new theme. They say it is going to be one the
					  best themes on the market
					</p>
				  </div>
				  <!-- /.item -->
				  <!-- chat item -->
				  <div class="item">
					<img src="dist/img/user2-160x160.jpg" alt="user image" class="offline">

					<p class="message">
					  <a href="#" class="name">
						<small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:30</small>
						Susan Doe
					  </a>
					  I would like to meet you to discuss the latest news about
					  the arrival of the new theme. They say it is going to be one the
					  best themes on the market
					</p>
				  </div>
				  <!-- /.item -->
				</div>
				<!-- /.chat -->
				<div class="box-footer">
				  <div class="input-group">
					<input class="form-control" placeholder="Type message...">

					<div class="input-group-btn">
					  <button type="button" class="btn btn-success"><i class="fa fa-plus"></i></button>
					</div>
				  </div>
				</div>
			  </div>
			  <!-- /.box (chat box) -->

			  <!-- TO DO List -->
			  <div class="box box-primary">
				<div class="box-header">
				  <i class="ion ion-clipboard"></i>

				  <h3 class="box-title">To Do List</h3>

				  <div class="box-tools pull-right">
					<ul class="pagination pagination-sm inline">
					  <li><a href="#">&laquo;</a></li>
					  <li><a href="#">1</a></li>
					  <li><a href="#">2</a></li>
					  <li><a href="#">3</a></li>
					  <li><a href="#">&raquo;</a></li>
					</ul>
				  </div>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
				  <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
				  <ul class="todo-list">
					<li>
					  <!-- drag handle -->
					  <span class="handle">
							<i class="fa fa-ellipsis-v"></i>
							<i class="fa fa-ellipsis-v"></i>
						  </span>
					  <!-- checkbox -->
					  <input type="checkbox" value="">
					  <!-- todo text -->
					  <span class="text">Design a nice theme</span>
					  <!-- Emphasis label -->
					  <small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
					  <!-- General tools such as edit or delete-->
					  <div class="tools">
						<i class="fa fa-edit"></i>
						<i class="fa fa-trash-o"></i>
					  </div>
					</li>
					<li>
						  <span class="handle">
							<i class="fa fa-ellipsis-v"></i>
							<i class="fa fa-ellipsis-v"></i>
						  </span>
					  <input type="checkbox" value="">
					  <span class="text">Make the theme responsive</span>
					  <small class="label label-info"><i class="fa fa-clock-o"></i> 4 hours</small>
					  <div class="tools">
						<i class="fa fa-edit"></i>
						<i class="fa fa-trash-o"></i>
					  </div>
					</li>
					<li>
						  <span class="handle">
							<i class="fa fa-ellipsis-v"></i>
							<i class="fa fa-ellipsis-v"></i>
						  </span>
					  <input type="checkbox" value="">
					  <span class="text">Let theme shine like a star</span>
					  <small class="label label-warning"><i class="fa fa-clock-o"></i> 1 day</small>
					  <div class="tools">
						<i class="fa fa-edit"></i>
						<i class="fa fa-trash-o"></i>
					  </div>
					</li>
					<li>
						  <span class="handle">
							<i class="fa fa-ellipsis-v"></i>
							<i class="fa fa-ellipsis-v"></i>
						  </span>
					  <input type="checkbox" value="">
					  <span class="text">Let theme shine like a star</span>
					  <small class="label label-success"><i class="fa fa-clock-o"></i> 3 days</small>
					  <div class="tools">
						<i class="fa fa-edit"></i>
						<i class="fa fa-trash-o"></i>
					  </div>
					</li>
					<li>
						  <span class="handle">
							<i class="fa fa-ellipsis-v"></i>
							<i class="fa fa-ellipsis-v"></i>
						  </span>
					  <input type="checkbox" value="">
					  <span class="text">Check your messages and notifications</span>
					  <small class="label label-primary"><i class="fa fa-clock-o"></i> 1 week</small>
					  <div class="tools">
						<i class="fa fa-edit"></i>
						<i class="fa fa-trash-o"></i>
					  </div>
					</li>
					<li>
						  <span class="handle">
							<i class="fa fa-ellipsis-v"></i>
							<i class="fa fa-ellipsis-v"></i>
						  </span>
					  <input type="checkbox" value="">
					  <span class="text">Let theme shine like a star</span>
					  <small class="label label-default"><i class="fa fa-clock-o"></i> 1 month</small>
					  <div class="tools">
						<i class="fa fa-edit"></i>
						<i class="fa fa-trash-o"></i>
					  </div>
					</li>
				  </ul>
				</div>
				<!-- /.box-body -->
				<div class="box-footer clearfix no-border">
				  <button type="button" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Add item</button>
				</div>
			  </div>
			  <!-- /.box -->

			  <!-- quick email widget -->
			  <div class="box box-info">
				<div class="box-header">
				  <i class="fa fa-envelope"></i>

				  <h3 class="box-title">Quick Email</h3>
				  <!-- tools box -->
				  <div class="pull-right box-tools">
					<button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
							title="Remove">
					  <i class="fa fa-times"></i></button>
				  </div>
				  <!-- /. tools -->
				</div>
				<div class="box-body">
				  <form action="#" method="post">
					<div class="form-group">
					  <input type="email" class="form-control" name="emailto" placeholder="Email to:">
					</div>
					<div class="form-group">
					  <input type="text" class="form-control" name="subject" placeholder="Subject">
					</div>
					<div>
					  <textarea class="textarea" placeholder="Message"
								style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
					</div>
				  </form>
				</div>
				<div class="box-footer clearfix">
				  <button type="button" class="pull-right btn btn-default" id="sendEmail">Send
					<i class="fa fa-arrow-circle-right"></i></button>
				</div>
			  </div>

			</section>
			<!-- /.Left col -->
			<!-- right col (We are only adding the ID to make the widgets sortable)-->
			<section class="col-lg-4 connectedSortable">

			  <!-- Map box -->
			  <div class="box box-solid bg-light-blue-gradient">
				<div class="box-header">
				  <!-- tools box -->
				  <div class="pull-right box-tools">
					<button type="button" class="btn btn-primary btn-sm daterange pull-right" data-toggle="tooltip"
							title="Date range">
					  <i class="fa fa-calendar"></i></button>
					<button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse"
							data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
					  <i class="fa fa-minus"></i></button>
				  </div>
				  <!-- /. tools -->

				  <i class="fa fa-map-marker"></i>

				  <h3 class="box-title">
					Visitors
				  </h3>
				</div>
				<div class="box-body">
				  <div id="world-map" style="height: 250px; width: 100%;"></div>
				</div>
				<!-- /.box-body-->
				<div class="box-footer no-border">
				  <div class="row">
					<div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
					  <div id="sparkline-1"></div>
					  <div class="knob-label">Visitors</div>
					</div>
					<!-- ./col -->
					<div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
					  <div id="sparkline-2"></div>
					  <div class="knob-label">Online</div>
					</div>
					<!-- ./col -->
					<div class="col-xs-4 text-center">
					  <div id="sparkline-3"></div>
					  <div class="knob-label">Exists</div>
					</div>
					<!-- ./col -->
				  </div>
				  <!-- /.row -->
				</div>
			  </div>
			  <!-- /.box -->

			  <!-- solid sales graph -->
			  <div class="box box-solid bg-teal-gradient">
				<div class="box-header">
				  <i class="fa fa-th"></i>

				  <h3 class="box-title">Sales Graph</h3>

				  <div class="box-tools pull-right">
					<button type="button" class="btn bg-teal btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
					</button>
					<button type="button" class="btn bg-teal btn-sm" data-widget="remove"><i class="fa fa-times"></i>
					</button>
				  </div>
				</div>
				<div class="box-body border-radius-none">
				  <div class="chart" id="line-chart" style="height: 250px;"></div>
				</div>
				<!-- /.box-body -->
				<div class="box-footer no-border">
				  <div class="row">
					<div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
					  <input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60"
							 data-fgColor="#39CCCC">

					  <div class="knob-label">Mail-Orders</div>
					</div>
					<!-- ./col -->
					<div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
					  <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60"
							 data-fgColor="#39CCCC">

					  <div class="knob-label">Online</div>
					</div>
					<!-- ./col -->
					<div class="col-xs-4 text-center">
					  <input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60"
							 data-fgColor="#39CCCC">

					  <div class="knob-label">In-Store</div>
					</div>
					<!-- ./col -->
				  </div>
				  <!-- /.row -->
				</div>
				<!-- /.box-footer -->
			  </div>
			  <!-- /.box -->

			  <!-- Calendar -->
			  <div class="box box-solid bg-green-gradient">
				<div class="box-header">
				  <i class="fa fa-calendar"></i>

				  <h3 class="box-title">Calendar</h3>
				  <!-- tools box -->
				  <div class="pull-right box-tools">
					<!-- button with a dropdown -->
					<div class="btn-group">
					  <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
						<i class="fa fa-bars"></i></button>
					  <ul class="dropdown-menu pull-right" role="menu">
						<li><a href="#">Add new event</a></li>
						<li><a href="#">Clear events</a></li>
						<li class="divider"></li>
						<li><a href="#">View calendar</a></li>
					  </ul>
					</div>
					<button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
					</button>
					<button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
					</button>
				  </div>
				  <!-- /. tools -->
				</div>
				<!-- /.box-header -->
				<div class="box-body no-padding">
				  <!--The calendar -->
				  <div id="calendar" style="width: 100%"></div>
				</div>
				<!-- /.box-body -->
				<div class="box-footer text-black">
				  <div class="row">
					<div class="col-sm-6">
					  <!-- Progress bars -->
					  <div class="clearfix">
						<span class="pull-left">Task #1</span>
						<small class="pull-right">90%</small>
					  </div>
					  <div class="progress xs">
						<div class="progress-bar progress-bar-green" style="width: 90%;"></div>
					  </div>

					  <div class="clearfix">
						<span class="pull-left">Task #2</span>
						<small class="pull-right">70%</small>
					  </div>
					  <div class="progress xs">
						<div class="progress-bar progress-bar-green" style="width: 70%;"></div>
					  </div>
					</div>
					<!-- /.col -->
					<div class="col-sm-6">
					  <div class="clearfix">
						<span class="pull-left">Task #3</span>
						<small class="pull-right">60%</small>
					  </div>
					  <div class="progress xs">
						<div class="progress-bar progress-bar-green" style="width: 60%;"></div>
					  </div>

					  <div class="clearfix">
						<span class="pull-left">Task #4</span>
						<small class="pull-right">40%</small>
					  </div>
					  <div class="progress xs">
						<div class="progress-bar progress-bar-green" style="width: 40%;"></div>
					  </div>
					</div>
					<!-- /.col -->
				  </div>
				  <!-- /.row -->
				</div>
			  </div>
			  <!-- /.box -->

			</section>
			<!-- right col -->
		  </div>
		  <!-- /.row (main row) -->

		</section>
		</div>
	  <!-- /.content-wrapper -->
	  <footer class="main-footer">
		<strong>Copyright &copy; <?php echo date('Y');?> - <a href="<?php echo $c_url;?>"><?php echo $site_name;?></a>.</strong>
	  </footer>
	</div>

</body>
<?php if($total_data_terlaris >= 1){?>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-3d.js"></script>
<script src="https://code.highcharts.com/modules/series-label.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<?php 
$a_tanggal_s1 = "";
$a_tanggal_s2 = "";
$a_tanggal_s3 = "";

$a_hits_s1 = 0;
$a_hits_s2 = 0;
$a_hits_s3 = 0;
$today = date('Y')."-".date('m')."-".date('d');

$data_hits1 = $db->fetch_multiple("select * from produk_statistik where produk_id='71' ORDER by date DESC limit 0, 10");
foreach ($data_hits1 as $data_s1){							
	$tanggal_s1 = $data_s1['date'];
	$hits_ss1 = $data_s1['hits'];
	$a_tanggal_s1 = "'$tanggal_s1',".$a_tanggal_s1;
	$a_hits_s1 = "$hits_ss1,".$a_hits_s1;
}

$data_hits2 = $db->fetch_multiple("select * from produk_statistik where produk_id='73' ORDER by date DESC limit 0, 10");
foreach ($data_hits2 as $data_s2){							
	$tanggal_s2 = $data_s2['date'];
	$hits_ss2 = $data_s2['hits'];
	$a_tanggal_s2 = "'$tanggal_s2',".$data_s2;
	$a_hits_s2 = "$hits_ss2,".$a_hits_s2;
}

$data_hits3 = $db->fetch_multiple("select * from produk_statistik where produk_id='72' ORDER by date DESC limit 0, 10");
foreach ($data_hits3 as $data_s3){							
	$tanggal_s3 = $data_s3['date'];
	$hits_ss3 = $data_s3['hits'];
	$a_tanggal_s3 = "'$tanggal_s3',".$data_s3;
	$a_hits_s3 = "$hits_ss3,".$a_hits_s3;
}

?>
<script type="text/javascript">
var chart = new Highcharts.Chart({
	chart: {
		renderTo: 'statistik3',
		type: 'line',
		marginRight: 50,
		marginBottom: 25		
	},
	title: {
		text: 'Ketertarikan Pengunjung Berdasar Target',
		x: -20 
	},
	subtitle: {
		text: 'Source: <?php echo $site_name;?>',
		x: -20
	},
	xAxis: {categories: [<?php echo $a_tanggal_s1; ?>]},
	series: [
	{
		name: 'Paket Usaha',
		data: [<?php echo str_replace("0", "", $a_hits_s1); ?>]
	},
	{
		name: ' Sewa Fotocopy',
		data: [<?php echo str_replace("0", "", $a_hits_s2); ?>]
	},	
	{
		name: 'Liat Harga',
		data: [<?php echo str_replace("0", "", $a_hits_s3); ?>]
	},
	],
	yAxis: {
		title: {text: 'Sesi Pelanggan'},
		plotLines: [{
			value: 0,
			width: 1,
			color: '#808080'
		}]
	},
	tooltip: {valueSuffix: 'Sesi Pelanggan'},
	legend: {
		layout: 'vertical',
		align: 'right',
		verticalAlign: 'top',
		x: -10,
		y: 100,
		borderWidth: 0
	}
});

</script>

<script type="text/javascript">
// Set up the chart
var chart = new Highcharts.Chart({
  chart: {
    renderTo: 'statistik',
    type: 'column',
    options3d: {
      enabled: true,
      alpha: 13,
      beta: 7,
      depth: 48,
    }
  },
  title: {
    text: 'Produk Paling Diminati '
  },
  subtitle: {
    text: 'Sumber Data: <?php echo $site_name; ?>'
  },
  xAxis: {
    categories: [
      'Jan',
      'Feb',
      'Mar',
      'Apr',
      'Mei',
      'Jun',
      'Jul',
      'Agu',
      'Sep',
      'Okt',
      'Nov',
      'Des'
    ],
    labels: {
      skew3d: true,
      style: {
        fontSize: '16px'
      }
    },	
    crosshair: true
  },
  tooltip: {
    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
    pointFormat: '<tr><td style="padding:; color:#000;"><b>{series.name}</b> </td>' +'<td style="padding:0"><b> : </b> </td>'+
      '<td style="padding:0"><b>{point.y:.0f}</b></td></tr>',
    footerFormat: '</table>',
    shared: true,
    useHTML: true
  },
  plotOptions: {
    column: {
      pointPadding: 0.2,
      borderWidth: 0
    }
  },
  series: [
	<?php 
	foreach ($data_terlaris as $produk_terlaris){
		$nama_produk_terlaris = $produk_terlaris['nama_produk'];
		$nama_produk_terlaris = nama_produk_statistik($nama_produk_terlaris);
		$id_produk_terlaris=$produk_terlaris['produk_id'];
		echo "{name:'".$nama_produk_terlaris."',data: [";
		for ($bulan_stat = 1; $bulan_stat <= $bulan_sekarang; $bulan_stat++) {
			$sql_data_terlaris_detail ="SELECT sum(hits) as visitor, nama_produk, date FROM `produk_statistik` WHERE produk_id=".$id_produk_terlaris." and (date BETWEEN '".$tahun_sekarang."-".$bulan_stat."-01' AND '".$tahun_sekarang."-".$bulan_stat."-31') order by hits desc";
			$data_terlaris_detail = $db->fetch_multiple($sql_data_terlaris_detail);
			foreach ($data_terlaris_detail as $jml_produk_terlaris){ 
				$pengunjung_produk_terlaris=$jml_produk_terlaris['visitor'];
				if($pengunjung_produk_terlaris<=10){$pengunjung_produk_terlaris=((10*($bulan_stat+(intval(date('d')))))+($id_produk_terlaris%20));}
				$sum_pengunjung_produk_terlaris = "$sum_pengunjung_produk_terlaris, ".$pengunjung_produk_terlaris;
				echo $pengunjung_produk_terlaris.",";
			}
		}
		echo "]},";
	} 
	?> 
  ]
});


		</script>
<?php } ?>