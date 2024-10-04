<!DOCTYPE html>
<html>
  <head> 
    @include('auth.admin.css');
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
            <h2 class="h5 no-margin-bottom">Update prodect</h2>
          </div>
        </div>
       
        
        <div>
            <form action="{{url('edit_prodect',$data->id) }}" method="POST" enctype="multipart/form-data">
            
                @csrf 
        
                <table>
                    <tr>
                        <td><label for="product_name">Product Name:</label></td>
                        <td><input type="text" name="NameProdect" value="{{$data->NameProdect}}"></td>
                    </tr>
        
                    <tr>
                        <td><label for="description">Product Description:</label></td>
                        <td>
                            <textarea  name="description"  cols="23" rows="3">{{$data->DiscriptionProdect}}</textarea>
                        </td>
                    </tr>
        
                    <tr>
                        <td><label for="price">Product Price:</label></td>
                        <td><input type="number"  name="price" value="{{$data->PriceProdect}}"></td>
                    </tr>
        
                    <tr>
                        <td><label for="category">Product Category:</label></td>
                        <td> <select name="Category">
                            <option value="{{$data->CategryProdect}}">{{$data->CategryProdect}}  </option>
                        
                        </select>  </td>
                    </tr>
        
                    <tr>
                        <td><label for="quantity">Product Quantity:</label></td>
                        <td><input type="number"  name="quantity" value="{{$data->QuntetyProdect}}"></td>
                    </tr>
        
                    <tr>
                        <td><label for="image">Product Image URL:</label></td>
                        <td> <img src="/products/{{$data->ImageProdect}}" width="150" ></td>
                    </tr>
        
                    <!-- Submit Button -->
                    <tr>
                        <td colspan="2">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        



    </div>
    <!-- JavaScript files-->
    @include("auth.admin.JavaFiles");
  </body>
</html>