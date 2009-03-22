<?php /*
	   * include references get-oblique.php
	   * the two need to be separate because
	   * otherwise get-oblique tries to overwrite
	   * itself and the script disappears before
	   * it is able to finish running
	   */ ?>
<script type="text/javascript">
	$(document).ready(function(){
		var reOblique = function(){
			$("#get-oblique").fadeOut("slow",function(){
				$("#get-oblique").empty();
				$.get("<?php bloginfo('template_directory'); ?>/get-oblique.php",function(data){
					$("#get-oblique").html(data);
				});
				$("#get-oblique").fadeIn("slow");
			});
			return setTimeout(reOblique, 10000);
		}
		setTimeout(reOblique, 10000);
	});
</script>
<div id="get-oblique">
	<?php include (TEMPLATEPATH . '/get-oblique.php'); ?>
</div>