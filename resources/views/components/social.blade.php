<div class="container-fluid gx-0">
    <div class="bg_social">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-between align-items-center">
                    <div>
                        <button>SIGN-UP NOW</button>
                    </div>


                    <ul>
                        <li class="text-primary">FOLLOW US</li>
                        @foreach ($socials as $social)
                        <li>
                            <img src="{{ Vite::asset($social['img']) }}" alt="img-social">
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>

