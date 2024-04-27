<div class="container rounded-lg"
    style="border-radius: 20px; width: 30%; margin: 3% auto; background-color: antiquewhite;">
    <div class="car-details" style="text-align: center;">
        <h1 class="text-center" style="padding-top: 15%;">Details of the Car</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="car-image">
                    <img src="{{ asset('uploads/' . $selectedCar->image) }}"
                        alt="{{$selectedCar->make}} {{$selectedCar->model}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="car-info">
                    <p><strong>Mileage:</strong> {{$selectedCar->mileage}}</p>
                    <p><strong>Horsepower:</strong> {{$selectedCar->horsepower}} HP</p>
                    <p><strong>Transmission:</strong> {{$selectedCar->transmission}}</p>
                    <p><strong>Description:</strong> {{$selectedCar->description}}</p>
                    <!-- Add more details as needed -->
                </div>
            </div>
        </div>
        <div class="back-button" style="padding-bottom: 15%;">
            <a href="/" class="btn btn-primary">Home page</a>
        </div>
    </div><!-- /.car-details -->
</div><!-- /.container -->