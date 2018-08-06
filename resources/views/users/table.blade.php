<table class="table table-responsive" id="users-table">
    <thead>
        <tr>
            <th>Nombre</th>
        <th>Email</th>
        <th>Tipousuario</th>
            <th colspan="3">Acción</th>
        </tr>
    </thead>
    <tbody>
    @foreach($users as $users)
        <tr>
            <td>{!! $users->name !!}</td>
            <td>{!! $users->email !!}</td>
           
            <td>{!! $users->tipousuario->nombre!!}</td>
            <td>
                {!! Form::open(['route' => ['users.destroy', $users->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    @if(Auth::user()->tipousuario_id===1)
                    <a href="{!! route('users.show', [$users->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('users.edit', [$users->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
<<<<<<< HEAD
                    @if($users->tipousuario->id!=1)

                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Está seguro/a?')"]) !!}
                    @endif 
                    @else
                     <a href="{!! route('users.show', [$users->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    @endif 
=======
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Está usted seguro?')"]) !!}
>>>>>>> 88abafdc107495e7312f163aa5e7ed66f1b49cf6
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>