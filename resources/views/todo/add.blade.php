@extends('layouts.app')

@section('content')

	{!! Form::open(array('url' => '/tasques')) !!}

	<h3>Formulari</h3>

	<div class="form-group">
		{!! Form::label('propietari', 'Qui es el propietari de la tasca?') !!}
		<div class="form-controls">
			{!! Form::text('propietari',Auth::user()->name, ['class' => 'form-control','readonly' => 'true']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('nom', "Que s'ha de fer?") !!}
		<div class="form-controls">
			{!! Form::text('nom', 'fer algo', ['class' => 'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('data', "Quan s'ha de fer") !!}
		<div class="form-controls">
			{!! Form::date('data', 'dd/mm/aaaa', ['class' => 'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('assignat', 'A quí esta assignada?') !!}
		<div class="form-controls">
			{!! Form::text('assignat', 'assignat', ['class' => 'form-control']) !!}
		</div>
	</div>

	{!! Form::hidden('estat', 'Sense fer', ['class' => 'form-control']) !!}

	{!! Form::submit('Guardar',['class' => 'btn btn-primary']) !!}
	{!! Form::close() !!}

@endsection

