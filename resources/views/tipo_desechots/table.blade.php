<link href="http://tablefilter.free.fr/TableFilter/filtergrid.css" rel="stylesheet" >
    <script src="http://tablefilter.free.fr/TableFilter/tablefilter_all_min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<div class="input-group"> <span class="input-group-addon fa fa-search" aria-hidden="true"></span>
    <input id="tipoDesechots-table" type="text" class="form-control" placeholder="Buscar">
</div>
<section>
    <input type="button" class="btn btn-primary pull-right" style="margin-top: 5px;margin-bottom: 5px" onclick="printDiv('areaImprimir')" value="Generar Reporte" />
    </section>
<table class="table table-responsive" id="tipoDesechots-table ">
    <thead>
        <tr>
            <th>Nombre</th>
        <th>Descripción</th>
            <th colspan="3">Acciones</th>
        </tr>
    </thead>
    <tbody class="contenidobusqueda">
    @foreach($tipoDesechots as $tipoDesechot)
        <tr>
            <td>{!! $tipoDesechot->nombre !!}</td>
            <td>{!! $tipoDesechot->descripcion !!}</td>
            <td>
                {!! Form::open(['route' => ['tipoDesechots.destroy', $tipoDesechot->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    @if(Auth::user()->tipousuario_id===1)
                     <a href="{!! route('tipoDesechots.show', [$tipoDesechot->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tipoDesechots.edit', [$tipoDesechot->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
           {{--     {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Esta seguro de eliminar?')"]) !!}  --}} 
                    @else
					@if(Auth::user()->tipousuario_id===2)
				<a href="{!! route('tipoDesechots.show', [$tipoDesechot->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tipoDesechots.edit', [$tipoDesechot->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
					@else
				<a href="{!! route('tipoDesechots.show', [$tipoDesechot->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>

					@endif	
                    
                    @endif 
                   
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

<script>
var table2_Props = {
    col_0: "select",
    col_1: "select",
    col_2: "none",
    display_all_text: " [ Seleccionar ] ",
    sort_select: true
};
var tf2 = setFilterGrid("tipoDesechots-table ", table2_Props);
</script>
<!-- area de impresion -->
<div style="display:none;font-size:.5em"  id="areaImprimir" >
                <img src="https://upload.wikimedia.org/wikipedia/commons/f/ff/Logo_UTE.jpg" class="img-rounded" alt="Cinque Terre" width="60" height="60">
                <img src="http://www.pichincha.gob.ec/images/logo/logo2.png" class="img-rounded" alt="Cinque Terre">
                <img src="http://www.devbrain-it.net/wp-content/uploads/2018/07/logoPacto-1.jpg" class="img-rounded" alt="Cinque Terre"  height="40" >
    <h3><center>Reporte</center></h3>

<table id="tipoDesechots-table" <table style="font-family: Lucida Sans Unicode, Lucida Grande, Sans-Serif;
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
        <th>Descripción</th>
           
        </tr>
    </thead>
    <tbody class="contenidobusqueda">
    @foreach($tipoDesechots as $tipoDesechot)
    <tr style="font-size: 13px;
                font-weight: normal;
                padding: 8px;
                background: #b9c9fe;
                border-top: 4px solid #aabcfe;
                border-bottom: 1px solid #fff;
                color: #039;">
            <td>{!! $tipoDesechot->nombre !!}</td>
            <td>{!! $tipoDesechot->descripcion !!}</td>
        </tr>
    @endforeach
    </tbody>
</table>
<div class="card-footer text-muted footer">
        <footer class="main-footer" style="max-height: 100px;text-align: center">
            <strong>Copyright © 2018 <a href="#">UTE</a>.</strong> All rights reserved.
        </footer>
    </div>
    </div>
<script>
  $(document).ready(function () {
     $('#tipoDesechots-table').keyup(function () {
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
       var div1 = document.getElementById('biodigestors-table');
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