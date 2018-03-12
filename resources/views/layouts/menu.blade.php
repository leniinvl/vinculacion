


<style>
.active2:active {
  color: red;
}
</style>

<ul class="sidebar-menu tree" data-widget="tree">
        <li class="header">NAVEGADOR</li>

		{{--****Biodigestor****--}}

		<li class="treeview {{ Request::is('biodigestors*','desechos*','tipodesechos*') ? 'active' : '' }}">
			<a href="#">
				<i></i> <span>Biodigestor</span>
				<span class="pull-right-container">
					<i class="fa fa-angle-left pull-right"></i>
				</span>
			</a>
			<ul class="treeview-menu">
				<li class="{{ Request::is('biodigestors*') ? 'active' : '' }}"><a href="{!! route('biodigestors.index') !!}"><i class="fa fa-building"></i>Biodigestores</a></li>
				<li class="{{ Request::is('desechos*') ? 'active' : '' }}"><a href="{!! route('desechos.index') !!}"><i class="fa fa-warning"></i>Desechos</a></li>
				<li class="{{ Request::is('tipodesechos*') ? 'active' : '' }}"><a href="{!! route('tipodesechos.index') !!}"><i class="fa fa-warning"></i>Tipo Desechos</a></li>
			</ul>
        </li>

		{{--****Fin Biodigestor****--}}

		<li class="treeview">
			<span class="pull-right-container">
				<li class="{{ Request::is('manejoAmbientals*') ? 'active' : '' }}"><a href="{!! route('manejoAmbientals.index') !!}"><i class="fa fa-globe"></i>Manejo Ambiental</a></li>
			</span>
        </li>

		{{--****Talleres***--}}

        <li class="treeview {{ Request::is('tallers*','tipoRiesgos*','tipoDesechos*') ? 'active' : '' }}">
			<a href="#">
				<i></i> <span>Talleres</span>
				<span class="pull-right-container">
					<i class="fa fa-angle-left pull-right"></i>
				</span>
			</a>
			<ul class="treeview-menu">
				<li class="{{ Request::is('tallers*') ? 'active' : '' }}"><a href="{!! route('tallers.index') !!}"><i class="fa fa-book"></i>Talleres</a></li>
				<li class="{{ Request::is('tipoRiesgos*') ? 'active' : '' }}"><a href="{!! route('tipoRiesgos.index') !!}"><i class="fa fa-warning"></i>Riesgos</a></li>
				<li class="{{ Request::is('tipoDesechos*') ? 'active' : '' }}"><a href="{!! route('tipoDesechos.index') !!}"><i class="fa fa-trash"></i>Desechos</a></li>
			</ul>
        </li>

		{{--****Fin Talleres****--}}

        <li class="treeview">
			<span class="pull-right-container">
				<li class="{{ Request::is('unidadproduccions*') ? 'active' : '' }}"><a href="{!! route('unidadproduccions.index') !!}"><i class="fa fa-gears"></i>Unidad de Producción</a></li>
			</span>
        </li>

        <li class="treeview">
			<span class="pull-right-container">
				<li class="{{ Request::is('areainfluencias*') ? 'active' : '' }}"><a href="{!! route('areainfluencias.index') !!}"><i class="fa fa-line-chart"></i>Área de Influencia</a></li>
			</span>
        </li>


		<li class="treeview">
			<span class="pull-right-container">
				<li class="{{ Request::is('tipoProyectos*') ? 'active' : '' }}"><a href="{!! route('tipoProyectos.index') !!}"><i class="fa fa-line-chart"></i>Tipo de Proyectos</a></li>
			</span>
        </li>

		<li class="treeview">
			<span class="pull-right-container">
				<li class="{{ Request::is('categoriaProyectos*') ? 'active' : '' }}"><a href="{!! route('categoriaProyectos.index') !!}"><i class="fa fa-plus"></i>Categoría de Proyectos</a></li>
			</span>
        </li>

		<li class="treeview">
			<span class="pull-right-container">
				<li class="{{ Request::is('propietarios*') ? 'active' : '' }}"><a href="{!! route('propietarios.index') !!}"><i class="fa fa-group"></i>Propietarios</a></li>
			</span>
        </li>

		{{--****Plan de Gestion de Riesgos ****--}}

		<li class="treeview {{ Request::is('tipoAbonos*','tipoControlPlagas*','trabajadores*','tipoCultivos*','tipoAnimales*','origenIngresos*','tipoAgriculturas*','precuarias*','destinos*','tipoUnidads*','tipoProduccions*','amenazas*','vulnerabilidades*','ciudads*','pais*') ? 'active' : '' }}">
			<a href="#">
				<i></i> <span>Gestión de Riesgos</span>
				<span class="pull-right-container">
					<i class="fa fa-angle-left pull-right"></i>
				</span>
			</a>
			<ul class="treeview-menu" style="">
				<li class="{{ Request::is('tipoAbonos*') ? 'active' : '' }}"><a href="{!! route('tipoAbonos.index') !!}"><i class="fa fa-filter"></i>Abonos</a></li>
				<li class="{{ Request::is('tipoControlPlagas*') ? 'active' : '' }}"><a href="{!! route('tipoControlPlagas.index') !!}"><i class="fa fa-bug"></i>Control de Plagas</a></li>
				<li class="{{ Request::is('trabajadores*') ? 'active' : '' }}"><a href="{!! route('trabajadores.index') !!}"><i class="fa fa-group"></i>Trabajadores</a></li>
				<li class="{{ Request::is('tipoCultivos*') ? 'active' : '' }}"><a href="{!! route('tipoCultivos.index') !!}"><i class="fa fa-tree"></i>Cultivos</a></li>
				<li class="{{ Request::is('agriculturas*') ? 'active' : '' }}"><a href="{!! route('agriculturas.index') !!}"><i class="fa fa-envira"></i><span>Agricultura</span></a></li>
				<li class="{{ Request::is('tipoAnimales*') ? 'active' : '' }}"><a href="{!! route('tipoAnimales.index') !!}"><i class="fa fa-paw"></i>Animales</a></li>
				<li class="{{ Request::is('origenIngresos*') ? 'active' : '' }}"><a href="{!! route('origenIngresos.index') !!}"><i class="fa fa-money"></i>Origen de Ingresos</a></li>
				<li class="{{ Request::is('precuarias*') ? 'active' : '' }}"><a href="{!! route('precuarias.index') !!}"><i class="fa fa-shopping-basket"></i><span>Precuarias</span></a></li>
				<li class="{{ Request::is('destinos*') ? 'active' : '' }}"><a href="{!! route('destinos.index') !!}"><i class="fa fa-plane"></i><span>Destinos</span></a></li>
				<li class="{{ Request::is('tipoUnidads*') ? 'active' : '' }}"><a href="{!! route('tipoUnidads.index') !!}"><i class="fa fa-info"></i><span>Unidades</span></a></li>
				<li class="{{ Request::is('tipoProduccions*') ? 'active' : '' }}"><a href="{!! route('tipoProduccions.index') !!}"><i class="fa fa-industry"></i><span>Producción</span></a></li>
				<li class="{{ Request::is('amenazas*') ? 'active' : '' }}"><a href="{!! route('amenazas.index') !!}"><i class="fa fa-edit"></i><span>Amenazas</span></a></li>
				<li class="{{ Request::is('vulnerabilidades*') ? 'active' : '' }}"><a href="{!! route('vulnerabilidades.index') !!}"><i class="fa fa-edit"></i><span>Vulnerabilidades</span></a></li>
				<li class="{{ Request::is('ciudads*') ? 'active' : '' }}"><a href="{!! route('ciudads.index') !!}"><i class="fa fa-bank"></i><span>Ciudades</span></a></li>
				<li class="{{ Request::is('pais*') ? 'active' : '' }}"><a href="{!! route('pais.index') !!}"><i class="fa fa-road"></i><span>País</span></a></li>
				<li class="{{ Request::is('plandeGestiondeRiesgos*') ? 'active' : '' }}"><a href="{!! route('plandeGestiondeRiesgos.index') !!}"><i class="fa fa-pencil-square-o"></i><span>Plan de Gestión de Riesgos</span></a></li>
			</ul>
        </li>

		{{--****Fin Plan de Gestion de Riesgos****--}}


		{{--****Linea Base****--}}

		<li class="treeview {{ Request::is('tipoProductos*','productos*') ? 'active' : '' }}">
			<a href="#">
				<i></i> <span>Productos</span>
				<span class="pull-right-container">
					<i class="fa fa-angle-left pull-right"></i>
				</span>
			</a>
			<ul class="treeview-menu" style="">
				<li class="{{ Request::is('tipoProductos*') ? 'active' : '' }}"><a href="{!! route('tipoProductos.index') !!}"><i class="fa fa-plus"></i>Agregar Productos</a></li>
				<li class="{{ Request::is('productos*') ? 'active' : '' }}"><a href="{!! route('productos.index') !!}"><i class="fa fa-product-hunt"></i>Productos</a></li>
			</ul>
        </li>

		<li class="treeview {{ Request::is('tipoAsociacions*','asociacions*') ? 'active' : '' }}">
			<a href="#">
				<i></i> <span>Asociación</span>
				<span class="pull-right-container">
					<i class="fa fa-angle-left pull-right"></i>
				</span>
			</a>
			<ul class="treeview-menu" style="">
				<li class="{{ Request::is('tipoAsociacions*') ? 'active' : '' }}"><a href="{!! route('tipoAsociacions.index') !!}"><i class="fa fa-plus"></i>Agregar Asociación</a></li>
				<li class="{{ Request::is('asociacions*') ? 'active' : '' }}"><a href="{!! route('asociacions.index') !!}"><i class="fa fa-handshake-o"></i>Asociación</a></li>
			</ul>
        </li>


		{{--****Fin Linea Base****--}}

		{{--****Plan Manejo Ambiental****--}}

		<li class="treeview {{ Request::is('calidadAires*','tipoTerrenos*','tipoSuelos*','calidadSuelos*','precipitaciones*','nivelDeTraficos*','permeabilidadSuelos*','climas*','condicionesDrenajes*','ruidos*','recirculacionAires*','ecosistemas*','organizacionSocials*','tendenciaTierras*','abastecimientoaguas*','evacuacionAguaLluvias*','caracteristicasEtnicas*','consolidacionAreaInfluencias*','evacuacionAguasServidas*','paisajes*','usosVegetacions*','tipoVegetals*','usoTierras*','religions*','lenguajes*','tradicions*','tipoFuentes*','peligros*','topologias*') ? 'active' : '' }}">
			<a href="#">
				<i></i> <span>Manejo Ambiental</span>
				<span class="pull-right-container">
					<i class="fa fa-angle-left pull-right"></i>
				</span>
			</a>
			<ul class="treeview-menu" style="">
				<li class="{{ Request::is('calidadAires*') ? 'active' : '' }}"><a href="{!! route('calidadAires.index') !!}"><i class="fa fa-snowflake-o"></i>Calidad del Aire</a></li>
				<li class="{{ Request::is('tipoTerrenos*') ? 'active' : '' }}"><a href="{!! route('tipoTerrenos.index') !!}"><i class="fa fa-road"></i>Agregar Tipo de Terreno</a></li>
				<li class="{{ Request::is('tipoSuelos*') ? 'active' : '' }}"><a href="{!! route('tipoSuelos.index') !!}"><i class="fa fa-road"></i>Agregar Tipo de Suelo</a></li>
				<li class="{{ Request::is('calidadSuelos*') ? 'active' : '' }}"><a href="{!! route('calidadSuelos.index') !!}"><i class="fa fa-road"></i>Calidad de Suelo</a></li>
				<li class="{{ Request::is('precipitaciones*') ? 'active' : '' }}"><a href="{!! route('precipitaciones.index') !!}"><i class="fa fa-map"></i>Precipitaciones</a></li>
				<li class="{{ Request::is('nivelDeTraficos*') ? 'active' : '' }}"><a href="{!! route('nivelDeTraficos.index') !!}"><i class="fa fa-car"></i>Nivel De Tráficos</a></li>
				<li class="{{ Request::is('permeabilidadSuelos*') ? 'active' : '' }}"><a href="{!! route('permeabilidadSuelos.index') !!}"><i class="fa fa-snowflake-o"></i>Permeabilidad del Suelo</a></li>
				<li class="{{ Request::is('climas*') ? 'active' : '' }}"><a href="{!! route('climas.index') !!}"><i class="fa fa-snowflake-o"></i>Clima</a></li>
				<li class="{{ Request::is('condicionesDrenajes*') ? 'active' : '' }}"><a href="{!! route('condicionesDrenajes.index') !!}"><i class="fa fa-ticket"></i>Condiciones de Drenaje</a></li>
				<li class="{{ Request::is('ruidos*') ? 'active' : '' }}"><a href="{!! route('ruidos.index') !!}"><i class="fa fa-volume-up"></i>Ruido</a></li>
				<li class="{{ Request::is('recirculacionAires*') ? 'active' : '' }}"><a href="{!! route('recirculacionAires.index') !!}"><i class="fa fa-snowflake-o"></i>Recirculación de Aire</a></li>
				<li class="{{ Request::is('ecosistemas*') ? 'active' : '' }}"><a href="{!! route('ecosistemas.index') !!}"><i class="fa fa-cubes"></i>Ecosistema</a></li>
				<li class="{{ Request::is('organizacionSocials*') ? 'active' : '' }}"><a href="{!! route('organizacionSocials.index') !!}"><i class="fa fa-group"></i>Organización Social</a></li>
				<li class="{{ Request::is('tendenciaTierras*') ? 'active' : '' }}"><a href="{!! route('tendenciaTierras.index') !!}"><i class="fa fa-road"></i>Tendencia de Tierra</a></li>
				<li class="{{ Request::is('abastecimientoaguas*') ? 'active' : '' }}"><a href="{!! route('abastecimientoaguas.index') !!}"><i class="fa fa-tint"></i>Abastecimiento de Agua</a></li>
				<li class="{{ Request::is('evacuacionAguaLluvias*') ? 'active' : '' }}"><a href="{!! route('evacuacionAguaLluvias.index') !!}"><i class="fa fa-tint"></i>Evacuación de agua de<br/> &emsp; Lluvia</a></li>
				<li class="{{ Request::is('caracteristicasEtnicas*') ? 'active' : '' }}"><a href="{!! route('caracteristicasEtnicas.index') !!}"><i class="fa fa-child"></i>Características Étnicas</a></li>
				<li class="{{ Request::is('consolidacionAreaInfluencias*') ? 'active' : '' }}"><a href="{!! route('consolidacionAreaInfluencias.index') !!}"><i class="fa fa-edit"></i>Consolidación de Área<br/> &emsp; de Influencias</a></li>
				<li class="{{ Request::is('evacuacionAguasServidas*') ? 'active' : '' }}"><a href="{!! route('evacuacionAguasServidas.index') !!}"><i class="fa fa-tint"></i>Evacuación de Aguas<br/> &emsp; Servidas</a></li>
				<li class="{{ Request::is('paisajes*') ? 'active' : '' }}"><a href="{!! route('paisajes.index') !!}"><i class="fa fa-certificate"></i>Paisaje</a></li>
				<li class="{{ Request::is('usosVegetacions*') ? 'active' : '' }}"><a href="{!! route('usosVegetacions.index') !!}"><i class="fa fa-globe"></i>Usos de Vegetación</a></li>
				<li class="{{ Request::is('tipoVegetals*') ? 'active' : '' }}"><a href="{!! route('tipoVegetals.index') !!}"><i class="fa fa-leaf"></i>Tipos de Vegetales</a></li>
				<li class="{{ Request::is('usoTierras*') ? 'active' : '' }}"><a href="{!! route('usoTierras.index') !!}"><i class="fa fa-leaf"></i>Uso de Tierra</a></li>
				<li class="{{ Request::is('religions*') ? 'active' : '' }}"><a href="{!! route('religions.index') !!}"><i class="fa fa-institution"></i>Religión</a></li>
				<li class="{{ Request::is('lenguajes*') ? 'active' : '' }}"><a href="{!! route('lenguajes.index') !!}"><i class="fa fa-edit"></i>Lenguaje</a></li>
				<li class="{{ Request::is('tradicions*') ? 'active' : '' }}"><a href="{!! route('tradicions.index') !!}"><i class="fa fa-group"></i>Tradiciones</a></li>
				<li class="{{ Request::is('tipoFuentes*') ? 'active' : '' }}"><a href="{!! route('tipoFuentes.index') !!}"><i class="fa fa-paint-brush"></i>Tipo de Fuente</a></li>
				<li class="{{ Request::is('peligros*') ? 'active' : '' }}"><a href="{!! route('peligros.index') !!}"><i class="fa fa-warning"></i>Peligros</a></li>
				<li class="{{ Request::is('topologias*') ? 'active' : '' }}"><a href="{!! route('topologias.index') !!}"><i class="fa fa-bullseye"></i>Topologías</a></li>
			</ul>
        </li>



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
