<script src="<?php echo $c_cdn_admin;?>/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo $c_cdn_admin;?>/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo $c_cdn_admin;?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo $c_cdn_admin;?>/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo $c_cdn_admin;?>/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo $c_cdn_admin;?>/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo $c_cdn_admin;?>/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo $c_cdn_admin;?>/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo $c_cdn_admin;?>/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo $c_cdn_admin;?>/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo $c_cdn_admin;?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo $c_cdn_admin;?>/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo $c_cdn_admin;?>/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $c_cdn_admin;?>/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo $c_cdn_admin;?>/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo $c_cdn_admin;?>/dist/js/demo.js"></script>

<script type="text/javascript">
		$(function () {
				$('#statistik2').highcharts({
					chart: {
						plotBackgroundColor: null,
						plotBorderWidth: null,
						plotShadow: false
					},
					title: {
						text: 'Statistic Browser use by user'
					},
					tooltip: {
						pointFormat: '{series.name}: <b>{point.percentage}%</b>',
						percentageDecimals: 0
					},
					plotOptions: {
						pie: {
							allowPointSelect: true,
							cursor: 'pointer',
							dataLabels: {
								enabled: true,
								color: '#000000',
								connectorColor: '#000000',
								formatter: function() {
									return '<b>'+ this.point.name +'</b>: '+ this.percentage +' %';
								}
							}
						}
					},
					series: [{
						type: 'pie',
						name: 'Browser Use',
						data: [
							['Firefox',   <?PHP echo substr($percen_firefox,0,4); ?>],
							['IE',       <?PHP echo substr($percen_ie,0,4); ?>],
							{
								name: 'Chrome',
								y: <?PHP echo substr($percen_chrome,0,4); ?>,
								sliced: true,
								selected: true
							},
							['Safari',    <?PHP echo substr($percen_safari,0,4); ?>],
							['Opera',     <?PHP echo substr($percen_opera,0,4); ?>],
							['Others',   <?PHP echo substr($percen_others,0,4); ?>]
						]
					}]
				});
			});
		</script>