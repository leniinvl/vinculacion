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
<h1>Reportes de Origen de ingresos</h1>
<table class="table table-responsive" id="origenIngresos-table">
    <thead>
        <tr>
            <th>Nombre</th>
        <th>Unidad de Producción</th>
            <th>Propietario</th>
        </tr>
    </thead>
    <tbody>
    @foreach($origenIngresos as $origenIngresos)
        <tr>
            <td>{!! $origenIngresos->nombre !!}</td>
            <td>{!! $origenIngresos->unidadproduccion->nombre !!}</td>
            <td>{!! $origenIngresos->Propietario->nombre !!}</td>
        </tr>
    @endforeach
    </tbody>
</table>