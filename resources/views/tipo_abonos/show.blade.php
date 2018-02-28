@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tipo de Abono
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('tipo_abonos.show_fields')
                    <a href="{!! route('tipoAbonos.index') !!}" class="btn btn-default">Volver</a>
                </div>
            </div>
        </div>
    </div>
@endsection
