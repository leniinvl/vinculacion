


<style>
.active2:active {
  color: red;
}
</style>

<ul class="sidebar-menu tree" data-widget="tree">
        <li class="header">NAVEGADOR</li>
		
		{{--****Talleres***--}}
		
        <li class="treeview">
			<a href="#">
				<i></i> <span>Talleres</span>
				<span class="pull-right-container">
					<i class="fa fa-angle-left pull-right"></i>
				</span>
			</a>
			<ul class="treeview-menu" style="">
				<li class="active2"><a href="{!! route('tallers.index') !!}"><i class="fa fa-book"></i>Talleres</a></li>
				<li class="active2"><a href="{!! route('tipoRiesgos.index') !!}"><i class="fa fa-warning"></i>Riesgos</a></li>
				<li class="active2"><a href="{!! route('tipoDesechos.index') !!}"><i class="fa fa-trash"></i>Desechos</a></li>
			</ul>
        </li>
		
		{{--****Fin Talleres****--}}

		{{--****Biodigestor****--}}
		
		<li class="treeview">
			<span class="pull-right-container">
				<li class="active"><a href="{!! route('biodigestors.index') !!}"><i class="fa fa-building"></i>Biodigestores</a></li>
			</span>
        </li>
		
		{{--****Fin Biodigestor****--}}
		
		
		<li class="treeview">
			<span class="pull-right-container">
				<li class="active"><a href="{!! route('tipoProyectos.index') !!}"><i class="fa fa-line-chart"></i>Tipo de Proyectos</a></li>
			</span>
        </li>
		
		<li class="treeview">
			<span class="pull-right-container">
				<li class="active"><a href="{!! route('categoriaProyectos.index') !!}"><i class="fa fa-plus"></i>Categoria de Proyectos</a></li>
			</span>
        </li>
		
		<li class="treeview">
			<span class="pull-right-container">
				<li class="active"><a href="{!! route('manejoAmbientals.index') !!}"><i class="fa fa-globe"></i>Manejo Ambiental</a></li>
			</span>
        </li>
		
		<li class="treeview">
			<span class="pull-right-container">
				<li class="active"><a href="{!! route('areainfluencias.index') !!}"><i class="fa fa-line-chart"></i>Area de Influencia</a></li>
			</span>
        </li>
				
		<li class="treeview">
			<span class="pull-right-container">
				<li class="active"><a href="{!! route('unidadproduccions.index') !!}"><i class="fa fa-gears"></i>Unidad de Produccion</a></li>
			</span>
        </li>
		
		<li class="treeview">
			<span class="pull-right-container">
				<li class="active"><a href="{!! route('propietarios.index') !!}"><i class="fa fa-group"></i>Propietarios</a></li>
			</span>
        </li>

		{{--****Plan de Gestion de Riesgos ****--}}
		
		<li class="treeview">
			<a href="#">
				<i></i> <span>Gestion de Riesgos</span>
				<span class="pull-right-container">
					<i class="fa fa-angle-left pull-right"></i>
				</span>
			</a>
			<ul class="treeview-menu" style="">
				<li class="active"><a href="{!! route('tipoAbonos.index') !!}"><i class="fa fa-filter"></i>Abonos</a></li>
				<li><a href="{!! route('tipoControlPlagas.index') !!}"><i class="fa fa-bug"></i>Control de Plagas</a></li>
				<li><a href="{!! route('trabajadores.index') !!}"><i class="fa fa-group"></i>Trabajadores</a></li>
				<li><a href="{!! route('tipoCultivos.index') !!}"><i class="fa fa-tree"></i>Cultivos</a></li>
				<li><a href="{!! route('tipoAnimales.index') !!}"><i class="fa fa-paw"></i>Animales</a></li>
				<li><a href="{!! route('tipoAlimentosConsumos.index') !!}"><i class="fa fa-cutlery"></i>Alimentos de Consumo</a></li>
				<li><a href="{!! route('tipoAlimentos.index') !!}"><i class="fa fa-cutlery"></i>Alimentos</a></li>
				<li><a href="{!! route('origenIngresos.index') !!}"><i class="fa fa-money"></i>Origen de ingresos</a></li>
				<li><a href="{!! route('tipoAgriculturas.index') !!}"><i class="fa fa-anchor"></i>Agricultura</a></li>
				<li><a href="{!! route('grupoAlimentosProductos.index') !!}"><i class="ionicons ion-ios-nutrition"></i>Grupo de Alimentos</a></li>
				<li><a href="{!! route('planRiesgos.index') !!}"><i class="fa fa-exclamation-triangle"></i>Plan de Riesgos</a></li>
			</ul>
        </li>

		{{--****Fin Plan de Gestion de Riesgos****--}}


		{{--****Linea Base****--}}
		
		<li class="treeview">
			<a href="#">
				<i></i> <span>Productos</span>
				<span class="pull-right-container">
					<i class="fa fa-angle-left pull-right"></i>
				</span>
			</a>
			<ul class="treeview-menu" style="">
				<li class="active"><a href="{!! route('tipoProductos.index') !!}"><i class="fa fa-plus"></i>Agregar Productos</a></li>
				<li><a href="{!! route('tipoRiesgos.index') !!}"><i class="fa fa-product-hunt"></i>Productos</a></li>
			</ul>
        </li>
		
		<li class="treeview">
			<a href="#">
				<i></i> <span>Asociacion</span>
				<span class="pull-right-container">
					<i class="fa fa-angle-left pull-right"></i>
				</span>
			</a>
			<ul class="treeview-menu" style="">
				<li class="active"><a href="{!! route('tipoAsociacions.index') !!}"><i class="fa fa-plus"></i>Agregar Asociacion</a></li>
				<li><a href="{!! route('asociacions.index') !!}"><i class="fa fa-handshake-o"></i>Asociacion</a></li>
			</ul>
        </li>

		
		{{--****Fin Linea Base****--}}

		{{--****Plan Manejo Ambiental****--}}
		
		<li class="treeview">
			<a href="#">
				<i></i> <span>Manejo Ambiental</span>
				<span class="pull-right-container">
					<i class="fa fa-angle-left pull-right"></i>
				</span>
			</a>
			<ul class="treeview-menu" style="">
				<li class="active"><a href="{!! route('calidadAires.index') !!}"><i class="fa fa-snowflake-o"></i>Calidad del Aire</a></li>
				<li><a href="{!! route('tipoTerrenos.index') !!}"><i class="fa fa-road"></i>Agregar Tipo de terreno</a></li>
				<li><a href="{!! route('tipoSuelos.index') !!}"><i class="fa fa-road"></i>Agregar Tipo de Suelo</a></li>
				<li><a href="{!! route('calidadSuelos.index') !!}"><i class="fa fa-road"></i>Calidad de Suelo</a></li>
				<li><a href="{!! route('precipitaciones.index') !!}"><i class="fa fa-map"></i>Precipitaciones</a></li>
				<li><a href="{!! route('nivelDeTraficos.index') !!}"><i class="fa fa-car"></i>Nivel De Traficos</a></li>
				<li><a href="{!! route('permeabilidadSuelos.index') !!}"><i class="fa fa-snowflake-o"></i>Permeabilidad del Suelo</a></li>
				<li><a href="{!! route('climas.index') !!}"><i class="fa fa-snowflake-o"></i>Clima</a></li>
				<li><a href="{!! route('condicionesDrenajes.index') !!}"><i class="fa fa-ticket"></i>Condiciones de Drenaje</a></li>
				<li><a href="{!! route('ruidos.index') !!}"><i class="fa fa-volume-up"></i>Ruido</a></li>
				<li><a href="{!! route('recirculacionAires.index') !!}"><i class="fa fa-snowflake-o"></i>Recirculacion de Aire</a></li>
				<li><a href="{!! route('ecosistemas.index') !!}"><i class="fa fa-cubes"></i>Ecosistema</a></li>
				<li><a href="{!! route('organizacionSocials.index') !!}"><i class="fa fa-group"></i>Organizacion Social</a></li>
				<li><a href="{!! route('tendenciaTierras.index') !!}"><i class="fa fa-road"></i>Tendencia de Tierra</a></li>
				<li><a href="{!! route('abastecimientoaguas.index') !!}"><i class="fa fa-tint"></i>Abastecimiento de Agua</a></li>
				<li><a href="{!! route('evacuacionAguaLluvias.index') !!}"><i class="fa fa-tint"></i>Evacuacion de agua de<br/> &emsp; Lluvia</a></li>
				<li><a href="{!! route('caracteristicasEtnicas.index') !!}"><i class="fa fa-child"></i>Características Étnicas</a></li>
				<li><a href="{!! route('consolidacionAreaInfluencias.index') !!}"><i class="fa fa-edit"></i>Consolidacion de Area<br/> &emsp; de Influencias</a></li>
				<li><a href="{!! route('evacuacionAguasServidas.index') !!}"><i class="fa fa-tint"></i>Evacuación de Aguas<br/> &emsp; Servidas</a></li>
				<li><a href="{!! route('paisajes.index') !!}"><i class="fa fa-certificate"></i>Paisaje</a></li>
				<li><a href="{!! route('usosVegetacions.index') !!}"><i class="fa fa-globe"></i>Usos de Vegetacion</a></li>
				<li><a href="{!! route('tipoVegetals.index') !!}"><i class="fa fa-leaf"></i>Tipo Vegetales</a></li>
				<li><a href="{!! route('usoTierras.index') !!}"><i class="fa fa-leaf"></i>Uso de Tierra</a></li>
				<li><a href="{!! route('religions.index') !!}"><i class="fa fa-institution"></i>Religión</a></li>
				<li><a href="{!! route('lenguajes.index') !!}"><i class="fa fa-edit"></i>Lenguaje</a></li>
				<li><a href="{!! route('tradicions.index') !!}"><i class="fa fa-language"></i>Traducción</a></li>
				<li><a href="{!! route('tipoFuentes.index') !!}"><i class="fa fa-paint-brush"></i>Tipo de Fuente</a></li>
				<li><a href="{!! route('peligros.index') !!}"><i class="fa fa-warning"></i>Peligros</a></li>
				<li><a href="{!! route('topologias.index') !!}"><i class="fa fa-bullseye"></i>Topologías</a></li>
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





