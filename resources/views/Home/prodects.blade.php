<section class="shop_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>
        Latest Products
      </h2>
    </div>
    <div class="row">

      @foreach ($prodect as $item)
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="box">
      
            <div class="img-box">
              <img src="products/{{$item->ImageProdect}}" alt="">
            </div>
            <div class="detail-box">
              <h6>
                {{$item->NameProdect}} <!-- Product Name -->
              </h6>
              <h6>
                Price
                <span>
                  ${{$item->PriceProdect}} <!-- Product Price -->
                </span>
              </h6>
            </div>

        
            <div class="btn btn-success">
              <a href="{{url("prodect_details",$item->id)}}">Detales</a>
            </div>


            
        </div>
      </div>
      @endforeach

    </div>

    <div class="btn-box">
      <a href="">
        View All Products
      </a>
    </div>
  </div>
</section>
