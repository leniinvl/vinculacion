<li class="{{ Request::is('asociacions*') ? 'active' : '' }}">
    <a href="{!! route('asociacions.index') !!}"><i class="fa fa-edit"></i><span>Asociaciones</span></a>
</li>

<li class="{{ Request::is('biodigestors*') ? 'active' : '' }}">
    <a href="{!! route('biodigestors.index') !!}"><i class="fa fa-edit"></i><span>Biodigestores</span></a>
</li>
{{--
<li class="{{ Request::is('areaInfluencias*') ? 'active' : '' }}">
    <a href="{!! route('areaInfluencias.index') !!}"><i class="fa fa-edit"></i><span>Area de influencia</span></a>
</li> --}}
{{--
<li class="{{ Request::is('areainfluenciaHasUsotierras*') ? 'active' : '' }}">
    <a href="{!! route('areainfluenciaHasUsotierras.index') !!}"><i class="fa fa-edit"></i><span>Area de influencia (uso tierra)</span></a>
</li> --}}

<li class="{{ Request::is('planRiesgos*') ? 'active' : '' }}">
    <a href="{!! route('planRiesgos.index') !!}"><i class="fa fa-edit"></i><span>Plan Riesgos</span></a>
</li>
{{--
<li class="{{ Request::is('planRiesgosHasGrupoAlimentosProductos*') ? 'active' : '' }}">
    <a href="{!! route('planRiesgosHasGrupoAlimentosProductos.index') !!}"><i class="fa fa-edit"></i><span>Plan Riesgos  Has  Grupo Alimentos Productos</span></a>
</li> --}}
{{--
<li class="{{ Request::is('planRiesgosHasOrigenIngresos*') ? 'active' : '' }}">
    <a href="{!! route('planRiesgosHasOrigenIngresos.index') !!}"><i class="fa fa-edit"></i><span>Plan Riesgos  Has  Origen Ingresos</span></a>
</li>

<li class="{{ Request::is('planRiesgosHasTipoAgriculturas*') ? 'active' : '' }}">
    <a href="{!! route('planRiesgosHasTipoAgriculturas.index') !!}"><i class="fa fa-edit"></i><span>Plan Riesgos  Has  Tipo Agriculturas</span></a>
</li> --}}

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

<li class="{{ Request::is('productos*') ? 'active' : '' }}">
    <a href="{!! route('productos.index') !!}"><i class="fa fa-edit"></i><span>Productos</span></a>
</li>

<li class="{{ Request::is('precipitaciones*') ? 'active' : '' }}">
    <a href="{!! route('precipitaciones.index') !!}"><i class="fa fa-edit"></i><span>Precipitaciones</span></a>
</li>
{{--
<li class="{{ Request::is('planRiesgosHasTipoAlimentos*') ? 'active' : '' }}">
    <a href="{!! route('planRiesgosHasTipoAlimentos.index') !!}"><i class="fa fa-edit"></i><span>Plan Riesgos  Has  Tipo Alimentos</span></a>
</li>

<li class="{{ Request::is('planRiesgosHasTipoAnimales*') ? 'active' : '' }}">
    <a href="{!! route('planRiesgosHasTipoAnimales.index') !!}"><i class="fa fa-edit"></i><span>Plan Riesgos  Has  Tipo Animales</span></a>
</li>

<li class="{{ Request::is('planRiesgosHasTipoCultivos*') ? 'active' : '' }}">
    <a href="{!! route('planRiesgosHasTipoCultivos.index') !!}"><i class="fa fa-edit"></i><span>Plan Riesgos  Has  Tipo Cultivos</span></a>
</li> --}}
{{--
<li class="{{ Request::is('tallerHasTipoDesechos*') ? 'active' : '' }}">
    <a href="{!! route('tallerHasTipoDesechos.index') !!}"><i class="fa fa-edit"></i><span>Taller  Has  Tipo Desechos</span></a>
</li>

<li class="{{ Request::is('tallerHasTipoRiesgos*') ? 'active' : '' }}">
    <a href="{!! route('tallerHasTipoRiesgos.index') !!}"><i class="fa fa-edit"></i><span>Taller  Has  Tipo Riesgos</span></a>
</li> --}}

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

<li class="{{ Request::is('tipoFuentes*') ? 'active' : '' }}">
    <a href="{!! route('tipoFuentes.index') !!}"><i class="fa fa-edit"></i><span>Tipo Fuentes</span></a>
</li>

<li class="{{ Request::is('tipoVegetals*') ? 'active' : '' }}">
    <a href="{!! route('tipoVegetals.index') !!}"><i class="fa fa-edit"></i><span>Tipo Vegetals</span></a>
</li>

<li class="{{ Request::is('topologias*') ? 'active' : '' }}">
    <a href="{!! route('topologias.index') !!}"><i class="fa fa-edit"></i><span>Topologias</span></a>
</li>

<li class="{{ Request::is('tradicions*') ? 'active' : '' }}">
    <a href="{!! route('tradicions.index') !!}"><i class="fa fa-edit"></i><span>Tradicions</span></a>
</li>

<li class="{{ Request::is('organizacionSocials*') ? 'active' : '' }}">
    <a href="{!! route('organizacionSocials.index') !!}"><i class="fa fa-edit"></i><span>Organizacion Socials</span></a>
</li>
{{--
<li class="{{ Request::is('planRiesgosHasOrigenIngresos*') ? 'active' : '' }}">
    <a href="{!! route('planRiesgosHasOrigenIngresos.index') !!}"><i class="fa fa-edit"></i><span>Plan Riesgos  Has  Origen Ingresos</span></a>
</li> --}}

<li class="{{ Request::is('paisajes*') ? 'active' : '' }}">
    <a href="{!! route('paisajes.index') !!}"><i class="fa fa-edit"></i><span>Paisajes</span></a>
</li>

<li class="{{ Request::is('peligros*') ? 'active' : '' }}">
    <a href="{!! route('peligros.index') !!}"><i class="fa fa-edit"></i><span>Peligros</span></a>
</li>

<li class="{{ Request::is('permeabilidadSuelos*') ? 'active' : '' }}">
    <a href="{!! route('permeabilidadSuelos.index') !!}"><i class="fa fa-edit"></i><span>Permeabilidad Suelos</span></a>
</li>

<li class="{{ Request::is('abastecimientoaguas*') ? 'active' : '' }}">
    <a href="{!! route('abastecimientoaguas.index') !!}"><i class="fa fa-edit"></i><span>Abastecimientoaguas</span></a>
</li>
{{--
<li class="{{ Request::is('areainfluencias*') ? 'active' : '' }}">
    <a href="{!! route('areainfluencias.index') !!}"><i class="fa fa-edit"></i><span>Areainfluencias</span></a>
</li> --}}

{{-- <li class="{{ Request::is('areainfluenciaHasLenguajes*') ? 'active' : '' }}">
    <a href="{!! route('areainfluenciaHasLenguajes.index') !!}"><i class="fa fa-edit"></i><span>Areainfluencia Has Lenguajes</span></a>
</li>

<li class="{{ Request::is('areainfluenciaHasPeligros*') ? 'active' : '' }}">
    <a href="{!! route('areainfluenciaHasPeligros.index') !!}"><i class="fa fa-edit"></i><span>Areainfluencia Has Peligros</span></a>
</li>

<li class="{{ Request::is('areainfluenciaHasReligions*') ? 'active' : '' }}">
    <a href="{!! route('areainfluenciaHasReligions.index') !!}"><i class="fa fa-edit"></i><span>Areainfluencia Has Religions</span></a>
</li> --}}

<li class="{{ Request::is('usoTierras*') ? 'active' : '' }}">
    <a href="{!! route('usoTierras.index') !!}"><i class="fa fa-edit"></i><span>Uso Tierras</span></a>
</li>
{{--
<li class="{{ Request::is('usosVegetacionHasAreaInfluenciaHasTipovegetals*') ? 'active' : '' }}">
    <a href="{!! route('usosVegetacionHasAreaInfluenciaHasTipovegetals.index') !!}"><i class="fa fa-edit"></i><span>Usos Vegetacion  Has  Area Influencia  Has  Tipovegetals</span></a>
</li> --}}

<li class="{{ Request::is('usosVegetacions*') ? 'active' : '' }}">
    <a href="{!! route('usosVegetacions.index') !!}"><i class="fa fa-edit"></i><span>Usos Vegetacions</span></a>
</li>

<li class="{{ Request::is('usosVegetacions*') ? 'active' : '' }}">
    <a href="{!! route('usosVegetacions.index') !!}"><i class="fa fa-edit"></i><span>Usos Vegetacions</span></a>
</li>
{{-- 
<li class="{{ Request::is('unidadProduccionHasPropietarios*') ? 'active' : '' }}">
    <a href="{!! route('unidadProduccionHasPropietarios.index') !!}"><i class="fa fa-edit"></i><span>Unidad Produccion  Has  Propietarios</span></a>
</li> --}}
<li class="{{ Request::is('tipoAsociacions*') ? 'active' : '' }}">
    <a href="{!! route('tipoAsociacions.index') !!}"><i class="fa fa-edit"></i><span>Tipo Asociacions</span></a>
</li>

