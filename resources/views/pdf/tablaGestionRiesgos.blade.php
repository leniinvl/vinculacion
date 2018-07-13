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
<h1>Reporte de Gestion de Riesgos</h1>
<table class="table table-responsive" id="planDeGestionDeRiesgos-table">
    <thead>
        <tr>
            <th>Nombre</th>
        <th>Tipo de Abono</th>
        <th>Tipo de Control de Plaga</th>
        <th>Tipo de Cultivo</th>
        <th>Tipos de Animales</th>
        <th>Orígenes de Ingresos</th>
        <th>Agricultura</th>
        <th>Amenazas</th>
        <th>Vulnerabilidades</th>
         
        </tr>
    </thead>
    <tbody>
    @foreach($planDeGestionDeRiesgos as $planDeGestionDeRiesgos)
        <tr>
            <td>{!! $planDeGestionDeRiesgos->nombre !!}</td>
            <td>{!! $planDeGestionDeRiesgos->tipoabono->nombre!!}</td>
            <td>{!! $planDeGestionDeRiesgos->tipocontrolplaga->nombre !!}</td>
            <td>{!! $planDeGestionDeRiesgos->tipocultivos->nombre !!}</td>
            <td>
              @foreach($planDeGestionDeRiesgos->tipoanimales as $planRiesgosHasTipoAnimales)
                    <p>{!! $planRiesgosHasTipoAnimales->nombre !!}</p>
              @endforeach
            </td>
            <td>
              @foreach($planDeGestionDeRiesgos->origeningresos as $planRiesgosHasOrigenIngresos)
                    <p>{!! $planRiesgosHasOrigenIngresos->nombre !!}</p>
              @endforeach
            </td>
            <td>
              @foreach($planDeGestionDeRiesgos->agriculturas as $planRiesgosHasAgriculturas)
                    <p>{!! $planRiesgosHasAgriculturas->nombre !!}</p>
              @endforeach
            </td>
            <td>
              @foreach($planDeGestionDeRiesgos->amenazas as $planRiesgosHasAmenazas)
                    <p>{!! $planRiesgosHasAmenazas->nombre !!}</p>
              @endforeach
            </td>
             <td>
              @foreach($planDeGestionDeRiesgos->vulnerabilidades as $planRiesgosHasVulnerabilidades)
                    <p>{!! $planRiesgosHasVulnerabilidades->nombre !!}</p>
              @endforeach
            </td>
            
        </tr>
    @endforeach
    </tbody>
</table>
