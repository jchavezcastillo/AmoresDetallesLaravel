<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es" class="ve-animate">
<head>

</head>
<body>

	@include('visitors.master-visitors')

	<script type="text/javascript">
		$(document).ready(function(){

			setInterval(function(){ 
				if($('#slide-1').is(':visible')){
					$('#slide-1').hide();
					$('#slide-2').show();
				}else{
					$('#slide-2').hide();
					$('#slide-1').show();
				}
			}, 3000);
			
			
		
	});
	</script>

	<!--menú-->
	<!--<div class="container-first container" style="text-align:center;padding-bottom: 50px;">
		<img id="slide-1" src="https://charucashop.com/modules/homeslider/images/186f89b77bb5edf62f537901f38c2767da792baf_baner1.jpg" style="width:90%;">
		<img id="slide-2" src="https://charucashop.com/modules/homeslider/images/959747396910f50823a75db2a7545ec6a621841a_baner2.jpg" style="width:90%; display:none;">
	</div>-->	


	
</body>
</html>