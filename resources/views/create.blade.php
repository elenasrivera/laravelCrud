@extends('layouts.main')
@section('content')
@if ($errors->any())
@foreach ($errors->all() as $error)
<div class="alert alert-danger" role="alert">
 {{$error}}
</div>
@endforeach
@endif
<!-- Default form login -->
<form class="text-center border border-light p-5" action="{{route('store')}}" method="POST">
{{ csrf_field() }}
    <p class="h4 mb-4">Alumno</p>
   

    <div class="form-row mb-4">
        <div class="col">
            <!-- Nombre -->
            <input type="text" id="defaultRegisterFormFirstName" class="form-control"  name = "nombre" placeholder="Nombre">
        </div>
   
        <div class="col">
            <!-- Apellidos -->
            <input type="text" id="defaultRegisterFormLasttName" class="form-control"  name = "apellidos" placeholder="Apellidos">
        </div>
       
            <!-- Email -->
            <input type="email" id="defaultLoginFormEmail" class="form-control mb-4"  name ="email" placeholder="E-mail">
        
            <!-- Telefono -->
            <input type="text" id="defaultLoginFormPassword" class="form-control" name="telefono" placeholder="Telefono">
       
       
            <!-- Sign in button -->
            <button class="btn btn-info btn-block" type="submit">Añadir</button>
       

   
</form>
<!-- Default form login -->
@endsection


    
   
 