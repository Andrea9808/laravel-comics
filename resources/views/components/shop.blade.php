
<div class="container-fluid gx-0">
    <div class="bg_shop">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                @foreach ($shops as $shop )
                    <div class="col-2">
                        <div class="card_shop">
                            <img src="{{ Vite::asset($shop['img']) }}" alt="img-shop">
                            <span class="text-white">{{$shop['text']}}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
