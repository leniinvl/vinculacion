<style>
    .active2:active {
  color: red;
}
</style>
<ul class="sidebar-menu tree" data-widget="tree">
    <li class="header">
        NAVEGADOR
    </li>
    {{--****Biodigestor****--}}
    <li class="treeview {{ Request::is('biodigestors*','desechos*','tipodesechos*') ? 'active' : '' }}">
        <a href="#">
            <i>
            </i>
            <span>
                Biodigestor
            </span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right">
                </i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class="{{ Request::is('biodigestors*') ? 'active' : '' }}">
                <a href="{!! route('biodigestors.index') !!}">
                    <i class="fa fa-building">
                    </i>
                    Biodigestores
                </a>
            </li>
            <li class="{{ Request::is('desechos*') ? 'active' : '' }}">
                <a href="{!! route('desechos.index') !!}">
                    <i class="fa fa-warning">
                    </i>
                    Desechos
                </a>
            </li>
            <li class="{{ Request::is('tipodesechos*') ? 'active' : '' }}">
                <a href="{!! route('tipodesechos.index') !!}">
                    <i class="glyphicon glyphicon-fire">
                    </i>
                    Tipo Desechos
                </a>
            </li>
        </ul>
    </li>
    {{--****Fin Biodigestor****--}}
    <li class="treeview">
        <span class="pull-right-container">
            <li class="{{ Request::is('manejoAmbientals*') ? 'active' : '' }}">
                <a href="{!! route('manejoAmbientals.index') !!}">
                    <i class="fa fa-globe">
                    </i>
                    Manejo Ambiental
                </a>
            </li>
        </span>
    </li>

    <li class="treeview">
        <span class="pull-right-container">
            <li class="{{ Request::is('unidadproduccions*') ? 'active' : '' }}">
                <a href="{!! route('unidadproduccions.index') !!}">
                    <i class="fa fa-gears">
                    </i>
                    Unidad de Producción
                </a>
            </li>
        </span>
    </li>
    <li class="treeview">
        <span class="pull-right-container">
            <li class="{{ Request::is('areainfluencias*') ? 'active' : '' }}">
                <a href="{!! route('areainfluencias.index') !!}">
                    <i class="fa fa-line-chart">
                    </i>
                    Área de Influencia
                </a>
            </li>
        </span>
    </li>

    <li class="treeview">
        <span class="pull-right-container">
            <li class="{{ Request::is('propietarios*') ? 'active' : '' }}">
                <a href="{!! route('propietarios.index') !!}">
                    <i class="fa fa-group">
                    </i>
                    Propietarios
                </a>
            </li>
        </span>
    </li>
    {{--****Plan Manejo Ambiental****--}}
    <li class="treeview {{ Request::is('tipoSuelos*','climas*','ecosistemas*','caracteristicasEtnicas*','paisajes*','religions*','lenguajes*','usoSuelos*','permeabilidadSuelos*') ? 'active' : '' }}">
        <a href="#">
            <i>
            </i>
            <span>
                Plan Manejo Ambiental
            </span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right">
                </i>
            </span>
        </a>
        <ul class="treeview-menu" style="">

          <li class="{{ Request::is('tipoProyectos*') ? 'active' : '' }}">
              <a href="{!! route('tipoProyectos.index') !!}">
                  <i class="fa fa-line-chart">
                  </i>
                  Tipo de Proyectos
              </a>
          </li>
          <li class="{{ Request::is('categoriaProyectos*') ? 'active' : '' }}">
              <a href="{!! route('categoriaProyectos.index') !!}">
                  <i class="fa fa-plus">
                  </i>
                  Categoría de Proyectos
              </a>
          </li>
           <li class="{{ Request::is('caracteristicasEtnicas*') ? 'active' : '' }}">
                <a href="{!! route('caracteristicasEtnicas.index') !!}">
                    <i class="fa fa-users">
                    </i>
                    Características Étnicas
                </a>
            </li>

            <li class="{{ Request::is('religions*') ? 'active' : '' }}">
                <a href="{!! route('religions.index') !!}">
                    <i class="fa fa-institution">
                    </i>
                    Religión
                </a>
            </li>
            <li class="{{ Request::is('lenguajes*') ? 'active' : '' }}">
                <a href="{!! route('lenguajes.index') !!}">
                    <i class="fa fa-language">
                    </i>
                    Lenguaje
                </a>
            </li>
            <li>
                <a>
                    SUELO
                </a>
            </li>
            <li class="{{ Request::is('tipoSuelos*') ? 'active' : '' }}">
                <a href="{!! route('tipoSuelos.index') !!}">
                    <i class="fa fa-road">
                    </i>
                    Tipos de Suelo
                </a>
            </li>
            <li class="{{ Request::is('usoSuelos*') ? 'active' : '' }}">
                <a href="{!! route('usoSuelos.index') !!}">
                    <i class="glyphicon glyphicon-filter">
                    </i>
                    Uso de Suelos
                </a>
            </li>
             <li class="{{ Request::is('permeabilidadSuelos*') ? 'active' : '' }}">
                <a href="{!! route('permeabilidadSuelos.index') !!}">
                    <i class="fa fa-bars">
                    </i>
                    <span>
                        Permeabilidad Suelos
                    </span>
                </a>
            </li>
            <li>
                <a>
                    AGUA
                </a>
            </li>
             <li class="{{ Request::is('condicionesDrenajes*') ? 'active' : '' }}">
                <a href="{!! route('condicionesDrenajes.index') !!}">
                    <i class="fa fa-stack-overflow">
                    </i>
                    <span>
                        Condiciones Drenajes
                    </span>
                </a>
            </li>
            <li>
                <a>
                    AIRE
                </a>
            </li>
            <li class="{{ Request::is('climas*') ? 'active' : '' }}">
                <a href="{!! route('climas.index') !!}">
                    <i class="fa fa-snowflake-o">
                    </i>
                    Clima
                </a>
            </li>
             <li>
                <a>
                    BIODIVERSIDAD
                </a>
            </li>
            <li class="{{ Request::is('ecosistemas*') ? 'active' : '' }}">
                <a href="{!! route('ecosistemas.index') !!}">
                    <i class="fa fa-cubes">
                    </i>
                    Ecosistema
                </a>
            </li>         
            <li class="{{ Request::is('tipoVegetals*') ? 'active' : '' }}">
                <a href="{!! route('tipoVegetals.index') !!}">
                    <i class="fa fa-lemon-o">
                    </i>
                    <span>
                        Tipos de Vegetales
                    </span>
                </a>
            </li>
        </ul>
    </li>
    {{--****Fin Plan Manejo Ambiental****--}}


    {{--****Plan de Gestion de Riesgos ****--}}
    <li class="treeview {{ Request::is('tipoAbonos*','tipoControlPlagas*','trabajadores*','pais*','ciudads*','tipoCultivos*','tipoAnimales*','precuarias*','destinos*','tipoProduccions*','tipoUnidads*','origenIngresos*','agriculturas*','amenazas*','vulnerabilidades*','planDeGestionDeRiesgos*') ? 'active' : '' }}">
        <a href="#">
            <i>
            </i>
            <span>
                Gestión de Riesgos
            </span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right">
                </i>
            </span>
        </a>
        <ul class="treeview-menu" style="">
            <li class="{{ Request::is('tipoAbonos*') ? 'active' : '' }}">
                <a href="{!! route('tipoAbonos.index') !!}">
                    <i class="fa fa-pagelines">
                    </i>
                    <span>
                        Tipos de Abonos
                    </span>
                </a>
            </li>
            <li class="{{ Request::is('tipoControlPlagas*') ? 'active' : '' }}">
                <a href="{!! route('tipoControlPlagas.index') !!}">
                    <i class="fa fa-bug">
                    </i>
                    <span>
                        Tipos de Control de Plagas
                    </span>
                </a>
            </li>
            <li class="{{ Request::is('trabajadores*') ? 'active' : '' }}">
                <a href="{!! route('trabajadores.index') !!}">
                    <i class="fa fa-users">
                    </i>
                    <span>
                        Trabajadores
                    </span>
                </a>
            </li>
            <li class="{{ Request::is('pais*') ? 'active' : '' }}">
                <a href="{!! route('pais.index') !!}">
                    <i class="fa fa-globe">
                    </i>
                    <span>
                        Paises
                    </span>
                </a>
            </li>
            <li class="{{ Request::is('ciudads*') ? 'active' : '' }}">
                <a href="{!! route('ciudads.index') !!}">
                    <i class="fa fa-map">
                    </i>
                    <span>
                        Ciudades
                    </span>
                </a>
            </li>
            <li class="{{ Request::is('tipoCultivos*') ? 'active' : '' }}">
                <a href="{!! route('tipoCultivos.index') !!}">
                    <i class="fa fa-tree">
                    </i>
                    <span>
                        Tipos de Cultivos
                    </span>
                </a>
            </li>
            <li class="{{ Request::is('tipoAnimales*') ? 'active' : '' }}">
                <a href="{!! route('tipoAnimales.index') !!}">
                    <i class="fa fa-paw">
                    </i>
                    <span>
                        Tipos de Animales
                    </span>
                </a>
            </li>
            <li class="{{ Request::is('precuarias*') ? 'active' : '' }}">
                <a href="{!! route('precuarias.index') !!}">
                    <i class="fa fa-first-order">
                    </i>
                    <span>
                        Precuarias
                    </span>
                </a>
            </li>
            <li class="{{ Request::is('destinos*') ? 'active' : '' }}">
                <a href="{!! route('destinos.index') !!}">
                    <i class="fa fa-location-arrow">
                    </i>
                    <span>
                        Destinos
                    </span>
                </a>
            </li>
            <li class="{{ Request::is('tipoProduccions*') ? 'active' : '' }}">
                <a href="{!! route('tipoProduccions.index') !!}">
                    <i class="fa fa-circle-o-notch">
                    </i>
                    <span>
                        Tipos de Producciones
                    </span>
                </a>
            </li>
            <li class="{{ Request::is('tipoUnidads*') ? 'active' : '' }}">
                <a href="{!! route('tipoUnidads.index') !!}">
                    <i class="fa fa-info">
                    </i>
                    <span>
                        Tipos de Unidades
                    </span>
                </a>
            </li>
            <li class="{{ Request::is('origenIngresos*') ? 'active' : '' }}">
                <a href="{!! route('origenIngresos.index') !!}">
                    <i class="fa fa-usd">
                    </i>
                    <span>
                        Orígenes de Ingresos
                    </span>
                </a>
            </li>
            <li class="{{ Request::is('agriculturas*') ? 'active' : '' }}">
                <a href="{!! route('agriculturas.index') !!}">
                    <i class="fa fa-envira">
                    </i>
                    <span>
                        Agriculturas
                    </span>
                </a>
            </li>
            <li class="{{ Request::is('amenazas*') ? 'active' : '' }}">
                <a href="{!! route('amenazas.index') !!}">
                    <i class="fa fa-fire">
                    </i>
                    <span>
                        Amenazas
                    </span>
                </a>
            </li>
            <li class="{{ Request::is('vulnerabilidades*') ? 'active' : '' }}">
                <a href="{!! route('vulnerabilidades.index') !!}">
                    <i class="fa fa-tint">
                    </i>
                    <span>
                        Vulnerabilidades
                    </span>
                </a>
            </li>
            <li class="{{ Request::is('planDeGestionDeRiesgos*') ? 'active' : '' }}">
                <a href="{!! route('planDeGestionDeRiesgos.index') !!}">
                    <i class="fa fa-book">
                    </i>
                    <span>
                        Planes de Gestion de Riesgos
                    </span>
                </a>
            </li>
        </ul>
        {{--****Fin Plan de Gestion de Riesgos****--}}

        {{--****Talleres***--}}
        <li class="treeview {{ Request::is('tallers*','tipoRiesgos*','tipoDesechos*') ? 'active' : '' }}">
            <a href="#">
                <i>
                </i>
                <span>
                    Talleres
                </span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right">
                    </i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li class="{{ Request::is('tallers*') ? 'active' : '' }}">
                    <a href="{!! route('tallers.index') !!}">
                        <i class="fa fa-book">
                        </i>
                        Talleres
                    </a>
                </li>
                <li class="{{ Request::is('desechots*') ? 'active' : '' }}">
                    <a href="{!! route('desechots.index') !!}">
                        <i class="fa fa-trash">
                        </i>
                        Desechos
                    </a>
                </li>
                <li class="{{ Request::is('tipoDesechots*') ? 'active' : '' }}">
                    <a href="{!! route('tipoDesechots.index') !!}">
                        <i class="fa fa-trash">
                        </i>
                        Tipo de Desechos
                    </a>
                </li>
            </ul>
        </li>
        {{--****Fin Talleres****--}}


        {{--****Linea Base****--}}
        <li class="treeview {{ Request::is('tipoProductos*','productos*') ? 'active' : '' }}">
            <a href="#">
                <i>
                </i>
                <span>
                    Productos
                </span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right">
                    </i>
                </span>
            </a>
            <ul class="treeview-menu" style="">
                <li class="{{ Request::is('tipoProductos*') ? 'active' : '' }}">
                    <a href="{!! route('tipoProductos.index') !!}">
                        <i class="fa fa-plus">
                        </i>
                        Agregar Productos
                    </a>
                </li>
                <li class="{{ Request::is('productos*') ? 'active' : '' }}">
                    <a href="{!! route('productos.index') !!}">
                        <i class="fa fa-product-hunt">
                        </i>
                        Productos
                    </a>
                </li>
            </ul>
        </li>
        <li class="treeview {{ Request::is('tipoAsociacions*','asociacions*') ? 'active' : '' }}">
            <a href="#">
                <i>
                </i>
                <span>
                    Asociación
                </span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right">
                    </i>
                </span>
            </a>
            <ul class="treeview-menu" style="">
                <li class="{{ Request::is('tipoAsociacions*') ? 'active' : '' }}">
                    <a href="{!! route('tipoAsociacions.index') !!}">
                        <i class="fa fa-plus">
                        </i>
                        Agregar Asociación
                    </a>
                </li>
                <li class="{{ Request::is('asociacions*') ? 'active' : '' }}">
                    <a href="{!! route('asociacions.index') !!}">
                        <i class="fa fa-handshake-o">
                        </i>
                        Asociación
                    </a>
                </li>
            </ul>
        </li>
        {{--****Fin Linea Base****--}}


{{--
        <li class="{{ Request::is('unidadproduccions*') ? 'active' : '' }}">
            <a href="{!! route('unidadproduccions.index') !!}">
                <i class="fa fa-edit">
                </i>
                <span>
                    Unidadproduccions
                </span>
            </a>
        </li>
        --}}

{{--
        <li class="{{ Request::is('topologias*') ? 'active' : '' }}">
            <a href="{!! route('topologias.index') !!}">
                <i class="fa fa-edit">
                </i>
                <span>
                    Topologias
                </span>
            </a>
        </li>
        --}}


{{--
        <li class="{{ Request::is('usosVegetacions*') ? 'active' : '' }}">
            <a href="{!! route('usosVegetacions.index') !!}">
                <i class="fa fa-edit">
                </i>
                <span>
                    Usos de la Vegetacion
                </span>
            </a>
        </li>
        --}}

{{--
        <li class="{{ Request::is('areaInfluenciaHasTipoFuentes*') ? 'active' : '' }}">
            <a href="{!! route('areaInfluenciaHasTipoFuentes.index') !!}">
                <i class="fa fa-edit">
                </i>
                <span>
                    Area Influencia Has Tipo Fuentes
                </span>
            </a>
        </li>
        <li class="{{ Request::is('areaInfluenciaHasTipoVegetals*') ? 'active' : '' }}">
            <a href="{!! route('areaInfluenciaHasTipoVegetals.index') !!}">
                <i class="fa fa-edit">
                </i>
                <span>
                    Area Influencia Has Tipo Vegetals
                </span>
            </a>
        </li>
        <li class="{{ Request::is('areaInfluenciaHasTopologias*') ? 'active' : '' }}">
            <a href="{!! route('areaInfluenciaHasTopologias.index') !!}">
                <i class="fa fa-edit">
                </i>
                <span>
                    Area Influencia Has Topologias
                </span>
            </a>
        </li>
        <li class="{{ Request::is('areaInfluenciaHasTradicions*') ? 'active' : '' }}">
            <a href="{!! route('areaInfluenciaHasTradicions.index') !!}">
                <i class="fa fa-edit">
                </i>
                <span>
                    Area Influencia Has Tradicions
                </span>
            </a>
        </li>
        --}}
        </li>
</ul>
