<script src="<?php echo $c_cdn;?>/new/javascript/v1/jquery.cookie.js"></script>
<script src="<?php echo $c_cdn;?>/new/javascript/v1/jquery.pjax.js"></script>
<script type="text/javascript">
	var direction = "right";
	$(document).ready(function(){
		$(document).pjax('a', '#mainp');
		$(document).on('pjax:start', function() {
			$(this).addClass('loading')
		});
		$(document).on('pjax:end', function() {
			$(this).removeClass('loading')
		});
	});
</script>