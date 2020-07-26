@extends('adminlte::page')

@section('title', 'Páginas')

@section('content_header')
<div>
    <div class="card-header"><h4>Páginas</h4></div>
<div>
@endsection

@section('content')


    <div class=" card card-body  card-primary card-outline">
        <div>
    <a href="{{ route('pages.create') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> NOVO</a>
    </div>
<div>
    <div class="card-body">

        <table class="table table-hover">
            <thead>
                <tr>
                <th width="3%">ID</th>
                <th width="70%">TÍTULO</th>
                <th width="27%"></th>
                </tr>
            </thead>

<tbody>
    @foreach ($pages as $page)

            <tr>
                <td>{{$page->id}}</td>
                <td>{{$page->title}}</td>
                <td>



                <a href="" target="_blank" class="btn btn-sm btn-outline-success  data-toggle=">VER</a>
                <a href="{{ route('pages.edit', ['page' => $page->id]) }}" class="btn btn-sm btn-outline-info  data-toggle=">EDITAR</a>

                <form class="d-inline" method="POST" action="{{ route('pages.destroy', ['page' => $page->id]) }}" onsubmit="return confirm('Tem certeza que deseja excluir este registro?')">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-sm btn-outline-danger">EXCLUIR</button>
                </form>



                </td>

            </tr>

    @endforeach

</tbody>
       </table>

    </div>

</div>
{{ $pages->links() }}

@endsection
