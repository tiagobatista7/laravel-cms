@extends('adminlte::page')

@section('title', 'Editar Página')

@section('content_header')


<a href="{{ route('pages.index') }}" class="btn btn-default"><i class="fa fa-arrow-left"></i></a><br/>

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
            <h4 class="card-body">
                Editar Página<br/>
            </h4>
        </div>
        <div class="card-body">
            <form action="{{ route('pages.update', ['page'=>$page->id]) }}" class="form-horizontal" method="POST">
                @method('PUT')
                @csrf


                <div class="form-group row">


                        <label class="col-sm-2 col-form-label">Título</label>
                        <div class="col-sm-10">
                        <input name="title" value="{{$page->title}}" type="text" class="form-control @error('title') is-invalid @enderror">
                        </div>

                </div>

                <div class="form-group row">


                        <label class="col-sm-2 col-form-label">Texto</label>
                        <div class="col-sm-10">
                            <textarea name="body" class="form-control bodyfield">{{$page->body}}</textarea>
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

<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js"></script>
<script>
    tinymce.init({
        selector: 'textarea.bodyfield',
        height: 300,
        menubar: false,
        plugins: ['link', 'table', 'image', 'autoresize', 'lists'],
        toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | table | link image | bullist numlist',
        content_css:[
            '{{asset('assets/css/content.css')}}'
        ],

        images_upload_url:'{{route('imageupload')}}',
        images_upload_credentials:true,
        convert_urls:false
    });
</script>

@endsection
