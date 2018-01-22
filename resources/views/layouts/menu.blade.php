<li class="{{ Request::is('asociacions*') ? 'active' : '' }}">
    <a href="{!! route('asociacions.index') !!}"><i class="fa fa-edit"></i><span>Asociaciones</span></a>
</li>

<li class="{{ Request::is('biodigestors*') ? 'active' : '' }}">
    <a href="{!! route('biodigestors.index') !!}"><i class="fa fa-edit"></i><span>Biodigestores</span></a>
</li>

<li class="{{ Request::is('areaInfluencias*') ? 'active' : '' }}">
    <a href="{!! route('areaInfluencias.index') !!}"><i class="fa fa-edit"></i><span>Area de influencia</span></a>
</li>

<li class="{{ Request::is('areainfluenciaHasUsotierras*') ? 'active' : '' }}">
    <a href="{!! route('areainfluenciaHasUsotierras.index') !!}"><i class="fa fa-edit"></i><span>Area de influencia (uso tierra)</span></a>
</li>

<li class="{{ Request::is('tallerHasTipoDesechos*') ? 'active' : '' }}">
    <a href="{!! route('tallerHasTipoDesechos.index') !!}"><i class="fa fa-edit"></i><span>Taller  Has  Tipo Desechos</span></a>
</li>

<li class="{{ Request::is('tallerHasTipoRiesgos*') ? 'active' : '' }}">
    <a href="{!! route('tallerHasTipoRiesgos.index') !!}"><i class="fa fa-edit"></i><span>Taller  Has  Tipo Riesgos</span></a>
</li>

<li class="{{ Request::is('tendenciaTierras*') ? 'active' : '' }}">
    <a href="{!! route('tendenciaTierras.index') !!}"><i class="fa fa-edit"></i><span>Tendencia Tierras</span></a>
</li>

<li class="{{ Request::is('tipoAbonos*') ? 'active' : '' }}">
    <a href="{!! route('tipoAbonos.index') !!}"><i class="fa fa-edit"></i><span>Tipo Abonos</span></a>
</li>

<li class="{{ Request::is('propietarios*') ? 'active' : '' }}">
    <a href="{!! route('propietarios.index') !!}"><i class="fa fa-edit"></i><span>Propietarios</span></a>
</li>

<li class="{{ Request::is('recirculacionAires*') ? 'active' : '' }}">
    <a href="{!! route('recirculacionAires.index') !!}"><i class="fa fa-edit"></i><span>Recirculacion Aires</span></a>
</li>

<li class="{{ Request::is('religions*') ? 'active' : '' }}">
    <a href="{!! route('religions.index') !!}"><i class="fa fa-edit"></i><span>Religions</span></a>
</li>

<li class="{{ Request::is('ruidos*') ? 'active' : '' }}">
    <a href="{!! route('ruidos.index') !!}"><i class="fa fa-edit"></i><span>Ruidos</span></a>
</li>

<li class="{{ Request::is('tallers*') ? 'active' : '' }}">
    <a href="{!! route('tallers.index') !!}"><i class="fa fa-edit"></i><span>Tallers</span></a>
</li>

<li class="{{ Request::is('unidadproduccions*') ? 'active' : '' }}">
    <a href="{!! route('unidadproduccions.index') !!}"><i class="fa fa-edit"></i><span>Unidadproduccions</span></a>
</li>

<li class="{{ Request::is('tradicions*') ? 'active' : '' }}">
    <a href="{!! route('tradicions.index') !!}"><i class="fa fa-edit"></i><span>Tradicions</span></a>
</li>

<li class="{{ Request::is('trabajadores*') ? 'active' : '' }}">
    <a href="{!! route('trabajadores.index') !!}"><i class="fa fa-edit"></i><span>Trabajadores</span></a>
</li>

<li class="{{ Request::is('topologias*') ? 'active' : '' }}">
    <a href="{!! route('topologias.index') !!}"><i class="fa fa-edit"></i><span>Topologias</span></a>
</li>

