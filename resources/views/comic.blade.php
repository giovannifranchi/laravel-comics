@extends('layouts.detail')

@section('thumb')
    <div class="container position-relative wrapper">
        <img src="{{$comics['thumb']}}" alt="" width="150">  
    </div>  
@endsection

@section('info')

<div class="contaier">
    <div class="row">
        <div class="col-6">
            <h3>{{$comics['title']}}</h3>
            @include('partials.price_box')
            <p>{{$comics['description']}}</p>
        </div>
    </div>
</div>
    
@endsection