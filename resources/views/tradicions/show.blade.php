@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tradiciones
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('tradicions.show_fields')
                    <a href="{!! route('tradicions.index') !!}" class="btn btn-default">Volver</a>
                </div>
            </div>
        </div>
    </div>
@endsection
