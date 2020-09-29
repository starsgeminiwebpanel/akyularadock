
<div class="container-fluid d-none d-md-block">
    @if($isStartUp)
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    @else
        <div id="carouselExampleIndicators" class="carousel slide">
        @endif
        <ol class="carousel-indicators">
            @forelse($images as $image)
                @if ($loop->first)
                <li data-target="#carouselExampleIndicators" data-slide-to="$loop->index" class="active"></li>
                @else
                <li data-target="#carouselExampleIndicators" data-slide-to="$loop->index"></li>
                @endif
            @empty
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>

            @endforelse
             </ol>
            <div class="carousel-inner">
                @forelse($images as $image)
                @if ($loop->first)
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ asset('assets/images/slider/')}}/{{$image}}" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>h5 {{$image}} area</h5>
                        <p>p area {{$image}}</p>
                    </div>
                </div>
                @else
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('assets/images/slider/')}}/{{$image}}" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>h5 area {{$image}}</h5>
                        <p>p area {{$image}}</p>
                    </div>
                </div>
                @endif
                @empty
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ asset('assets/images/noimages/slider1.jpg') }}" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>h5 area picture 1</h5>
                        <p>p area picture 1</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('assets/images/noimages/slider2.jpg') }}" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>h5 area picture 2</h5>
                        <p>p area picture 2</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('assets/images/noimages/slider3.jpg') }}" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>h5 area picture 3</h5>
                        <p>p area picture 3</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('assets/images/noimages/slider4.jpg') }}" alt="Fourth slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>h5 area picture 4</h5>
                        <p>p area picture 4</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('assets/images/noimages/slider5.jpg') }}" alt="Fifth slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>h5 area picture 5</h5>
                        <p>p area picture 5</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('assets/images/noimages/slider6.jpg') }}" alt="Sixth slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>h5 area picture 6</h5>
                        <p>p area picture 6</p>
                    </div>
                </div>
            </div>

        @endforelse
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
           </a>
    </div>
</div>
<div>
<!-- scripts -->
<script type="text/javascript" src="{{ mix('js/bootstrap-extended.js') }}" defer></script>
<!-- ends scripts -->
</div>

</div>
