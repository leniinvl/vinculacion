@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Unidad Produccion  Has  Propietario
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('unidad_produccion__has__propietarios.show_fields')
                    <a href="{!! route('unidadProduccionHasPropietarios.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
