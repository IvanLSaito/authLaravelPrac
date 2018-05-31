@extends('layouts.app')

@section('content')

	{!! Form::open(array('url' => '/tasques/' . $todo->id,'method' => 'put'))  !!}

	<h3>Formulari</h3>

	<div class="form-group">
		{!! Form::label('propietari', 'Qui es el propietari de la tasca?') !!}
		<div class="form-controls">
			{!! Form::text('propietari',$todo->propietari, ['class' => 'form-control','readonly' => 'true']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('nom', "Que s'ha de fer?") !!}
		<div class="form-controls">
			{!! Form::text('nom', $todo->nom, ['class' => 'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('data', "Quan s'ha de fer") !!}
		<div class="form-controls">
			{!! Form::date('data', $todo->data, ['class' => 'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('assignat', 'A quí esta assignada?') !!}
		<div class="form-controls">
			{!! Form::text('assignat', $todo->assignat, ['class' => 'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('estat', 'Estat') !!}
		<div class="form-controls">
			{!! Form::select('estat', ['Sense fer' => 'Sense fer', 'Feta' => 'Feta'], $todo->estat,['class' => 'form-control']) !!}
		</div>
	</div>



	{!! Form::submit('Guardar',['class' => 'btn btn-primary']) !!}
	{!! Form::close() !!}

	{!! Form::open(array('url' => '/tasques/' . $todo->id,'method' => 'delete'))  !!}
	{!! Form::submit('Borrar',['class' => 'btn btn-danger']) !!}
	{!! Form::close() !!}

@endsection

