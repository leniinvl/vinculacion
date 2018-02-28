@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Area Influencia Has Tradicion
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('area_influencia_has_tradicions.show_fields')
                    <a href="{!! route('areaInfluenciaHasTradicions.index') !!}" class="btn btn-default">Volver</a>
                </div>
            </div>
        </div>
    </div>
@endsection
