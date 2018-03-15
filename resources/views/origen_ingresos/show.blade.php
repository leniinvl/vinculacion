@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Origen de Ingresos
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('origen_ingresos.show_fields')
                    <a href="{!! route('origenIngresos.index') !!}" class="btn btn-default">Atrás</a>
                </div>
            </div>
        </div>
    </div>
@endsection
