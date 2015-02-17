<script src="assets/js/jquery-2.1.3.js"></script>

<script>
$(document).ready(function(){

	var c = 0;

	$("div").click(function(){
	
		$(this).html("");
		$(this).css("background-repeat", "no-repeat");
		$(this).css("background-color", "fff");
		
		for (i=0; i<13; i++){
			$(this)<?php
				for ($i = 1; $i <= 30; $i++){
					echo ".animate({opacity:1.}, 180, function() {
						$(this).css(\"background-image\", \"url('assets/images/c".$i.".jpg')\");
					})";
				}
			?>;
		}
	});
});

</script>
<style>

</style>
<div style="height:450; width:650; background-image:url(assets/images/Untitled-1.png)"></div>

