<table class="table table-responsive" id="origenIngresos-table">
    <thead>
        <tr>
            <th>Propietario Id</th>
        <th>Unidadproduccion Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($origenIngresos as $origenIngresos)
        <tr>
            <td>{!! $origenIngresos->Propietario_id !!}</td>
            <td>{!! $origenIngresos->UnidadProduccion_id !!}</td>
            <td>
                {!! Form::open(['route' => ['origenIngresos.destroy', $origenIngresos->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('origenIngresos.show', [$origenIngresos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('origenIngresos.edit', [$origenIngresos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>