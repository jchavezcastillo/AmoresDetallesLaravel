<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es" class="ve-animate">
<head></head>
<body>

	@include('admin.master-admin')

	<div class="container">

		<div class="col-xs-12 col-sm-12 col-md-2 col-md-lg-2">
			<ul class="padding-bottom-2 menu-view">
				<li class="margin-left-none"><span class="title-category">EVENTOS ESPECIALES</span></li>
				<a href="{!! route('admin.bodas') !!}/#menu-ancla">
					<li>
						<div class="input-group">
						  &#8226;Bodas
						</div>
					</li>
				</a>
				<a href="{!! route('admin.aniversarios') !!}/#menu-ancla">
					<li>
						<div class="input-group">
						  &#8226;Aniversarios
						</div>
					</li>
				</a>
				<a href="{!! route('admin.despedidadesolteras') !!}/#menu-ancla">
					<li>
						<div class="input-group">
						  &#8226;Despedida de solteras
						</div>
					</li>
				</a>
				<a href="{!! route('admin.quinceanios') !!}/#menu-ancla">
					<li>
						<div class="input-group">
						  &#8226;XV años
						</div>
					</li>
				</a>
				<a href="{!! route('admin.babyshower') !!}/#menu-ancla">
					<li>
						<div class="input-group">
						  &#8226;Baby shower
						</div>
					</li>
				</a>
				<a href="{!! route('admin.bautizos') !!}/#menu-ancla">
					<li>
						<div class="input-group">
						  &#8226;Bautizos
						</div>
					</li>
				</a>
				<a href="{!! route('admin.confirmacion') !!}/#menu-ancla">
					<li>
						<div class="input-group">
						  &#8226;Confirmación
						</div>
					</li>
				</a>
				<a href="{!! route('admin.primeracomunion') !!}/#menu-ancla">
					<li>
						<div class="input-group">
						  &#8226;Primera comunión
						</div>
					</li>
				</a>
				<a href="{!! route('admin.graduaciones') !!}/#menu-ancla">
					<li>
						<div class="input-group">
						  &#8226;Graduaciones
						</div>
					</li>
				</a>
				<a href="{!! route('admin.cumpleanos') !!}/#menu-ancla">
					<li class="subrayar">
						<div class="input-group">
						  &#8226;Cumpleaños
						</div>
					</li>
				</a>
			</ul>
		</div>

		<div class="col-xs-12 col-sm-12 col-md-10 col-md-lg-10">
			<div class="row"> 
					
				<div class="col-xs-12 col-sm-12 col-md-4 col-md-lg-4"> 
					<div class="thumbnail"> 
						<img alt="100%x200" data-src="holder.js/100%x200" style="height: 200px; width: 100%; display: block;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMjQyIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDI0MiAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MjAwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTVjNmE2NzgzNjUgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMnB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNWM2YTY3ODM2NSI+PHJlY3Qgd2lkdGg9IjI0MiIgaGVpZ2h0PSIyMDAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSI4OS44MDQ2ODc1IiB5PSIxMDUuMSI+MjQyeDIwMDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true"> 
						<div class="caption"> 
							<h3>Nombre del producto ...</h3> 
								<p>Descripción ....</p> 
								<p><a href="#" class="btn btn-primary" role="button">Solicitud de compra</a></p> 
						</div> 
					</div> 
				</div> 

				<div class="col-xs-12 col-sm-12 col-md-4 col-md-lg-4"> 
					<div class="thumbnail"> 
						<img alt="100%x200" data-src="holder.js/100%x200" style="height: 200px; width: 100%; display: block;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMjQyIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDI0MiAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MjAwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTVjNmE2NzgzNjUgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMnB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNWM2YTY3ODM2NSI+PHJlY3Qgd2lkdGg9IjI0MiIgaGVpZ2h0PSIyMDAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSI4OS44MDQ2ODc1IiB5PSIxMDUuMSI+MjQyeDIwMDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true"> 
						<div class="caption"> 
							<h3>Nombre del producto ...</h3> 
								<p>Descripción ....</p> 
								<p><a href="#" class="btn btn-primary" role="button">Solicitud de compra</a></p> 
						</div> 
					</div> 
				</div> 

				<div class="col-xs-12 col-sm-12 col-md-4 col-md-lg-4"> 
					<div class="thumbnail"> 
						<img alt="100%x200" data-src="holder.js/100%x200" style="height: 200px; width: 100%; display: block;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMjQyIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDI0MiAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MjAwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTVjNmE2NzgzNjUgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMnB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNWM2YTY3ODM2NSI+PHJlY3Qgd2lkdGg9IjI0MiIgaGVpZ2h0PSIyMDAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSI4OS44MDQ2ODc1IiB5PSIxMDUuMSI+MjQyeDIwMDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true"> 
						<div class="caption"> 
							<h3>Nombre del producto ...</h3> 
								<p>Descripción ....</p> 
								<p><a href="#" class="btn btn-primary" role="button">Solicitud de compra</a></p> 
						</div> 
					</div> 
				</div> 

			</div>
		</div>
				<!--Más producto-->
	</div>
				
	
</body>
</html>
