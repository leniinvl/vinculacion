<table class="table table-responsive" id="planRiesgos-table">
    <thead>
        <tr>
            <th>Feriaagricola</th>
        <th>Semillaspropias</th>
        <th>Consumopropio</th>
        <th>Salariofuerafinca</th>
        <th>Productosgeneradosvendidos</th>
        <th>Tipoabono Id</th>
        <th>Tipocontrolplaga Id</th>
        <th>Unidadproduccion Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($planRiesgos as $planRiesgos)
        <tr>
            <td>{!! $planRiesgos->feriaAgricola !!}</td>
            <td>{!! $planRiesgos->semillasPropias !!}</td>
            <td>{!! $planRiesgos->ConsumoPropio !!}</td>
            <td>{!! $planRiesgos->salarioFueraFinca !!}</td>
            <td>{!! $planRiesgos->productosGeneradosVendidos !!}</td>
            <td>{!! $planRiesgos->tipoabono->nombre !!}</td>
            <td>{!! $planRiesgos->tipocontrolplaga->nombre !!}</td>
            <td>{!! $planRiesgos->UnidadProduccion_id !!}</td>
            <td>
                {!! Form::open(['route' => ['planRiesgos.destroy', $planRiesgos->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('planRiesgos.show', [$planRiesgos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('planRiesgos.edit', [$planRiesgos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>