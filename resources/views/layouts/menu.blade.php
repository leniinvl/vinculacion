<li class="{{ Request::is('asociacions*') ? 'active' : '' }}">
    <a href="{!! route('asociacions.index') !!}"><i class="fa fa-edit"></i><span>Asociacions</span></a>
</li>

<li class="{{ Request::is('planRiesgos*') ? 'active' : '' }}">
    <a href="{!! route('planRiesgos.index') !!}"><i class="fa fa-edit"></i><span>Plan Riesgos</span></a>
</li>

<li class="{{ Request::is('planRiesgosHasGrupoAlimentosProductos*') ? 'active' : '' }}">
    <a href="{!! route('planRiesgosHasGrupoAlimentosProductos.index') !!}"><i class="fa fa-edit"></i><span>Plan Riesgos  Has  Grupo Alimentos Productos</span></a>
</li>

<li class="{{ Request::is('planRiesgosHasOrigenIngresos*') ? 'active' : '' }}">
    <a href="{!! route('planRiesgosHasOrigenIngresos.index') !!}"><i class="fa fa-edit"></i><span>Plan Riesgos  Has  Origen Ingresos</span></a>
</li>

<li class="{{ Request::is('planRiesgosHasTipoAgriculturas*') ? 'active' : '' }}">
    <a href="{!! route('planRiesgosHasTipoAgriculturas.index') !!}"><i class="fa fa-edit"></i><span>Plan Riesgos  Has  Tipo Agriculturas</span></a>
</li>

<li class="{{ Request::is('planRiesgosHasTipoAlimentos*') ? 'active' : '' }}">
    <a href="{!! route('planRiesgosHasTipoAlimentos.index') !!}"><i class="fa fa-edit"></i><span>Plan Riesgos  Has  Tipo Alimentos</span></a>
</li>

