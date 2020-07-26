@extends('adminlte::page')

@section('title', 'Novo Usuário')

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

<div class="card card-primary card-outline">
    <div class="card-header">
        <h3>
            Novo Usuário<br/>
        </h3>
    </div>
    <div>
        <div class="card-body">
            <form action="{{ route('users.store') }}" class="form-horizontal" method="POST">

                @csrf

                <div class="form-group row">


                        <label class="col-sm-2 col-form-label">Nome Completo</label>
                        <div class="col-sm-10">
                        <input name="name" value="{{old('name')}}" type="text" class="form-control @error('name') is-invalid @enderror">
                        </div>

                </div>

                <div class="form-group row">


                        <label class="col-sm-2 col-form-label">E-mail</label>
                        <div class="col-sm-10">
                            <input name="email" value="{{old('email')}}" type="email" class="form-control @error('email') is-invalid @enderror">
                        </div>

                </div>

                <div class="form-group row">


                        <label class="col-sm-2 col-form-label">Senha</label>
                        <div class="col-sm-10">
                            <input class="form-control @error('password') is-invalid @enderror" type="password" name="password">
                        </div>

                </div>

                <div class="form-group row">

                        <label class="col-sm-2 col-form-label">Confirmar Senha</label>
                        <div class="col-sm-10">
                            <input class="form-control @error('password') is-invalid @enderror" type="password" name="password_confirmation">
                        </div>

                </div>

                <div class="form-group row">

                        <label class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <input type="submit" class="btn btn-success col-sm-2" value="ADICIONAR">
                        </div>

                </div>

            </form>
        </div>
    </div>

@endsection
