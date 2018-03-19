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
            <th colspan="3">Acciones</th>
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
            <td>
                {!! Form::open(['route' => ['planDeGestionDeRiesgos.destroy', $planDeGestionDeRiesgos->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('planDeGestionDeRiesgos.show', [$planDeGestionDeRiesgos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('planDeGestionDeRiesgos.edit', [$planDeGestionDeRiesgos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
