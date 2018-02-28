@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Clima
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('climas.show_fields')
                    <a href="{!! route('climas.index') !!}" class="btn btn-default">Volver</a>
                </div>
            </div>
        </div>
    </div>
@endsection
