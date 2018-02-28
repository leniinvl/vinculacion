@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Area de Influencia
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($areainfluencia, ['route' => ['areainfluencias.update', $areainfluencia->id], 'method' => 'patch']) !!}

                        @include('areainfluencias.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection