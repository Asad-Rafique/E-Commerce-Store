<!DOCTYPE html>
<html>
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
            <h2 class="h5 no-margin-bottom">Dashboard</h2>
          </div>
        </div>
       
        @include("auth.admin.body")


    </div>
    <!-- JavaScript files-->
    @include("auth.admin.JavaFiles")
  </body>
</html>