<!-- Sidebar Navigation -->
<nav id="sidebar">
  <!-- Sidebar Header -->
  <div class="sidebar-header d-flex align-items-center">
    <div class="avatar">
      <img src="{{ asset('AdminCss/img/avatar-6.jpg') }}" alt="..." class="img-fluid rounded-circle">
    </div>
    <div class="title">
      <h1 class="h5">Mark Stephen</h1>
      <p>Web Designer</p>
    </div>
  </div>

  <!-- Sidebar Navigation Menus -->
  <span class="heading">Main</span>
  <ul class="list-unstyled">
    <li class="active"><a href="index.html"><i class="icon-home"></i>Home</a></li>
    <li>
      <a href="{{ url('category') }}">
        <i class="icon-grid"></i>Category
      </a>
    </li>


    <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Prodects</a>
      <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
        <li><a href="{{url("AddProdect")}}">Add Prodect</a></li>
        <li><a href="{{url("ViweProdect")}}">Viwe Prodects</a></li>
        <li><a href="#">Page</a></li>
      </ul>
    </li>
    <li><a href="login.html"> <i class="icon-logout"></i>Login page </a></li>

  </ul>

  <span class="heading">Extras</span>
  <ul class="list-unstyled">
    <li><a href="#"><i class="icon-settings"></i>Demo</a></li>
    <li><a href="#"><i class="icon-writing-whiteboard"></i>Demo</a></li>
    <li><a href="#"><i class="icon-chart"></i>Demo</a></li>
  </ul>
</nav>
<!-- Sidebar Navigation end -->

<!-- Include JavaScript files -->
@include('auth.admin.JavaFiles')
<!-- Include Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- Include Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
