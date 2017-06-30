<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es" class="ve-animate">
<head></head>
	<body>
		@include('visitors.master-visitors')

		<div class="container-fluid">

		<div class="col-xs-12 col-sm-12 col-md-3 col-md-lg-2">
			<ul class="padding-bottom-2 menu-view">
				<li class="margin-left-none"><span class="title-category">DIRECCIÓN</span></li>
				<li>
					<div class="input-group">
					  Av. las Trancas 2 A CP.91140<br>
					  Olmo y 1 de Mayo<br>
					  el Olmo col. Trancas. C.P. 91194<br>
					  Xalapa, Ver
					</div>
				</li>
				<li class="margin-left-none"><span class="title-category">HORARIOS DE ATENCIÓN</span></li>
					<li>
						<div class="input-group">
						  Lunes a Viernes
						</div>
					</li>
					<li>
						<div class="input-group">
						  15:00 a 20:00 Hrs
						</div>
					</li>
					<li>
						<div class="input-group">
						  Sábado
						</div>
					</li>
					<li>
						<div class="input-group">
						  10:00 a 14:00 Hrs
						</div>
					</li>
					<li class="margin-left-none"><span class="title-category">TELÉFONO</span></li>
					<li>
						<div class="input-group">
						  (228) 290692
						</div>
					</li>
					<li class="margin-left-none"><span class="title-category">EMAIL</span></li>
					<li>
						<div class="input-group">
						  compras@amoresdetalles.com
						</div>
					</li>
					<li>
						<div class="input-group">
						  servicio@amoresdetalles.com
						</div>
					</li>
					<li>
						<div class="input-group">
						  creacion@amoresdetalles.com
						</div>
					</li>
			</ul>
		</div>

		<div class="col-xs-12 col-sm-12 col-md-8 col-md-lg-10 container-mision container"> 
			<img src="{{url()}}/public/img/mapa/ubicacion-mapa.png" style="width:90%; max-width:602px;">
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-md-lg-12 container-mision container"> 
			<div class="btn btn-primary como-llegar" role="button">Cómo llegar</div>
		</div>

	</div>

		<script type="text/javascript">
		$(document).ready(function(){
			$(document).on('click','.como-llegar',function(){
				 window.open('https://wego.here.com/directions/mix//Amores-Detalles.-Scrapbook-Boutique,-Col.-El-Olmo,-Xalapa,-Mexico:e-eyJuYW1lIjoiQW1vcmVzIERldGFsbGVzLiBTY3JhcGJvb2sgQm91dGlxdWUiLCJhZGRyZXNzIjoiQ29sLiBFbCBPbG1vLCBYYWxhcGEtRW5yXHUwMGVkcXVleiIsImxhdGl0dWRlIjoxOS41MTA4MiwibG9uZ2l0dWRlIjotOTYuODY3MDcsInByb3ZpZGVyTmFtZSI6ImZhY2Vib29rIiwicHJvdmlkZXJJZCI6ODYzNjk0MDQ3MTA5MDk3fQ==?map=19.51082,-96.86707,15,normal&fb_locale=es_LA','_blank');
			});
		});
		</script>
	</body>
</html>
