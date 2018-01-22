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

