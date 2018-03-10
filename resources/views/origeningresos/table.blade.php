<table class="table table-responsive" id="origeningresos-table">
    <thead>
        <tr>
            <th>Propietario Id</th>
        <th>Unidadproduccion Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($origeningresos as $origeningresos)
        <tr>
            <td>{!! $origeningresos->Propietario_id !!}</td>
            <td>{!! $origeningresos->UnidadProduccion_id !!}</td>
            <td>
                {!! Form::open(['route' => ['origeningresos.destroy', $origeningresos->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('origeningresos.show', [$origeningresos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('origeningresos.edit', [$origeningresos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>