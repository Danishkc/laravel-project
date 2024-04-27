<!--new-cars start -->
<section id="new-cars" class="new-cars">
    <div class="container">
        <div class="section-header">
            <p>checkout <span>the</span> latest cars</p>
            <h2>newest cars</h2>
        </div>
        <!--/.section-header-->
        <div class="new-cars-content">
            <div class="owl-carousel owl-theme" id="new-cars-carousel">
                @foreach($latestCars as $car)
                <div class="new-cars-item">
                    <div class="single-new-cars-item">
                        <div class="row">
                            <div class="col-md-7 col-sm-12">
                                <div class="new-cars-img">

                                    <img src="{{ asset('uploads/' . $car->image) }}" alt="cars">
                                </div>
                                <!--/.new-cars-img-->
                            </div>
                            <div class="col-md-5 col-sm-12">
                                <div class="new-cars-txt">
                                    <h2><a href="#">{{$car->make}} {{$car->model}} <span>{{$car->transmission}}
                                            </span></a></h2>
                                    <p>
                                        {{$car->description}}
                                    </p>
                                    <button class="welcome-btn new-cars-btn"
                                        onclick="window.location.href='/{{$car->id}}/show'">
                                        view details
                                    </button>
                                </div>
                                <!--/.new-cars-txt-->
                            </div>
                            <!--/.col-->
                        </div>
                        <!--/.row-->
                    </div>
                    <!--/.single-new-cars-item-->
                </div>
                @endforeach
                <!--/.new-cars-item-->
            </div>
            <!--/#new-cars-carousel-->
        </div>
        <!--/.new-cars-content-->
    </div>
    <!--/.container-->