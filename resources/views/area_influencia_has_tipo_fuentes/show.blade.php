@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Area Influencia Has Tipo Fuentes
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('area_influencia_has_tipo_fuentes.show_fields')
                    <a href="{!! route('areaInfluenciaHasTipoFuentes.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
