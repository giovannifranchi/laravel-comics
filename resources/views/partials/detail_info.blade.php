<div class="detail-info py-4">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h3 class="mb-0 py-3">Talent</h3>
                <div class="insight d-flex ">
                    <span>Art By:</span>
                    <div class="feat ms-auto">
                        @foreach ($comics['artists'] as $item)
                        <a href="#">{{$item}}</a>
                        @endforeach
                    </div>
                </div>
                <div class="insight d-flex ">
                    <span>Written By:</span>
                    <div class="feat ms-auto">
                        @foreach ($comics['writers'] as $item)
                        <a href="#">{{$item}}</a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-6">
                <h3 class="mb-0 py-3">Specs</h3>
                <div class="insight d-flex ">
                    <span>Series:</span>
                    <div class="feat ms-auto">
                        <a href="#">{{Str::upper($comics['series'])}}</a>
                    </div>
                </div>
                <div class="insight d-flex ">
                    <span>U.S. Price:</span>
                    <div class="feat ms-auto">
                        <span>{{$comics['price']}}</span>
                    </div>
                </div>
                <div class="insight d-flex ">
                    <span>On Sale Date:</span>
                    <div class="feat ms-auto">
                        <span>{{$comics['sale_date']}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>