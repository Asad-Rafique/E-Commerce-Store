@extends('layouts.app') <!-- Extend your main layout -->

@section('cont') <!-- Content section for the layout -->
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
        }
        .h2-text {
            padding: 15px;
        }
        .table-data {
            margin: 50px;
            background-color: rgba(0, 0, 0, 0.315);
            text-align: center;
        }
        th {
            padding: 50px;
            background-color: blue;
            text-emphasis-color: black;
        }
    </style>
</head>
<body>
    <header class="header">
        @include("auth.admin.header")
    </header>
    <div class="d-flex align-items-stretch">
        <!-- Sidebar Navigation -->
        @include("auth.admin.sidebar")
        <!-- Sidebar Navigation end -->
        <div class="page-content">
            <div class="page-header">
                <div class="container-fluid">
                    <h2 class="h5 no-margin-bottom">Category</h2>
                </div>
            </div>
            <h2 class="h2-text">Update Category</h2>
            <div class="div-form">
                <!-- Form to update Category -->
                <form action="{{ url('/UpdateCategory', $data->id) }}" method="POST">
                    @csrf
                    <label for="category">Category Rename:</label>
                    <input type="text" name="category" id="category" value="{{ $data->name_category }}" required>
                    <button type="submit" class="btn btn-primary">Update Category</button>
                </form>
            </div>
        </div>
    </div>

    <!-- JavaScript files -->
   @include("auth.admin.JavaFiles");
    
</body>
</html>
@endsection
