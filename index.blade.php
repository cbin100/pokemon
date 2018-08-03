<?php
// /resources/views/index.blade.php
?>
@extends('template')

@section('contenu')
    <br>
    <div class="col-sm-offset-4 col-sm-4">
    	@if(session()->has('ok'))
			<div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
		@endif
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">List of Pokémon</h3>
			</div>
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
						<th></th>
						<th></th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					@foreach ($users as $user)
					
					
						<tr>
							<td>{!! $user->id !!}</td>
							<td class="text-primary"><strong>{!! $user->name !!}</strong></td>
							<td>{!! link_to_route('user.show', 'Open this pokémon', [$user->id], ['class' => 'btn btn-success btn-block']) !!}</td>
						
						</tr>
					@endforeach
	  			</tbody>
			</table>
		</div>
		{!! $links !!}
		
	</div>
@endsection
