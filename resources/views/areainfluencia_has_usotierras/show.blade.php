@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Area de influencia (Usotierra)
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('areainfluencia_has_usotierras.show_fields')
                    <a href="{!! route('areainfluenciaHasUsotierras.index') !!}" class="btn btn-default">Regresar</a>
                </div>
            </div>
        </div>
    </div>
@endsection
