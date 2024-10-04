<!DOCTYPE html>
<html lang="en">
<head>
  @include('Home.css')
</head>
<body>

@include("Home.header")

<section class="shop_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>Product Details</h2>
    </div>

    <div class="row">
      <div class="col-md-6">
        <!-- Product Image Carousel -->
        <div id="productCarousel" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="/products/{{$product->ImageProdect}}" class="d-block w-100">
            </div>
            <!-- If multiple images -->
            @if(isset($product->additionalImages))
              @foreach($product->additionalImages as $image)
              <div class="carousel-item">
                <img src="/products/{{$image}}" class="d-block w-100">
              </div>
              @endforeach
            @endif
          </div>
          <a class="carousel-control-prev" href="#productCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#productCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

      <div class="col-md-6">
        <div class="product-detail-box">
          <h3>{{ $product->NameProdect }}</h3>
          <h4>Price: ${{ $product->PriceProdect }}</h4>
          <h6>Category: <span>{{ $product->CategryProdect }}</span></h6>
          <h6>Quantity: <span>{{ $product->QuntetyProdect }}</span></h6>
          <h6>Description:</h6>
          <p>{{ $product->DiscriptionProdect }}</p>




          <!-- Add to Cart Button -->
          <div class="btn-box">
            <button class="btn btn-primary">
              <a href="{{ url('add_to_cart', $product->id) }}" class="text-white">Add to Cart</a>
            </button>
          </div>



          

          <!-- Availability -->
          <h6>Availability: 
            @if($product->QuntetyProdect > 0)
              <span class="text-success">In Stock</span>
            @else
              <span class="text-danger">Out of Stock</span>
            @endif
          </h6>

          <!-- Reviews and Ratings -->
          <div class="reviews-section">
            <h6>Rating: ⭐⭐⭐⭐⭐ (4.5/5)</h6>
            <p>"Great product!" - User123</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Related Products -->
    <section class="related-products">
      <h4>You May Also Like</h4>
      <div class="row">
        {{-- @foreach ($relatedProducts as $related) --}}
        <div class="col-sm-3">
          <div class="product-box">
            {{-- <img src="/products/{{$related->ImageProdect}}" alt="{{$related->NameProdect}}"> --}}
            {{-- <h6>{{$related->NameProdect}}</h6> --}}
            {{-- <h6>Price: ${{$related->PriceProdect}}</h6> --}}
            {{-- <a href="{{url('prodect_details', $related->id)}}" class="btn btn-secondary">View Details</a> --}}
          </div>
        </div>
        {{-- @endforeach --}}
      </div>
    </section>
  </div>
</section>

@include("Home.footer")

</body>
</html>
