<li class="{{ Request::is('asociacions*') ? 'active' : '' }}">
    <a href="{!! route('asociacions.index') !!}"><i class="fa fa-edit"></i><span>Asociacions</span></a>
</li>

<li class="{{ Request::is('productos*') ? 'active' : '' }}">
    <a href="{!! route('productos.index') !!}"><i class="fa fa-edit"></i><span>Productos</span></a>
</li>

<li class="{{ Request::is('precipitaciones*') ? 'active' : '' }}">
    <a href="{!! route('precipitaciones.index') !!}"><i class="fa fa-edit"></i><span>Precipitaciones</span></a>
</li>

<li class="{{ Request::is('planRiesgosHasTipoAlimentos*') ? 'active' : '' }}">
    <a href="{!! route('planRiesgosHasTipoAlimentos.index') !!}"><i class="fa fa-edit"></i><span>Plan Riesgos  Has  Tipo Alimentos</span></a>
</li>

<li class="{{ Request::is('planRiesgosHasTipoAnimales*') ? 'active' : '' }}">
    <a href="{!! route('planRiesgosHasTipoAnimales.index') !!}"><i class="fa fa-edit"></i><span>Plan Riesgos  Has  Tipo Animales</span></a>
</li>

<li class="{{ Request::is('planRiesgosHasTipoCultivos*') ? 'active' : '' }}">
    <a href="{!! route('planRiesgosHasTipoCultivos.index') !!}"><i class="fa fa-edit"></i><span>Plan Riesgos  Has  Tipo Cultivos</span></a>
</li>

