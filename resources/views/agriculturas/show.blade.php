@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Agricultura
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('agriculturas.show_fields')
                    <a href="{!! route('agriculturas.index') !!}" class="btn btn-default">Atrás</a>
                </div>
            </div>
        </div>
    </div>
@endsection
