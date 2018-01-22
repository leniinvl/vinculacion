@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Grupo Alimentos Productos
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('grupo_alimentos_productos.show_fields')
                    <a href="{!! route('grupoAlimentosProductos.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
