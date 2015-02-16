<script src="assets/js/jquery-2.1.3.js"></script>

<script>
$(document).ready(function(){

	var c = 0;

	$("div").click(function(){
	
		$(this).html("");
		$(this).css("background-repeat", "no-repeat");
		$(this).css("background-color", "fff");
		
		for (i=0; i<25; i++){
			$(this)<?php
				for ($i = 1; $i <= 50; $i++){
					echo ".animate({opacity:1.0, marginLeft:c+=1}, 100, function() {
						$(this).css(\"background-image\", \"url('assets/images/b".$i.".png')\");
					})";
				}
			?>;
		}
	});
});

</script>
<style>

</style>
<div style="height:50%; width:50%; background-color:#996699"></div>

