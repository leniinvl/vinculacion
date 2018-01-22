@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Areainfluencia Has Peligros
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'areainfluenciaHasPeligros.store']) !!}

                        @include('areainfluencia_has_peligros.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
