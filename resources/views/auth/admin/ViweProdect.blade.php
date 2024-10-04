<!DOCTYPE html>
<html>
  <head> 
    @include('auth.admin.css');
    <style>
      /* Styling the table */
      table {
          width: 100%;
          border-collapse: collapse;
          margin: 20px 0;
          font-size: 16px;
          text-align: center;
      }

      /* Header (th) styling */
      th {
          text-align: center;
          color: white;
          padding: 12px 15px;
          background-color: blueviolet;
          border: 1px solid #ddd;
      }

      /* Table row (tr) and cell (td) styling */
      td {
          padding: 12px 15px;
          border: 1px solid #ddd;
          background-color: white;
          color: black;
      }

      /* Add hover effect for rows */
      tr:hover {
          background-color: #f5f5f5;
      }
      /* Table alternate row colors */
      tr:nth-child(even) {
          background-color: #f2f2f2;
      }
      /* Table image column styling */
      td img {
          width: 100px;
          height: auto;
          object-fit: cover;
          border-radius: 5px;
      }
      .datalink {
    display: flex;
    justify-content: center; /* Center horizontally */
    margin-top: 20px; /* Add some space on top */
}

    </style>
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
            <h2 class="h5 no-margin-bottom">Search Products</h2>
          </div>

          <form action="{{ url('prodect_search') }}" method="get" class="form-inline">
            <div class="form-group">
                <input type="search" name="search" class="form-control" placeholder="Search by name" >
            </div>
            <button type="submit" class="btn btn-secondary ml-2">Search</button>
        </form>
        


        </div>



      <!-- Table section -->
      <div>
        <table>
          <tr>
              <th>Product Name</th>
              <th>Product Description</th>
              <th>Product Price</th>
              <th>Product Category</th>
              <th>Product Quantity</th>
              <th>Product Image</th>
              <th>Product Edit</th>
              <th>Product Delete</th>
          </tr>
      
          <!-- Loop through products and display them -->
          @foreach($data as $product)
          <tr>
              <td>{{ $product->NameProdect }}</td>
              <td>{!! Str::limit($product->DiscriptionProdect, 30) !!}</td>
              <td>${{ $product->PriceProdect }}</td>

              <td>{{ $product->CategryProdect }}</td>


              <td>{{ $product->QuntetyProdect }}</td>
            <td><img src="{{ asset('products/' . $product->ImageProdect) }}" alt="Product Image" width="100"></td>
              
              
            <td>
              <a class="btn btn-success"  href="{{ url('Update_prodect', $product->id) }}"">Edit</a>
          </td>
              <!-- Corrected Delete Button -->
              <td>
                  <a class="btn btn-danger"  href="{{ url('delete_prodect', $product->id) }}"onclick="confirmation(event)">Delete</a>
              </td>
          </tr>
          @endforeach
      </table>
      
      <!-- Display Pagination Links -->
      <div class="datalink">
      {{ $data->links() }}
      </div>

      </div>

    </div>
    <!-- JavaScript files-->
    @include("auth.admin.JavaFiles");
  </body>
</html>
