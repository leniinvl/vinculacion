@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Areainfluencia Has Religion
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'areainfluenciaHasReligions.store']) !!}

                        @include('areainfluencia_has_religions.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
