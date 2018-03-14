@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Area Influencia
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($areaInfluencia, ['route' => ['areaInfluencias.update', $areaInfluencia->id], 'method' => 'patch']) !!}

                        @include('area_influencias.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection