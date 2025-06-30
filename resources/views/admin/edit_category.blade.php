<!DOCTYPE html>
<html>
  <head>
    @include('admin.css')

    <style type="text/css">
       .div_deg
       {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 60px;
       }

       input[type="text"]
       {
        color: black;
        width: 300px;
        height: 40px;
        border-radius: 5px;
        padding-left: 10px;
       }

    </style>


</head>
  <body>

    @include('admin.header')

    @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

            <h1 style="color: white">Update Category</h1>


            <div class="div_deg">

            </div>

            <form action="{{ url('update_category', $data->id) }}" method="POST">
    @csrf
    <input type="text" name="category_name" value="{{ $data->category_name }}" required>
    <button type="submit">Update</button>
</form>


          </div>
      </div>
    </div>
    <!-- JavaScript files-->
        <script src="{{asset('admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/popper.js/umd/popper.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery.cookie/jquery.cookie.js')}}"></script>
    <script src="{{asset('admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('admincss/js/charts-home.js')}}"></script>
    <script src="{{asset('admincss/js/front.js')}}"></script>
  </body>
</html>

