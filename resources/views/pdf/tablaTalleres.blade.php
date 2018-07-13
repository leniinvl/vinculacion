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
<h1>Reporte de Talleres</h1>
<table class="table table-responsive" id="tallers-table">
    <thead>
        <tr>
            <th>Nombre</th>
        <th>Descripcion</th>
        <th>Riesgo</th>
        <th width="20%">Imágen</th>
        <th>Video</th>
        <th>Unidad de producción</th>
            
        </tr>
    </thead>
    <tbody>
    @foreach($tallers as $taller)
        <tr>
            <td>{!! $taller->nombre !!}</td>
            <td>{!! $taller->descripcion !!}</td>
            <td>{!! $taller->riesgo !!}</td>
            <td >
                    @if($taller->imagen!=null)
                            <img class="img-responsive"  width="80%" height="30%" src="{!! $taller->imagen !!}"/></p>
                    @else
                        <div class="col-sm-12">
                        {!! $taller->imagen !!}
                        </div>
                    @endif
            </td>
            <td>{!! $taller->video !!}</td>
            <td>{!! $taller->unidadproduccion->nombre !!}</td>
         
        </tr>
    @endforeach
    </tbody>
</table>