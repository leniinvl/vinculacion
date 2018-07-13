<div style="overflow-x:auto;">
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
<h1>Reporte Biodigestor</h1>
<table class="table table-responsive" id="biodigestors-table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Tamaño Propiedad (m^2)</th>
            <th>Ancho Biodigestor (m)</th>
            <th>Altura Biodigestor (m)</th>
            <th>Radio Biodigestor (m)</th>
            <th>Profundidad Biodigestor (m)</th>
            <th>Volumen Biodigestor (m^3)</th>
            <th>Ancho Caja AD (m)</th>
            <th>Largo Caja AD (m)</th>
            <th>Profundidad Caja AD (m)</th>
            <th>Volumen Caja AD (m^3)</th>
            <th>Temperatura (°C)</th>
            <th>Unidad de Producción</th>
           
        </tr>
    </thead>
    <tbody>
    @foreach($biodigestors as $biodigestor)
        <tr>
            <td>{!! $biodigestor->ubicacion !!}</td>
            <td>{!! $biodigestor->tamañoPropiedad !!}</td>
            <td>{!! $biodigestor->anchoBio !!}</td>
            <td>{!! $biodigestor->largoBio !!}</td>
            <td>{!! $biodigestor->profundBio/2 !!}</td>
            <td>{!! $biodigestor->profundBio !!}</td>
            <td>{!! $biodigestor->profundBio/2 * $biodigestor->profundBio/2 * $biodigestor->largoBio * 3.141592654!!}</td>
            <td>{!! $biodigestor->anchoCaja !!}</td>
            <td>{!! $biodigestor->largoCaja !!}</td>
            <td>{!! $biodigestor->profundCaja !!}</td>
            <td>{!! $biodigestor->anchoCaja * $biodigestor->largoCaja * $biodigestor->profundCaja !!}</td>
            <td>{!! $biodigestor->temperatura !!}</td>
            <td>{!! $biodigestor->unidadproduccion->nombre !!}</td>
            
        </tr>
    @endforeach
    </tbody>
</table>
</div>