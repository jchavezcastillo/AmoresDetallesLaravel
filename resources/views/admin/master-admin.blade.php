<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es" class="ve-animate">
<head>
	<title>Amores Detalles</title>

	<link href="http://amoresdetalles.com/public/img/ico/amoresdetalles-icon.png" rel="icon" type="image/x-icon">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE9">
	<meta http-equiv="expires" content="Mon, 22 Jul 2002 11:12:01 GMT">
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="pragma" content="no-cache">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
	<meta name="HandheldFriendly" content="true">
	<meta name="apple-touch-fullscreen" content="yes">
	<meta name="MobileOptimized" content="1000">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="Content-Language" content="es">
	<meta name="Keywords" content="Creaciones para todo tipo de eventos para sorprender a tus invitados con Amores Detalles, Col. El Olmo Xalapa-Enríquez, siguenos por facebook @AmoresDetalles">
	<meta name="Distribution" content="global">
	<meta name="revisit-after" content="14 days">
	<meta name="robots" content="index,follow">
	<meta property="og:url" content="http://amoresdetalles.com/">
	<meta property="og:image" content="{{url()}}/public/img/logo/logo-redes-v5.jpg">
	<meta property="og:image:type" content="image/png">
	<meta property="og:image:width" content="220">
	<meta property="og:image:height" content="201">
	<meta property="og:title" content="Amores Detalles. Scrapbook Boutique">
	<meta property="og:description" content="Creaciones para todo tipo de eventos para sorprender a tus invitados con Amores Detalles, Col. El Olmo Xalapa-Enríquez, siguenos por facebook @AmoresDetalles">
	<meta name="description" content="Creaciones para todo tipo de eventos para sorprender a tus invitados con Amores Detalles, Col. El Olmo Xalapa-Enríquez, siguenos por facebook @AmoresDetalles">
	<meta name="_token" content="{{ csrf_token() }}"/>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="{{url()}}/public/css/amoresdetalles.css" rel="stylesheet">
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{url()}}/public/assets/jquery-1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{url()}}/public/assets/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <!--js page-->
    <script src="{{url()}}/public/js/amoresdetalles.js"></script>
	<script type="text/javascript">
    var save_url = "{!! route('envio') !!}";
	</script>
	<script src="{{url()}}/public/js/ajax.js"></script>

</head>
<body>

	<!--CORTINILLA PC-->
	<div class="container-first container-fluid hidden-xs none-padding-left-rigth">
		<div class="row center-block cortinilla container-fluid none-padding-left-rigth">
	      <div class="col-xs-1 col-sm-1 col-md-1 col-md-lg-1 black redondeo"></div>
	      <div class="col-xs-1 col-sm-1 col-md-1 col-md-lg-1 yellow redondeo"></div>
	      <div class="col-xs-1 col-sm-1 col-md-1 col-md-lg-1 black redondeo"></div>
	      <div class="col-xs-1 col-sm-1 col-md-1 col-md-lg-1 yellow redondeo"></div>
	      <div class="col-xs-1 col-sm-1 col-md-1 col-md-lg-1 black redondeo"></div>
	      <div class="col-xs-1 col-sm-1 col-md-1 col-md-lg-1 yellow redondeo"></div>
	      <div class="col-xs-1 col-sm-1 col-md-1 col-md-lg-1 black redondeo"></div>
	      <div class="col-xs-1 col-sm-1 col-md-1 col-md-lg-1 yellow redondeo"></div>
	      <div class="col-xs-1 col-sm-1 col-md-1 col-md-lg-1 black redondeo"></div>
	      <div class="col-xs-1 col-sm-1 col-md-1 col-md-lg-1 yellow redondeo"></div>
	      <div class="col-xs-1 col-sm-1 col-md-1 col-md-lg-1 black redondeo"></div>
	      <div class="col-xs-1 col-sm-1 col-md-1 col-md-lg-1 yellow redondeo"></div>
		</div><!--hidden-xs-->
	</div>
	<!--FIN, CORTINILLA PC-->

	<!--CORTINILLA MOVIL-->
	<div class="container-first container visible-xs none-padding-left-rigth">
		<div class="row center-block cortinilla movil none-padding-left-rigth">
	      <div class="col-xs-2 col-sm-2 black redondeo"></div><!--col-xs-offset-1-->
	      <div class="col-xs-2 col-sm-2 yellow redondeo"></div>
	      <div class="col-xs-2 col-sm-2 black redondeo"></div>
	      <div class="col-xs-2 col-sm-2 yellow redondeo"></div>
	      <div class="col-xs-2 col-sm-2 black redondeo"></div>
	      <div class="col-xs-2 col-sm-2 yellow redondeo"></div>
		</div><!--hidden-xs-->
	</div>
	<!--FIN, CORTINILLA MOVIL-->

	<!--LOGO-->
	<section class="container logo">
		<div class="row">
			<div class="" style="width: auto;">
				<a href="http://amoresdetalles.com/" title="Amores Detalles">
	            	<img class="img-responsive" src="{{url()}}/public/img/logo/logo.png" style="margin:auto; width:90%;max-width: 402px; margin-top: 10px;">
	        	</a>
			</div>
		</div>
	</section>

	<div class="container-first container-fuid" style="width: 100%;">
		@include('admin.menu')
		@include('admin.popup-menu')
	</div>	
	<ul>
	<li>{{ $error }}</li>
</ul>
</body>
</html>