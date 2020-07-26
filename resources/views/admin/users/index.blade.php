@extends('adminlte::page')

@section('title', 'Usuários')

@section('content_header')
<div> 
    <div class="card-header"><h4>Usuários</h4></div>
<div>
@endsection

@section('content')


    <div class=" card card-body  card-primary card-outline">
        <div>
            <a href="{{ route('users.create') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> NOVO</a>
        </div><br/>    
        <table class="table table-hover">
            <thead>
                <tr>
                <th width="3%">ID</th>
                <th width="30%">NOME</th>
                <th width="30%">E-MAIL</th>
                <th width="15%"></th>
                </tr>
            </thead>

<tbody>
    @foreach ($users as $user)
    
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                

                
                
                <a href="{{ route('users.edit', ['user' => $user->id]) }}" class="btn btn-sm btn-outline-info  data-toggle=">EDITAR</a>  
                  
                @if($loggedId !== intval($user->id))

                <form class="d-inline" method="POST" action="{{ route('users.destroy', ['user' => $user->id]) }}" onsubmit="return confirm('Tem certeza que deseja excluir este registro?')">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-sm btn-outline-danger">EXCLUIR</button>
                </form>

                @endif

                </td>
                
            </tr>
        
    @endforeach 

</tbody>  
       </table>     
       
    </div>      
         
</div>
{{ $users->links() }}
    
@endsection