<!DOCTYPE html>
<html lang="en">
  <head> 
    @include('auth.admin.css')
  </head>
  <body>
    <header class="header">   
      @include("auth.admin.header")
    </header>
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include("auth.admin.sidebar")
      <!-- Sidebar Navigation end-->

      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Add Products</h2>
          </div>
        </div>

        <!-- Add Products Form -->
        <div class="container-fluid">
          <form action="/SubmitProduct" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="NameProdect">Product Name</label>
              <input type="text" class="form-control" name="NameProdect" placeholder="Enter product name">
            </div>
            <div class="form-group">
              <label for="DiscriptionProdect">Product Description</label>
              <textarea class="form-control"  name="DiscriptionProdect" rows="3" placeholder="Enter product description"></textarea>
            </div>
            <div class="form-group">
                <label for="ImageProdect">Product Image</label>
                <input type="file" class="form-control" id="ImageProdect" name="ImageProdect">
              </div>
            <div class="form-group">
              <label for="PriceProdect">Product Price</label>
              <input type="text" class="form-control"  name="PriceProdect" placeholder="Enter product price">
            </div>
            <div class="form-group">
                <label for="CategryProdect">Product Category</label>
                <select class="form-control"  name="CategryProdect">
                  <option value="" disabled selected>Select a category</option>
                  @foreach ($data as $item)
                    <option value="{{ $item->id }}">{{ $item->name_category }}</option>
                  @endforeach
                </select>
              </div>
              
            <div class="form-group">
              <label for="QuntetyProdect">Product Quantity</label>

              <input type="text" class="form-control" 
              
               name="QuntetyProdect" placeholder="Enter product quantity">

            </div>

            <!-- Centered Submit Button -->
            <div class="text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- JavaScript files-->
    @include("auth.admin.JavaFiles")
  </body>
</html>
