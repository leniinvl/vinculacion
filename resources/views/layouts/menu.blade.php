<li class="{{ Request::is('asociacions*') ? 'active' : '' }}">
    <a href="{!! route('asociacions.index') !!}"><i class="fa fa-edit"></i><span>Asociacions</span></a>
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

