@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Condición de Drenaje
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('condiciones_drenajes.show_fields')
                    <a href="{!! route('condicionesDrenajes.index') !!}" class="btn btn-default">Volver</a>
                </div>
            </div>
        </div>
    </div>
@endsection
