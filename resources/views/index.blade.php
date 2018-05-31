@extends('layouts.app')

@section('content')
<div class="container">
    <div  class="row justify-content-center">

        <h1>TODO - LISTA</h1><br/><br/>
        
       
    </div>
    <div class="row" style="margin:0 auto;text-align:center;display:block">

        no se que fa aquesta app,
        <br/>
        pero si ho vols comprovar tu mateix


    </div>
</div>
@endsection



<!-- @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
-->