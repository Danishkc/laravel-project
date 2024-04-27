<!--featured-cars start -->
<section id="featured-cars" class="featured-cars" style="background: white;">
    <div class="container">
        <div class="section-header">
            <p>checkout <span>the</span> featured cars</p>
            <h2>featured cars</h2>
        </div><!--/.section-header-->
        <div class="featured-cars-content">
            <div class="row justify-content-center">
                @foreach($cars as $car)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-featured-cars">
                        <div class="featured-img-box">
                            <div class="featured-cars-img">
                                <img src="{{ asset('uploads/' . $car->image) }}" alt="cars">
                            </div>
                            <div class="featured-model-info">
                                <p>
                                    model: {{$car->model}}
                                    <span class="featured-mi-span"> {{$car->mileage}} mi</span>
                                    <span class="featured-hp-span"> {{$car->horsepower}}HP</span>
                                    {{$car->transmission}}
                                </p>
                            </div>
                        </div>
                        <div class="update-delete-links">
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="/{{$car->id}}"><button class="btn btn-primary"
                                            style="margin-left: 55%;">Update</button></a>
                                </div>
                                <div class="col-md-6">
                                    <form action="/{{$car->id}}" method="POST"
                                        onsubmit="return confirm('Are you sure you want to delete this car?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="featured-cars-txt">
                            <h2><a href="#">{{$car->make}} </a></h2>
                            <h3>₹: {{$car->price}} </h3>
                            <p>
                                {{$car->description}}
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div><!--/.row-->
        </div><!--/.featured-cars-content-->
    </div><!--/.container-->
</section><!--/.featured-cars-->
<!--featured-cars end -->
