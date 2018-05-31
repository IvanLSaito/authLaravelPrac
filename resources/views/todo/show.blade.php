@extends('layouts.app')

@section('content')
<div class="container">
	<h1>=========</h1>
	<h2>TASCA#{{$todo->id}}</h2>
	<h1>=========</h1>
    <div  class="row justify-content-center">

		<div class="container todo" style="font-size:24px;margin:0 auto;margin-top:5px;display:block;"><br>
		<strong>" {{ $todo->nom}} "</strong><br>
			<div class="todo" style="">
			<span style="margin:0 auto; display:block; margin-top:10px;"></span>
				
				PROPIETARI: <strong>{{ $todo->propietari}} </strong><br>					
				QUAN S'HA DE FER: <strong>{{ $todo->data}} </strong><br>
				QUI L'HA DE FER: <strong>{{ $todo->assignat}} </strong><br>
				COM ESTA?: <strong>{{ $todo->estat}} </strong><br>
			@if(isset($user))
				@if($user->name == $todo->propietari)
				<a href="{{ $todo->id}}/edit">
					editar la tasca
				</a>
				@endif
				
			@endif
			</div>
		</div>

    </div>
</div>
@endsection

