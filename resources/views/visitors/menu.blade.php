<!--MENU EXPERIMENTAL-->
<a name="menu-ancla"></a>
<div class="bs-example black" data-example-id="inverted-navbar"> 
  <nav class="navbar navbar-inverse container custom-menu black" style="border: 0px solid #000000;"> 
    <div class="container-fluid"> 
      <div class="navbar-header"> 
        <button type="button" class="collapsed navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-9" aria-expanded="true"> 
          <span class="sr-only">Toggle navigation</span> 
          <span class="icon-bar"></span> 
          <span class="icon-bar"></span> 
          <span class="icon-bar"></span> 
        </button>
      </div> 
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-9"> 
        <ul class="nav navbar-nav"> 
          <li class="click-nav"><a href="/#menu-ancla">INICIO</a></li>
          <li class="nosotros-menu click-nav"><a href="{!! route('visitors.mision-valores') !!}/#menu-ancla">NOSOTROS</a></li> 
          <li class="eventos-especiales-menu click-nav"><a href="{!! route('visitors.bodas') !!}/#menu-ancla">EVENTOS ESPECIALES</a></li> 
          <li class="regalos-menu click-nav"><a href="{!! route('visitors.nina') !!}/#menu-ancla">REGALOS</a></li> 
          <li class="informacion-menu click-nav"><a href="{!! route('visitors.eventos') !!}/#menu-ancla">INFORMACIÓN</a></li> 
          <li class="contacto-menu click-nav"><a href="{!! route('visitors.contacto') !!}#menu-ancla">CONTACTO</a></li>
			<li class="contacto-menu click-nav"><a href="{!! route('visitors.login') !!}#menu-ancla">LOGIN</a></li>
				
        </ul> 
      </div> 
    </div> 
  </nav> 
</div>