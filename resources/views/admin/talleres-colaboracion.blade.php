<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es" class="ve-animate">
<head></head>
<body>

	@include('admin.master-admin')

	<div class="container">

		<div class="col-xs-12 col-sm-12 col-md-2 col-md-lg-2">
			<ul class="padding-bottom-2 menu-view">
				<li class="margin-left-none"><span class="title-category">-INFORMACIÓN-</span></li>
				<li class="margin-left-none"></li>
				<li class="margin-left-none"><span class="title-category">COMUNICACIÓN</span></li>
				<a href="{!! route('admin.eventos') !!}/#menu-ancla">
					<li>
						<div class="input-group">
						  &#8226;Eventos
						</div>
					</li>
				</a>
				<a href="{!! route('admin.medios') !!}/#menu-ancla">
					<li>
						<div class="input-group">
						  &#8226;Medios
						</div>
					</li>
				</a>
				<li class="margin-left-none"><span class="title-category">SCRABOOK</span></li>
				<a href="{!! route('admin.amoresdetalles') !!}/#menu-ancla">
					<li>
						<div class="input-group">
						  &#8226;Amores detalles
						</div>
					</li>
				</a>
				<a href="{!! route('admin.colaboraciones') !!}/#menu-ancla">
					<li>
						<div class="input-group">
						  &#8226;Colaboraciones
						</div>
					</li>
				</a>
				<li class="margin-left-none"><span class="title-category">TALLERES</span></li>
				<a href="{!! route('admin.presenciales') !!}/#menu-ancla">
					<li>
						<div class="input-group">
						  &#8226;Presenciales
						</div>
					</li>
				</a>
				<a href="{!! route('admin.online') !!}/#menu-ancla">
					<li>
						<div class="input-group">
						  &#8226;Online
						</div>
					</li>
				</a>
				<a href="{!! route('admin.tallercolaboraciones') !!}/#menu-ancla">
					<li class="subrayar">
						<div class="input-group">
						  &#8226;Colaboraciones
						</div>
					</li>
				</a>
			</ul>
		</div>

		<div class="col-xs-12 col-sm-12 col-md-10 col-md-lg-10">
			
		</div>
				<!--Más producto-->
	</div>
				
	
</body>
</html>
