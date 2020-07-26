@extends('adminlte::page')

@section('title', 'Configurações')

@section('content_header')
    <h1 class="card-body">Configurações</h1>
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
        <div class="card-body">
        <form action="{{route('settings.save')}}" method="POST" class="form-horizontal">
            @method('PUT')
            @csrf

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Título do Site</label>
                <div class="col-sm-10">
                <input type="text" name="title" value="{{$settings['title']}}" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Slogan</label>
                <div class="col-sm-10">
                    <input type="text" name="subtitle" value="{{$settings['subtitle']}}" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Título do Banner</label>
                <div class="col-sm-10">
                <input type="text" name="banner_title" value="{{$settings['banner_title']}}" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Subtítulo do Banner</label>
                <div class="col-sm-10">
                <input type="text" name="banner_subtitle" value="{{$settings['banner_subtitle']}}" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">facebook</label>
                <div class="col-sm-10">
                    <input type="text" name="facebook" value="{{$settings['facebook']}}" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Twitter</label>
                <div class="col-sm-10">
                    <input type="text" name="twitter" value="{{$settings['twitter']}}" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Instagram</label>
                <div class="col-sm-10">
                    <input type="text" name="instagram" value="{{$settings['instagram']}}" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Endereço</label>
                <div class="col-sm-10">
                    <input type="text" name="endereco" value="{{$settings['endereco']}}" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">E-mail para contato</label>
                <div class="col-sm-10">
                    <input type="email" name="email" value="{{$settings['email']}}" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Telefone</label>
                <div class="col-sm-10">
                    <input type="text" name="telefone" value="{{$settings['telefone']}}" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Whatsapp</label>
                <div class="col-sm-10">
                    <input type="text" name="whatsapp" value="{{$settings['whatsapp']}}" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Cor do fundo</label>
                <div class="col-sm-10">
                    <input type="color" name="bgcolor" value="{{$settings['bgcolor']}}" class="form-control" style="width: 70px">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Cor do texto</label>
                <div class="col-sm-10">
                    <input type="color" name="textcolor" value="{{$settings['textcolor']}}" class="form-control" style="width: 70px">
                </div>
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
