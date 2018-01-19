<li class="{{ Request::is('asociacions*') ? 'active' : '' }}">
    <a href="{!! route('asociacions.index') !!}"><i class="fa fa-edit"></i><span>Asociacions</span></a>
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

