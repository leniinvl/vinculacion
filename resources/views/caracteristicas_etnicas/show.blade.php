@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Caracteristicas Etnicas
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('caracteristicas_etnicas.show_fields')
                    <a href="{!! route('caracteristicasEtnicas.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
