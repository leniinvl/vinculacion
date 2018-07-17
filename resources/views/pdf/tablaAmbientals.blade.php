<style>
table {     
	font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
    font-size: 12px;    
	margin: 45px;     
	width: 480px; 
	text-align: left;    
	border-collapse: collapse; }

th {     
	font-size: 13px;     
	font-weight: normal;     
	padding: 8px;     
	background: #b9c9fe;
    border-top: 4px solid #aabcfe;    
	border-bottom: 1px solid #fff; 
	color: #039; }

td {    
	padding: 8px;     
	background: #e8edff;     
	border-bottom: 1px solid #fff;
    color: #669;    
	border-top: 1px solid transparent; }

tr:hover td { 
	background: #d0dafd; 
	color: #339; 
	}
h1 {   
	font-size:1.7em;
	font-weight: normal;
}
</style>
<h1>Reporte de Ambientales</h1>
<table class="table table-responsive" style="border:1px solid black" id="manejoAmbientals-table">
    <thead>
        <tr>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Tipo de Proyecto</th>
        <th>Categoria Proyecto</th>
        <th>Unidad Produccion</th>
        </tr>
    </thead>
    <tbody>
    @foreach($manejoAmbientals as $manejoAmbiental)
        <tr>
            <td>{!! $manejoAmbiental->nombre !!}</td>
            <td>{!! $manejoAmbiental->descripcion !!}</td>
            <td>{!! $manejoAmbiental->tipoproyecto->nombre !!}</td>
            <td>{!! $manejoAmbiental->categoriaproyecto->nombre !!}</td>
            <td>{!! $manejoAmbiental->unidadproduccion->nombre !!}</td>
        </tr>
    @endforeach
    </tbody>
</table>