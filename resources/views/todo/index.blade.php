@extends('layouts.app')

@section('content')
<div class="container">
    <div  class="row justify-content-center">

        <div class="row">TODO - LISTA</div>

        <br><br>

		@foreach($todos as $todo)

		<div class="container todo" style="margin:0 auto;margin-top:50px;display:block;"><br>
		
			<div class="todo" style="width:300px;margin:0 auto;display:block;">
			<span style="margin:0 auto; display:block; margin-top:10px;">TASCA #{{$todo->id}}</span>
				<strong>" {{ $todo->nom}} "</strong><br>
				<strong>PROPIETARI: {{ $todo->propietari}} </strong><br>					
				<strong>QUAN S'HA DE FER: {{ $todo->data}} </strong><br>
				<strong>QUI L'HA DE FER: {{ $todo->assignat}} </strong><br>
				<strong>COM ESTA?: {{ $todo->estat}} </strong><br>
			<a href="tasques/{{ $todo->id}}">
				anar a la tasca
			</a>
			</div>
		</div>
		@endforeach

    </div>
</div>
@endsection

