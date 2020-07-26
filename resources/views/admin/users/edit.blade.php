@extends('adminlte::page')

@section('title', 'Editar Usuário')

@section('content_header')


<a href="{{ route('users.index') }}" class="btn btn-default"><i class="fa fa-arrow-left"></i></a><br/>
  
@endsection

@section('content')

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            <h4><i class="icon fas fa-ban"></i>
                Ops! Ocorreu um erro.                
            </h4>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li> 

        @endforeach
        </ul>
    </div>
@endif

@if (session('warning'))

<div class="alert alert-success alert-dismissible">
    <i class="icon fas fa-check"></i> 
    {{session('warning')}}   
</div>   
@endif

    <div class="card card-primary card-outline"> 
        <div class="card-header">
            <h3>    
                Editar Usuário<br/>    
            </h3> 
        </div>       
        <div class="card-body">
            <form action="{{ route('users.update', ['user'=>$user->id]) }}" class="form-horizontal" method="POST">
                @method('PUT')
                @csrf

            
                <div class="form-group row">
                    
            
                        <label class="col-sm-2 col-form-label">Nome Completo</label>       
                        <div class="col-sm-10">
                        <input name="name" value="{{$user->name}}" type="text" class="form-control @error('name') is-invalid @enderror">
                        </div>
                    
                </div>
            
                <div class="form-group row">
                    
            
                        <label class="col-sm-2 col-form-label">E-mail</label>       
                        <div class="col-sm-10">
                            <input name="email" value="{{$user->email}}" type="email" class="form-control @error('email') is-invalid @enderror">
                        </div>
                    
                </div>
            
                <div class="form-group row">
                    
            
                        <label class="col-sm-2 col-form-label">Nova Senha</label>       
                        <div class="col-sm-10">
                            <input class="form-control @error('password') is-invalid @enderror" type="password" name="password">
                        </div>
                    
                </div>
            
                <div class="form-group row">      
            
                        <label class="col-sm-2 col-form-label">Confirmar senha</label>       
                        <div class="col-sm-10">
                            <input class="form-control @error('password') is-invalid @enderror" type="password" name="password_confirmation">
                        </div>
                    
                </div>

                <div class="form-group row">      
            
            </div>
            
                <div class="form-group row">       
            
                        <label class="col-sm-2 col-form-label"></label>       
                        <div class="col-sm-10">                
                            <input type="submit" class="btn btn-success col-sm-2" value="SALVAR">
                        </div>
                    
                </div>
            
            </form>
        </div>        
    </div>
    
@endsection