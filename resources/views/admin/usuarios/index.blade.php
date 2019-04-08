@extends('layouts.app')

@section('content')

<div class="container">
	<h2 class="center">Lista de usuários</h2>	

	<div class="row">
		<nav>
		    <div class="nav-wrapper blue">
		      <div class="col s12">
		        <a href=" {{ route('admin.principal') }} " class="breadcrumb">Home</a>
		        <a href="#" class="breadcrumb">Lista de Usuários</a>
		      </div>
		    </div>
		  </nav>		
	</div>

	<div class="row">
	<table>
		<thead>
			<tr>
				<th>Id</th>
				<th>Nome</th>
				<th>E-mail</th>
				<th>Ação</th>
			</tr>
		</thead>
		<tbody>
			@foreach($usuarios as $usuario)
			<tr>
				<td>
					{{ $usuario->id}}
				</td>
				<td>
					{{ $usuario->name}}
				</td>
				<td>
					{{ $usuario->email}}
				</td>
				<td>
					<a class="btn green" href="">Editar</a>
					<a class="btn red" href="">Excluir</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	</div>
	<div class="row">
		<a class="btn blue" href=" {{ route('admin.usuarios.adicionar') }}">Novo</a>
	</div>
</div>
@endsection