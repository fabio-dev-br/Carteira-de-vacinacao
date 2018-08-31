@extends('painel.templates.template')

@section('content')

<!--Filters and actions-->
<div class="actions">
    <div class="container">
        <a class="add" href="forms">
            <i class="fa fa-plus-circle"></i>
        </a>

        <form class="form-search form form-inline">
            <input type="text" name="pesquisar" placeholder="Pesquisar?" class="form-control">
            <input type="submit" name="pesquisar" value="Encontrar" class="btn btn-success">
        </form>
        @can('view_users')
        <div class="col-md-2 text-center">
				<a href="/roleuser">
				<span style="font-size: 50px; color: #fff;">
  <i class="fas fa-users-cog"><h1 class="subtitle">Adicionar Função</h1></i>
</span>
					
				</a>
</div>
@endcan

    </div>
</div><!--Actions-->

<div class="clear"></div>

<div class="container">
    <h1 class="title">
        Listagem das roles
    </h1>

    <table class="table table-hover">
        <tr>
            <th>Nome</th>
            <th>label</th>
           
            
            <th width="150px">Ações</th>
        </tr>

        @forelse( $roles as $role )
        <tr>
            <td>{{$role->name}}</td>
            <td>{{$role->label}}</td>
            
            <td>
                <a href="{{url("/painel/role/$role->id/permissions")}}" class="edit">
                    <i class="fas fa-unlock-alt"></i>
                </a>
                <a href="{{url("/painel/role/$role->id/edit")}}" class="edit">
                    <i class="fa fa-pencil-square-o"></i>
                </a>
                <a href="{{url("/painel/role/$role->id/delete")}}" class="delete">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="90">
                <p>Nenhum Resultado!</p>
            </td>
        </tr>
        @endforelse
    </table>

</div>

@endsection