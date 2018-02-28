@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Recirculacion Aire
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('recirculacion_aires.show_fields')
                    <a href="{!! route('recirculacionAires.index') !!}" class="btn btn-default">Volver</a>
                </div>
            </div>
        </div>
    </div>
@endsection
