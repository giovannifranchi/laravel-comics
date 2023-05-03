@extends('layouts.app')

@section('main')
<div class="row gy-3">
    @foreach ($comics as $item)
        <div class="col-2">
            @include('partials.comic_card')
        </div>
    @endforeach
    <button class="text-reset w-auto m-auto mt-5 py-2 px-5 border-0 mb-3">LOAD MORE</button>
</div>
@endsection
