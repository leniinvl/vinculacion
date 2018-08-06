    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
   
         <div class="input-group"> <span class="input-group-addon fa fa-search" aria-hidden="true"></span>
            <input id="biodigestors-table" type="text" class="form-control" placeholder="Buscar">
            </div>
         <section>
            <input type="button" class="btn btn-primary pull-right" style="margin-top: 5px;margin-bottom: 5px" onclick="printDiv('areaImprimir')" value="Generar Reporte" />
            </section>

            <table class="table table-responsive" id="biodigestors-table ">
            <thead>
            <tr>
                <th>Nombre</th>
                <th>Tamaño Propiedad (m^2)</th>
                <th>Imagen</th>
                <th>Video</th>
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
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody class="contenidobusqueda">

        @foreach($biodigestors as $biodigestor)
            <tr>
                <td>{!! $biodigestor->ubicacion !!}</td>
                <td>{!! $biodigestor->tamañoPropiedad !!}</td>
                <td><img width="50px" src="{{ Storage::url($biodigestor->imagen) }}"/></td>
                <td>{!! $biodigestor->video !!}</td>
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
                <td>
                    {!! Form::open(['route' => ['biodigestors.destroy', $biodigestor->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        @if(Auth::user()->tipousuario_id===1)
                        <a href="{!! route('biodigestors.show', [$biodigestor->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('biodigestors.edit', [$biodigestor->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>


                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}

                        @else
                        @if(Auth::user()->tipousuario_id===2)
                     <a href="{!! route('biodigestors.show', [$biodigestor->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('biodigestors.edit', [$biodigestor->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        @else
                     <a href="{!! route('biodigestors.show', [$biodigestor->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        @endif

                        @endif


                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
        


    <!-- area de impresion -->
    <div style="display:none;font-size:.5em"  id="areaImprimir" >
                <img src="https://upload.wikimedia.org/wikipedia/commons/c/ce/UTE_new_logo.jpg" class="img-rounded" alt="Cinque Terre" width="60" height="60">
                <img src="http://www.pichincha.gob.ec/images/logo/logo2.png" class="img-rounded" alt="Cinque Terre">
                <img src="http://www.devbrain-it.net/wp-content/uploads/2018/07/logoPacto-1.jpg" class="img-rounded" alt="Cinque Terre"  height="40" >
    <h3><center>Reporte</center></h3>
    <table  id="biodigestors-table" style="font-family: Lucida Sans Unicode, Lucida Grande, Sans-Serif;
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
                <th style="background: #d0dafd;
                color: #339;">Nombre</th>
                <th style="background: #d0dafd;
                color: #339;">Tamaño Propiedad (m^2)</th>
                <th style="background: #d0dafd;
                color: #339;">Ancho Biodigestor (m)</th>
                <th style="background: #d0dafd;
                color: #339;">Altura Biodigestor (m)</th>
                <th style="background: #d0dafd;
                color: #339;">Radio Biodigestor (m)</th>
                <th style="background: #d0dafd;
                color: #339;">Profundidad Biodigestor (m)</th>
                <th style="background: #d0dafd;
                color: #339;">Volumen Biodigestor (m^3)</th>
                <th style="background: #d0dafd;
                color: #339;">Ancho Caja AD (m)</th>
                <th style="background: #d0dafd;
                color: #339;">Largo Caja AD (m)</th>
                <th style="background: #d0dafd;
                color: #339;">Profundidad Caja AD (m)</th>
                <th style="background: #d0dafd;
                color: #339;">Volumen Caja AD (m^3)</th>
                <th style="background: #d0dafd;
                color: #339;">Temperatura (°C)</th>
                <th style="background: #d0dafd;
                color: #339;">Unidad de Producción</th>
            </tr>
        </thead>
        <tbody class="contenidobusqueda">

        @foreach($biodigestors as $biodigestor)
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
                border-top: 1px solid transparent;">{!! $biodigestor->ubicacion !!}</td>
                <td style=" padding: 8px;
                background: #e8edff;
                border-bottom: 1px solid #fff;
                color: #669;
                border-top: 1px solid transparent;">{!! $biodigestor->tamañoPropiedad !!}</td>
                <td style=" padding: 8px;
                background: #e8edff;
                border-bottom: 1px solid #fff;
                color: #669;
                border-top: 1px solid transparent;">{!! $biodigestor->anchoBio !!}</td>
                <td style=" padding: 8px;
                background: #e8edff;
                border-bottom: 1px solid #fff;
                color: #669;
                border-top: 1px solid transparent;">{!! $biodigestor->largoBio !!}</td>
                <td style=" padding: 8px;
                background: #e8edff;
                border-bottom: 1px solid #fff;
                color: #669;
                border-top: 1px solid transparent;">{!! $biodigestor->profundBio/2 !!}</td>
                <td style=" padding: 8px;
                background: #e8edff;
                border-bottom: 1px solid #fff;
                color: #669;
                border-top: 1px solid transparent;">{!! $biodigestor->profundBio !!}</td>
                <td style=" padding: 8px;
                background: #e8edff;
                border-bottom: 1px solid #fff;
                color: #669;
                border-top: 1px solid transparent;">{!! $biodigestor->profundBio/2 * $biodigestor->profundBio/2 * $biodigestor->largoBio * 3.141592654!!}</td>
                <td style=" padding: 8px;
                background: #e8edff;
                border-bottom: 1px solid #fff;
                color: #669;
                border-top: 1px solid transparent;">{!! $biodigestor->anchoCaja !!}</td>
                <td style=" padding: 8px;
                background: #e8edff;
                border-bottom: 1px solid #fff;
                color: #669;
                border-top: 1px solid transparent;">{!! $biodigestor->largoCaja !!}</td>
                <td style=" padding: 8px;
                background: #e8edff;
                border-bottom: 1px solid #fff;
                color: #669;
                border-top: 1px solid transparent;">{!! $biodigestor->profundCaja !!}</td>
                <td style=" padding: 8px;
                background: #e8edff;
                border-bottom: 1px solid #fff;
                color: #669;
                border-top: 1px solid transparent;">{!! $biodigestor->anchoCaja * $biodigestor->largoCaja * $biodigestor->profundCaja !!}</td>
                <td style=" padding: 8px;
                background: #e8edff;
                border-bottom: 1px solid #fff;
                color: #669;
                border-top: 1px solid transparent;">{!! $biodigestor->temperatura !!}</td>
                <td style=" padding: 8px;
                background: #e8edff;
                border-bottom: 1px solid #fff;
                color: #669;
                border-top: 1px solid transparent;">{!! $biodigestor->unidadproduccion->nombre !!}</td>
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
    $('#biodigestors-table').keyup(function () {
        var rex = new RegExp($(this).val(), 'i');
            $('.contenidobusqueda tr').hide();
            $('.contenidobusqueda tr').filter(function () {
                return rex.test($(this).text());
            }).show();

            })

    });

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