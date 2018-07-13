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
</style>
<h1>Reporte de Propietarios</h1>
<table class="table table-responsive" style="border:1px solid black" id="propietarios-table">
    <thead>
        <tr>
            <th>CI</th>
        <th>Nombre</th>
        <th>Género</th>
        <th>Correo</th>
        <th>Fecha de Nacimiento</th>
        <th>Teléfono</th>
        <th>Observaciones</th>
        
        </tr>
    </thead>
    <tbody>
    @foreach($propietarios as $propietario)
        <tr>
            <td>{!! $propietario->ci !!}</td>
            <td>{!! $propietario->nombre !!}</td>
            <td>{!! $propietario->genero->nombre!!}</td>
            <td>{!! $propietario->correo !!}</td>
            <td>{!! $propietario->fechaNacimiento !!}</td>
            <td>{!! $propietario->telefono !!}</td>
            <td>{!! $propietario->observaciones !!}</td>
        </tr>
    @endforeach
    </tbody>
</table>