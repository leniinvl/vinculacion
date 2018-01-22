<li class="{{ Request::is('asociacions*') ? 'active' : '' }}">
    <a href="{!! route('asociacions.index') !!}"><i class="fa fa-edit"></i><span>Asociacions</span></a>
</li>

<li class="{{ Request::is('evacuacionAguaLluvias*') ? 'active' : '' }}">
    <a href="{!! route('evacuacionAguaLluvias.index') !!}"><i class="fa fa-edit"></i><span>Evacuacion Agua Lluvias</span></a>
</li>

<li class="{{ Request::is('grupoAlimentosProductos*') ? 'active' : '' }}">
    <a href="{!! route('grupoAlimentosProductos.index') !!}"><i class="fa fa-edit"></i><span>Grupo Alimentos Productos</span></a>
</li>

<li class="{{ Request::is('lenguajes*') ? 'active' : '' }}">
    <a href="{!! route('lenguajes.index') !!}"><i class="fa fa-edit"></i><span>Lenguajes</span></a>
</li>

<li class="{{ Request::is('manejoAmbientals*') ? 'active' : '' }}">
    <a href="{!! route('manejoAmbientals.index') !!}"><i class="fa fa-edit"></i><span>Manejo Ambientals</span></a>
</li>

<li class="{{ Request::is('nivelDeTraficos*') ? 'active' : '' }}">
    <a href="{!! route('nivelDeTraficos.index') !!}"><i class="fa fa-edit"></i><span>Nivel De Traficos</span></a>
</li>

