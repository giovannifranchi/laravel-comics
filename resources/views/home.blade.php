@extends('layouts.app')

@section('main')
<div class="row gy-3">
    @foreach ($comics as $item)
        <div class="col-2">
            @include('partials.comic_card')
        </div>
    @endforeach
</div>
@endsection
