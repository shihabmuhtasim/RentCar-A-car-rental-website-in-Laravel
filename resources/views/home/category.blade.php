<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <h2 class="mb-3">Our Available Car Categories</h2>
            </div>
        </div>
        <div class="row">
            @foreach($cat_data as $category)
            <div class="col-md-3">
                <div class="services services-2 w-100 text-center">
                    <a href="{{ url('/show_category', ['category_id' => $category->id])}}"
                        class="icon d-flex align-items-center justify-content-center">
                        <span class="flaticon-transportation"></span>
                    </a>
                    <div class="text w-100">
                        <h2 class="heading mb-2">{{$category->catagory_name}}</h2>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>