<link href="http://tablefilter.free.fr/TableFilter/filtergrid.css" rel="stylesheet" >
    <script src="http://tablefilter.free.fr/TableFilter/tablefilter_all_min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<div style="overflow-x:auto;">
<div class="input-group"> <span class="input-group-addon fa fa-search" aria-hidden="true"></span>
    <input id="tallers-table" type="text" class="form-control" placeholder="Buscar">
</div>
<section>
    <input type="button" class="btn btn-primary pull-right" style="margin-top: 5px;margin-bottom: 5px" onclick="printDiv('areaImprimir')" value="Generar Reporte" />
    </section>

<table class="table table-responsive" id="tallers-table ">
    <thead>
        <tr>
            <th>Nombre</th>
        <th>Descripcion</th>
        <th>Riesgo</th>
        <th width="20%">Imágen</th>
        <th>Video</th>
        <th>Unidad de producción</th>
            <th colspan="3">Acciones</th>
        </tr>
    </thead>
    <tbody class="contenidobusqueda">
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
            <td>
                {!! Form::open(['route' => ['tallers.destroy', $taller->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    @if(Auth::user()->tipousuario_id===1)
                    <a href="{!! route('tallers.show', [$taller->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tallers.edit', [$taller->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>

                    
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Esta seguro de eliminar?')"]) !!}

                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Esta seguro de eliminar?')"]) !!})
                    @else
					@if(Auth::user()->tipousuario_id===2)
				<a href="{!! route('tallers.show', [$taller->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tallers.edit', [$taller->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
					@else
				<a href="{!! route('tallers.show', [$taller->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
					@endif	
                    
                    @endif 
                    

                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>


<script>
var table2_Props = {
    col_0: "select",
    col_1: "select",
    col_2: "select",
    col_3: "select",
    col_4: "select",
    col_5: "select",

    col_6: "none",
  
    display_all_text: " [ Seleccionar ] ",
    sort_select: true
};
var tf2 = setFilterGrid("tallers-table ", table2_Props);
</script>
<!-- area de impresion -->
<div style="display:none;font-size:.5em"  id="areaImprimir" >
                <img src="https://upload.wikimedia.org/wikipedia/commons/f/ff/Logo_UTE.jpg" class="img-rounded" alt="Cinque Terre" width="60" height="60">
                <img src="http://www.pichincha.gob.ec/images/logo/logo2.png" class="img-rounded" alt="Cinque Terre">
                <img src="http://www.devbrain-it.net/wp-content/uploads/2018/07/logoPacto-1.jpg" class="img-rounded" alt="Cinque Terre"  height="40" >
<h3><center>Reporte</center></h3>
<table id="tallers-table" style="font-family: Lucida Sans Unicode, Lucida Grande, Sans-Serif;
                font-size: 12px;
                width: 480px;
                margin-left: auto;
                margin-right: auto;
                border: 4px solid #aabcfe;
                background: #d0dafd">
    <thead>
        <tr style="font-size: 13px;
                font-weight: normal;
                padding: 8px;
                background: #b9c9fe;
                border-top: 4px solid #aabcfe;
                border-bottom: 1px solid #fff;
                color: #039;">
            <th>Nombre</th>
        <th style="background: #d0dafd;
                color: #339;">Descripcion</th>
        <th style="background: #d0dafd;
                color: #339;">Riesgo</th>
        <th style="background: #d0dafd;
                color: #339;" width="20%">Imágen</th>
        <th style="background: #d0dafd;
                color: #339;">Video</th>
        <th style="background: #d0dafd;
                color: #339;">Unidad de producción</th>
            
        </tr>
    </thead>
    <tbody class="contenidobusqueda">
    @foreach($tallers as $taller)
        <tr style="font-size: 13px;
                font-weight: normal;
                padding: 8px;
                background: #b9c9fe;
                border-top: 4px solid #aabcfe;
                border-bottom: 1px solid #fff;
                color: #039;">
            <td style=" padding: 8px;
                background: #e8edff;
                border-bottom: 1px solid #fff;
                color: #669;
                border-top: 1px solid transparent;">{!! $taller->nombre !!}</td>
            <td style=" padding: 8px;
                background: #e8edff;
                border-bottom: 1px solid #fff;
                color: #669;
                border-top: 1px solid transparent;">{!! $taller->descripcion !!}</td>
            <td style=" padding: 8px;
                background: #e8edff;
                border-bottom: 1px solid #fff;
                color: #669;
                border-top: 1px solid transparent;">{!! $taller->riesgo !!}</td>
            <td style=" padding: 8px;
                background: #e8edff;
                border-bottom: 1px solid #fff;
                color: #669;
                border-top: 1px solid transparent;">
                    @if($taller->imagen!=null)
                            <img class="img-responsive"  width="80%" height="30%" src="{!! $taller->imagen !!}"/></p>
                    @else
                        <div class="col-sm-12">
                        {!! $taller->imagen !!}
                        </div>
                    @endif
            </td>
            <td style=" padding: 8px;
                background: #e8edff;
                border-bottom: 1px solid #fff;
                color: #669;
                border-top: 1px solid transparent;">{!! $taller->video !!}</td>
            <td style=" padding: 8px;
                background: #e8edff;
                border-bottom: 1px solid #fff;
                color: #669;
                border-top: 1px solid transparent;">{!! $taller->unidadproduccion->nombre !!}</td>
          
        </tr>
    @endforeach
    </tbody>
</table>
<div class="card-footer text-muted footer" style="position: absolute;
                bottom: 0;
                width: 100%;
                height: 40px;" >
        <footer class="main-footer" style="max-height: 100px;text-align: center; ">
            <strong>Copyright © 2018 <a href="#">UTE</a>.</strong> All rights reserved.
        </footer>
    </div>
</div>
<script>

  $(document).ready(function () {
     $('#tallers-table').keyup(function () {
        var rex = new RegExp($(this).val(), 'i');
          $('.contenidobusqueda tr').hide();
          $('.contenidobusqueda tr').filter(function () {
              return rex.test($(this).text());
          }).show();

          })

  });
  </script>
  <script>
function printDiv(nombreDiv) {
        var contenido= document.getElementById(nombreDiv).innerHTML;
        var contenidoOriginal= document.body.innerHTML;
        location.reload();
        document.body.innerHTML = contenido;

        window.print();

        document.body.innerHTML = contenidoOriginal;
    }

    </script>
		 <script>
	   function cambiaVisibilidad() {
       var div1 = document.getElementById('tallers-table');
       var div2 = document.getElementById('areaImprimir');
       if(div2.style.display == 'block'){
           div2.style.display = 'none';
           div1.style.display = 'block';
       }else{
          div2.style.display = 'block';
          div1.style.display = 'none';
         }
   }

    </script>