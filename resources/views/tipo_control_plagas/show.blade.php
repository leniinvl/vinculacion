@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tipos de Control de Plagas
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('tipo_control_plagas.show_fields')
                    <a href="{!! route('tipoControlPlagas.index') !!}" class="btn btn-default">Volver</a>
                </div>
            </div>
        </div>
    </div>
@endsection
