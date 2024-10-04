@extends('layouts.app')  <!-- Extend your main layout -->

@section('cont')  <!-- Content section for the layout -->
<!DOCTYPE html>
<html>
  <head> 
    @include('auth.admin.css')

    <style type="text/css">
      input[type="text"] {
        width: 500px;
        height: 40px;
      }
      .div-form {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 30px;
      }
      .h2-text {
        padding: 15px;
        text-align: center;
      }
      .table-data {
        margin: 50px auto;
        background-color: #f8f9fa; /* Bootstrap's light gray */
        text-align: center;
        border: 1px solid #dee2e6; /* Border color */
        width: 90%;
      }
      th, td {
        padding: 15px;
        text-align: center;
      }
      th {
        background-color: #007bff; /* Bootstrap's primary blue */
        color: #fff; /* White text color */
      }
      .h4color {
        color: #343a40; /* Bootstrap's dark color */
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
            <h2 class="h5 no-margin-bottom">Category</h2>
          </div>
        </div>
        <h2 class="h2-text">Add Category</h2>
        <div class="div-form">
          <!-- Form to Add Category -->
          <form action="{{ url('/AddCategory') }}" method="POST">
            @csrf
            <label for="category">Category Name:</label>
            <input type="text" name="category" id="category" required>
            <button type="submit" class="btn btn-primary">Add Category</button>
          </form>
        </div>
        <table class="table-data table table-striped table-bordered">
          <thead>
            <tr>
              <th>Category Name</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $item)
              <tr>
                <td><h4 class="h4color">{{ $item->name_category }}</h4></td>
                <td><a class="btn btn-success" href="{{ url('Edit', $item->id) }}">Edit</a></td>
                <td>
                  <a class="btn btn-danger" href="{{ url('DeletCatagory/' . $item->id) }}" onclick="confirmation(event)">Delete</a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

    <!-- JavaScript files -->
    @include("auth.admin.JavaFiles");
  </body>
</html>
@endsection
