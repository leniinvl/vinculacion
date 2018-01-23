@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tipo Producto
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('tipo_productos.show_fields')
                    <a href="{!! route('tipoProductos.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
