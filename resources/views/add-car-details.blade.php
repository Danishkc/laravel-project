<!--service start -->
<section id="service" style="margin-top: 3%; margin-bottom: 3%;">
    <div class="container">


        <div class="section-header" style="margin-bottom: 5%;">
            <p>Discover <span>our</span> latest arrival</p>
            <h2>Complete the Car details form</h2>
        </div>
        <!--/.section-header-->
        <form method="POST" action="/" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="model">Model</label>
                        <input type="text" id="model" value="{{ old('model') }}" name="model" class="form-control" >
                        @error("model")
                        <p style="color:red;">{{$errors->first('model')}} </p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="mileage">Mileage</label>
                        <input type="text" id="mileage" value="{{ old('mileage') }}" name="mileage" class="form-control" >
                        <p style="color:red;">{{$errors->first('mileage')}} </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="horsepower">Horsepower</label>
                        <input type="text" id="horsepower" value="{{ old('horsepower') }}" name="horsepower" class="form-control" >
                        <p style="color:red;">{{$errors->first('horsepower')}} </p>
                    </div>
                    <div class="form-group">
                        <label for="transmission">Transmission</label>
                        <select id="transmission" name="transmission" value="{{ old('transmission') }}" class="form-control" >
                            <option value="">Select Transmission</option>
                            <option value="Automatic">Automatic</option>
                            <option value="Manual">Manual</option>
                        </select>
                        <p style="color:red;">{{$errors->first('transmission')}} </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="make">Make</label>
                        <input type="text" id="make" value="{{ old('make') }}" name="make" class="form-control" >
                        <p style="color:red;">{{$errors->first('make')}} </p>
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" id="price" value="{{ old('price') }}" name="price" class="form-control" >
                        <p style="color:red;">{{$errors->first('price')}} </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea id="description" name="description" value="{{ old('description') }}" class="form-control" rows="5" ></textarea>
                        <p style="color:red;">{{$errors->first('description')}} </p>
                    </div>
                    <div class="form-group">
                        <label for="image">Upload Image</label>
                        <input type="file" id="image" name="image" value="{{ old('image') }}" class="form-control-file" accept="image/*" >
                        <p style="color:red;">{{$errors->first('image')}} </p>
                    </div>
                </div>
            </div>
            <div class="text-center" style="margin-top:2%; ">
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
            </div>
        </form>


    </div>
    <!--/.container-->

</section>
<!--/.service-->
<!--service end-->