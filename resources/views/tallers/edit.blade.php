@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Taller
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <script type="text/javascript" src="{{asset('js/taller.js')}}"></script>
           <div class="box-body">
               <div class="row">
                   {!! Form::model($taller, ['route' => ['tallers.update', $taller->id], 'method' => 'patch' , 'files'=> true]) !!}

                        @include('tallers.edit_fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection