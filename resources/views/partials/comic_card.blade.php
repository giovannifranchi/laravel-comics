<div class="comic-card border-0">
    <a href="{{route('comic', ['index'=>$loop->index])}}">
        <img src="{{$item['thumb']}}" alt="" class="img-card mb-3">
        <h6>{{$item['title']}}</h6>
    </a>
</div>