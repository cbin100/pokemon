<?php
// /resources/views/show.blade.php
?>
@extends('template')

@section('contenu')
    <div class="col-sm-offset-4 col-sm-4">
    	<br>
		<div class="panel panel-primary">	
			<div class="panel-heading"> <strong> {{ $user->name }} </strong>  <img src="../../uploads/{{ $user->pok_image }}" width="50%"/> </div>
			<div class="panel-body">
				<p>Size : {{ $user->pok_size }}</p>
				<p>Weight : {{ $user->pok_weight }}</p>
				<p>Height : {{ $user->pok_height }}</p>
				<p>Sp Attack : {{ $user->sp_attack }}</p>
				<p>Sp def : {{ $user->sp_def }}</p>
				<p>Abilities : {{ $user->abilities }}</p>
				
			</div>
		</div>				
		<a href="javascript:history.back()" class="btn btn-primary">
			<span class="glyphicon glyphicon-circle-arrow-left"></span> Back
		</a>
	</div>
	
	
	
@endsection
