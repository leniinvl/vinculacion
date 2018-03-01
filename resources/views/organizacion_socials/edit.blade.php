@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Organización Social
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($organizacionSocial, ['route' => ['organizacionSocials.update', $organizacionSocial->id], 'method' => 'patch']) !!}

                        @include('organizacion_socials.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
