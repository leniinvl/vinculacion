@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Area de Influencia
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('area_influencias.show_fields')
                    <a href="{!! route('areaInfluencias.index') !!}" class="btn btn-default">Regresar</a>
                </div>
            </div>
        </div>
    </div>
@endsection
