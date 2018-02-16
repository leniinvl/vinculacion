{{--****Talleres***--}}
        <button class="dropdown-btn " >Talleres
            <i class="fa fa-caret-down"></i>
        </button>
    <div class="dropdown-container">
        <li class="{{ Request::is('tallers*') ? 'active' : '' }}">
            <a href="{!! route('tallers.index') !!}"><i class="fa fa-book"></i><span>Talleres</span></a>
        </li>
        <li class="{{ Request::is('tipoRiesgos*') ? 'active' : '' }}">
            <a href="{!! route('tipoRiesgos.index') !!}"><i class="fa fa-warning"></i><span>Riesgos</span></a>
        </li>
        <li class="{{ Request::is('tipoDesechos*') ? 'active' : '' }}">
            <a href="{!! route('tipoDesechos.index') !!}"><i class="fa fa-trash"></i><span>Desechos</span></a>
        </li>
    </div>

    {{--****Fin Talleres****--}}

    {{--****Biodigestor****--}}
    <button class="dropdown-btn">Biodigestores
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <li class="{{ Request::is('biodigestors*') ? 'active' : '' }}">
            <a href="{!! route('biodigestors.index') !!}"><i class="fa fa-building"></i><span>Biodigestor</span></a>
        </li>
    </div>
    {{--****Fin Biodigestor****--}}

    {{--****Plan de Gestion de Riesgos ****--}}
    <button class="dropdown-btn">Gestion de Riesgos
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <li class="{{ Request::is('tipoAbonos*') ? 'active' : '' }}">
            <a href="{!! route('tipoAbonos.index') !!}"><i class="fa fa-filter"></i><span>Abonos</span></a>
        </li>
        <li class="{{ Request::is('tipoControlPlagas*') ? 'active' : '' }}">
            <a href="{!! route('tipoControlPlagas.index') !!}"><i class="fa fa-bug"></i><span>Control de Plagas</span></a>
        </li>
        <li class="{{ Request::is('trabajadores*') ? 'active' : '' }}">
            <a href="{!! route('trabajadores.index') !!}"><i class="fa fa-group"></i><span>Trabajadores</span></a>
        </li>
        <li class="{{ Request::is('tipoCultivos*') ? 'active' : '' }}">
            <a href="{!! route('tipoCultivos.index') !!}"><i class="fa fa-tree"></i><span>Cultivos</span></a>
        </li>
        <li class="{{ Request::is('tipoAnimales*') ? 'active' : '' }}">
            <a href="{!! route('tipoAnimales.index') !!}"><i class="fa fa-paw"></i><span>Animales</span></a>
        </li>
        <li class="{{ Request::is('tipoAlimentosConsumos*') ? 'active' : '' }}">
            <a href="{!! route('tipoAlimentosConsumos.index') !!}"><i class="fa fa-cutlery"></i><span>Alimentos de Consumo</span></a>
        </li>
        <li class="{{ Request::is('tipoAlimentos*') ? 'active' : '' }}">
            <a href="{!! route('tipoAlimentos.index') !!}"><i class="fa fa-cutlery"></i><span>Alimentos</span></a>
        </li>
        <li class="{{ Request::is('origenIngresos*') ? 'active' : '' }}">
            <a href="{!! route('origenIngresos.index') !!}"><i class="fa fa-money"></i><span>Origen de ingresos</span></a>
        </li>
        <li class="{{ Request::is('tipoAgriculturas*') ? 'active' : '' }}">
            <a href="{!! route('tipoAgriculturas.index') !!}"><i class="fa fa-anchor"></i><span>Agricultura</span></a>
        </li>
        <li class="{{ Request::is('grupoAlimentosProductos*') ? 'active' : '' }}">
            <a href="{!! route('grupoAlimentosProductos.index') !!}"><i class="ionicons ion-ios-nutrition"></i><span>Grupo de Alimentos</span></a>
        </li>
        <li class="{{ Request::is('planRiesgos*') ? 'active' : '' }}">
            <a href="{!! route('planRiesgos.index') !!}"><i class="fa fa-exclamation-triangle"></i><span>Plan de Riesgos</span></a>
        </li>

    </div>


    {{--****Fin Plan de Gestion de Riesgos****--}}


    {{--****Linea Base****--}}
    <button class="dropdown-btn">Línea Base
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <button class="dropdown-btn" id="submenu">Productos
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <li class="{{ Request::is('tipoProductos*') ? 'active' : '' }}">
                <a href="{!! route('tipoProductos.index') !!}"><i class="fa fa-plus"></i><span>Agregar Productos</span></a>
            </li>
            <li class="{{ Request::is('productos*') ? 'active' : '' }}">
                <a href="{!! route('productos.index') !!}"><i class="fa fa-product-hunt"></i><span>Productos</span></a>
            </li>
        </div>
        <button class="dropdown-btn" id="submenu">Asociaciones
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <li class="{{ Request::is('tipoAsociacions*') ? 'active' : '' }}">
                <a href="{!! route('tipoAsociacions.index') !!}"><i class="fa fa-plus"></i><span>Agregar Asociacion</span></a>
            </li>
            <li class="{{ Request::is('asociacions*') ? 'active' : '' }}">
                <a href="{!! route('asociacions.index') !!}"><i class="fa fa-handshake-o"></i><span>Asociacion</span></a>
            </li>
        </div>
        <li class="{{ Request::is('unidadproduccions*') ? 'active' : '' }}">
            <a href="{!! route('unidadproduccions.index') !!}"><i class="fa fa-gears"></i><span>Unidad de Produccion</span></a>
        </li>
        <li class="{{ Request::is('propietarios*') ? 'active' : '' }}">
            <a href="{!! route('propietarios.index') !!}"><i class="fa fa-group"></i><span>Propietarios</span></a>
        </li>
    </div>


    {{--****Fin Linea Base****--}}

    {{--****Plan Manejo Ambiental****--}}

    <button class="dropdown-btn">Manejo Ambiental
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <button class="dropdown-btn" id="submenu">Area de Influencia
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <li class="{{ Request::is('calidadAires*') ? 'active' : '' }}">
                <a href="{!! route('calidadAires.index') !!}"><i class="fa fa-snowflake-o"></i><span>Calidad del Aire</span></a>
            </li>
            <li class="{{ Request::is('tipoTerrenos*') ? 'active' : '' }}">
                <a href="{!! route('tipoTerrenos.index') !!}"><i class="fa fa-road"></i><span>Agregar Tipo de terreno</span></a>
            </li>
            <li class="{{ Request::is('tipoSuelos*') ? 'active' : '' }}">
                <a href="{!! route('tipoSuelos.index') !!}"><i class="fa fa-road"></i><span>Agregar Tipo de Suelo</span></a>
            </li>
            <li class="{{ Request::is('calidadSuelos*') ? 'active' : '' }}">
                <a href="{!! route('calidadSuelos.index') !!}"><i class="fa fa-road"></i><span>Calidad de Suelo</span></a>
            </li>
            <li class="{{ Request::is('precipitaciones*') ? 'active' : '' }}">
                <a href="{!! route('precipitaciones.index') !!}"><i class="fa fa-map"></i><span>Precipitaciones</span></a>
            </li>
            <li class="{{ Request::is('nivelDeTraficos*') ? 'active' : '' }}">
                <a href="{!! route('nivelDeTraficos.index') !!}"><i class="fa fa-car"></i><span>Nivel De Traficos</span></a>
            </li>
            <li class="{{ Request::is('permeabilidadSuelos*') ? 'active' : '' }}">
                <a href="{!! route('permeabilidadSuelos.index') !!}"><i class="fa fa-snowflake-o"></i><span>Permeabilidad del Suelo</span></a>
            </li>
            <li class="{{ Request::is('climas*') ? 'active' : '' }}">
                <a href="{!! route('climas.index') !!}"><i class="fa fa-snowflake-o"></i><span>Clima</span></a>
            </li>
            <li class="{{ Request::is('condicionesDrenajes*') ? 'active' : '' }}">
                <a href="{!! route('condicionesDrenajes.index') !!}"><i class="fa fa-ticket"></i><span>Condiciones de Drenaje</span></a>
            </li>
            <li class="{{ Request::is('ruidos*') ? 'active' : '' }}">
                <a href="{!! route('ruidos.index') !!}"><i class="fa fa-volume"></i><span>Ruido</span></a>
            </li>
            <li class="{{ Request::is('recirculacionAires*') ? 'active' : '' }}">
                <a href="{!! route('recirculacionAires.index') !!}"><i class="fa fa-snowflake-o"></i><span>Recirculacion de Aire</span></a>
            </li>
            <li class="{{ Request::is('ecosistemas*') ? 'active' : '' }}">
                <a href="{!! route('ecosistemas.index') !!}"><i class="fa fa-cubes"></i><span>Ecosistema</span></a>
            </li>
            <li class="{{ Request::is('organizacionSocials*') ? 'active' : '' }}">
                <a href="{!! route('organizacionSocials.index') !!}"><i class="fa fa-group"></i><span>Organizacion Social</span></a>
            </li>
            <li class="{{ Request::is('tendenciaTierras*') ? 'active' : '' }}">
                <a href="{!! route('tendenciaTierras.index') !!}"><i class="fa fa-road"></i><span>Tendencia de Tierra</span></a>
            </li>
            <li class="{{ Request::is('abastecimientoaguas*') ? 'active' : '' }}">
                <a href="{!! route('abastecimientoaguas.index') !!}"><i class="fa fa-tint"></i><span>Abastecimiento de agua</span></a>
            </li>
            <li class="{{ Request::is('evacuacionAguaLluvias*') ? 'active' : '' }}">
                <a href="{!! route('evacuacionAguaLluvias.index') !!}"><i class="fa fa-tint"></i><span>Evacuacion  de agua de lluvia</span></a>
            </li>
            <li class="{{ Request::is('caracteristicasEtnicas*') ? 'active' : '' }}">
                <a href="{!! route('caracteristicasEtnicas.index') !!}"><i class="fa fa-child"></i><span>Caracteristicas Etnicas</span></a>
            </li>
            <li class="{{ Request::is('consolidacionAreaInfluencias*') ? 'active' : '' }}">
                <a href="{!! route('consolidacionAreaInfluencias.index') !!}"><i class="fa fa-edit"></i><span>Consolidacion de Area de Influencias</span></a>
            </li>
            <li class="{{ Request::is('evacuacionAguasServidas*') ? 'active' : '' }}">
                <a href="{!! route('evacuacionAguasServidas.index') !!}"><i class="fa fa-tint"></i><span>Evacuacion de aguas servidas</span></a>
            </li>
            <li class="{{ Request::is('paisajes*') ? 'active' : '' }}">
                <a href="{!! route('paisajes.index') !!}"><i class="fa fa-certificate"></i><span>Paisaje</span></a>
            </li>
            <li class="{{ Request::is('usosVegetacions*') ? 'active' : '' }}">
                <a href="{!! route('usosVegetacions.index') !!}"><i class="fa fa-globe"></i><span>Usos de Vegetacion</span></a>
            </li>
            <li class="{{ Request::is('tipoVegetals*') ? 'active' : '' }}">
                <a href="{!! route('tipoVegetals.index') !!}"><i class="fa fa-leaf"></i><span>Tipo Vegetales</span></a>
            </li>
            <li class="{{ Request::is('usoTierras*') ? 'active' : '' }}">
                <a href="{!! route('usoTierras.index') !!}"><i class="fa fa-leaf"></i><span>Uso de Tierra</span></a>
            </li>
            <li class="{{ Request::is('religions*') ? 'active' : '' }}">
                <a href="{!! route('religions.index') !!}"><i class="fa fa-institution"></i><span>Religion</span></a>
            </li>
            <li class="{{ Request::is('lenguajes*') ? 'active' : '' }}">
                <a href="{!! route('lenguajes.index') !!}"><i class="fa fa-edit"></i><span>Lenguaje</span></a>
            </li>
            <li class="{{ Request::is('tradicions*') ? 'active' : '' }}">
                <a href="{!! route('tradicions.index') !!}"><i class="fa fa-language"></i><span>Tradicion</span></a>
            </li>
            <li class="{{ Request::is('tipoFuentes*') ? 'active' : '' }}">
                <a href="{!! route('tipoFuentes.index') !!}"><i class="fa fa-paint-brush"></i><span>Tipo de Fuente</span></a>
            </li>
            <li class="{{ Request::is('peligros*') ? 'active' : '' }}">
                <a href="{!! route('peligros.index') !!}"><i class="fa fa-warning"></i><span>Peligros</span></a>
            </li>
            <li class="{{ Request::is('topologias*') ? 'active' : '' }}">
                <a href="{!! route('topologias.index') !!}"><i class="fa fa-bullseye"></i><span>Topologias</span></a>
            </li>
        </div>
        <li class="{{ Request::is('tipoProyectos*') ? 'active' : '' }}">
            <a href="{!! route('tipoProyectos.index') !!}"><i class="fa fa-line-chart"></i><span>Tipo de Proyectos</span></a>
        </li>
        <li class="{{ Request::is('categoriaProyectos*') ? 'active' : '' }}">
            <a href="{!! route('categoriaProyectos.index') !!}"><i class="fa fa-plus"></i><span>Categoria de Proyectos</span></a>
        </li>


        <li class="{{ Request::is('manejoAmbientals*') ? 'active' : '' }}">
            <a href="{!! route('manejoAmbientals.index') !!}"><i class="fa fa-globe"></i><span>Manejo Ambiental</span></a>
        </li>
        <li class="{{ Request::is('areainfluencias*') ? 'active' : '' }}">
            <a href="{!! route('areainfluencias.index') !!}"><i class="fa fa-line-chart"></i><span>Area de Influencia</span></a>
        </li>
    </div>

{{--****Fin Plan Manejo Ambiental****--}}





{{--<li class="{{ Request::is('unidadproduccions*') ? 'active' : '' }}">
    <a href="{!! route('unidadproduccions.index') !!}"><i class="fa fa-edit"></i><span>Unidadproduccions</span></a>
</li>--}}

{{--<li class="{{ Request::is('topologias*') ? 'active' : '' }}">
    <a href="{!! route('topologias.index') !!}"><i class="fa fa-edit"></i><span>Topologias</span></a>
</li>--}}

{{--<li class="{{ Request::is('tradicions*') ? 'active' : '' }}">
    <a href="{!! route('tradicions.index') !!}"><i class="fa fa-edit"></i><span>Tradicions</span></a>
</li>--}}

{{--<li class="{{ Request::is('usosVegetacions*') ? 'active' : '' }}">
    <a href="{!! route('usosVegetacions.index') !!}"><i class="fa fa-edit"></i><span>Usos Vegetacions</span></a>
</li>--}}

{{--<li class="{{ Request::is('areaInfluenciaHasTipoFuentes*') ? 'active' : '' }}">
    <a href="{!! route('areaInfluenciaHasTipoFuentes.index') !!}"><i class="fa fa-edit"></i><span>Area Influencia Has Tipo Fuentes</span></a>
</li>

<li class="{{ Request::is('areaInfluenciaHasTipoVegetals*') ? 'active' : '' }}">
    <a href="{!! route('areaInfluenciaHasTipoVegetals.index') !!}"><i class="fa fa-edit"></i><span>Area Influencia Has Tipo Vegetals</span></a>
</li>

<li class="{{ Request::is('areaInfluenciaHasTopologias*') ? 'active' : '' }}">
    <a href="{!! route('areaInfluenciaHasTopologias.index') !!}"><i class="fa fa-edit"></i><span>Area Influencia Has Topologias</span></a>
</li>

<li class="{{ Request::is('areaInfluenciaHasTradicions*') ? 'active' : '' }}">
    <a href="{!! route('areaInfluenciaHasTradicions.index') !!}"><i class="fa fa-edit"></i><span>Area Influencia Has Tradicions</span></a>
</li>--}}





