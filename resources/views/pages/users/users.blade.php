<!-- Stored in resources/views/pages/users/users.blade.php -->
@extends('layouts.master')

@section('title', 'Usuários')

@section('content')
    <div class="row">
		<div class="col">
			<table class="table table-hover">
				<thead>
					<tr>
					<th scope="col">#</th>
					<th scope="col">Nome</th>
					<th scope="col">Sobrenome</th>
					<th scope="col">Email</th>
					<th scope="col">Tipo de Usuário</th>
					<th scope="col">Ações</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">1</th>
						<td>Fulano</td>
						<td>da Silva</td>
						<td>fulano.dasilva@example.com</td>
						<td>Administrador</td>
						<td>
							<span><i class="fa fa-pencil-square-o fa-md" id="btnEdit" aria-hidden="true"></i></span>
							&nbsp;
							<span><i class="fa fa-trash-o fa-md" id="btnDelete" aria-hidden="true"></i></span>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
@endsection