<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- meta data -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!--font-family-->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet">

    <!-- title of site -->
    <title>CarVilla</title>

    <!-- For favicon png -->
    <link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png" />

    <!--font-awesome.min.css-->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!--linear icon css-->
    <link rel="stylesheet" href="assets/css/linearicons.css">

    <!--flaticon.css-->
    <link rel="stylesheet" href="assets/css/flaticon.css">

    <!--animate.css-->
    <link rel="stylesheet" href="assets/css/animate.css">

    <!--owl.carousel.css-->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

    <!--bootstrap.min.css-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- bootsnav -->
    <link rel="stylesheet" href="assets/css/bootsnav.css">

    <!--style.css-->
    <link rel="stylesheet" href="assets/css/style.css">

    <!--responsive.css-->
    <link rel="stylesheet" href="assets/css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body>

    <!--service start -->
    <section id="service" style="margin-top: 3%; margin-bottom: 3%;">
        <div class="container">


            <div class="section-header" style="margin-bottom: 5%;">
                <p>Discover <span>our</span> latest arrival</p>
                <h2>Complete the Car details form</h2>
            </div>
            <!--/.section-header-->
            <form method="post" action="/{{$car->id}}" enctype="multipart/form-data">
                @csrf
                @method("PUT")
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="model">Model</label>
                            <input type="text" id="model" name="model" class="form-control" value="{{$car->model}}"
                                >
                                <p style="color:red;">{{$errors->first('model')}} </p>
                        </div>
                        <div class="form-group">
                            <label for="mileage">Mileage</label>
                            <input type="text" id="mileage" name="mileage" class="form-control"
                                value="{{$car->mileage}}" >
                                <p style="color:red;">{{$errors->first('mileage')}} </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="horsepower">Horsepower</label>
                            <input type="text" id="horsepower" name="horsepower" class="form-control"
                                value="{{$car->horsepower}}" >
                                <p style="color:red;">{{$errors->first('horsepower')}} </p>
                        </div>
                        <div class="form-group">
                            <label for="transmission">Transmission</label>
                            <select id="transmission" name="transmission" class="form-control" >
                                <option value="" @if($car->transmission == '') selected @endif>Select Transmission
                                </option>
                                <option value="Automatic" @if($car->transmission == 'Automatic') selected
                                    @endif>Automatic</option>
                                <option value="Manual" @if($car->transmission == 'Manual') selected @endif>Manual
                                </option>
                            </select>
                            <p style="color:red;">{{$errors->first('transmission')}} </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="make">Make</label>
                            <input type="text" id="make" name="make" class="form-control" value="{{$car->make}}"
                                >
                                <p style="color:red;">{{$errors->first('make')}} </p>
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" id="price" name="price" class="form-control" value="{{$car->price}}"
                                >
                                <p style="color:red;">{{$errors->first('price')}} </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea id="description" name="description" class="form-control"
                                rows="5">{{$car->description}}</textarea>
                                <p style="color:red;">{{$errors->first('description')}} </p>
                        </div>
                        <div class="form-group">
                            <label for="new_image">Upload New Image</label>
                            <input type="file" id="new_image" name="image" class="form-control-file" accept="image/*"
                                >
                                <p style="color:red;">{{$errors->first('image')}} </p>
                        </div>
                    </div>
                </div>
                <div class="text-center" style="margin-top: 2%;">
                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                </div>
            </form>



        </div>
        <!--/.container-->

    </section>
    <!--/.service-->
    <!--service end-->


    <!-- Include all js compiled plugins (below), or include individual files as needed -->

    <script src="assets/js/jquery.js"></script>

    <!--modernizr.min.js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

    <!--bootstrap.min.js-->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- bootsnav js -->
    <script src="assets/js/bootsnav.js"></script>

    <!--owl.carousel.js-->
    <script src="assets/js/owl.carousel.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

    <!--Custom JS-->
    <script src="assets/js/custom.js"></script>

</body>

</html>