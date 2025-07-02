<!DOCTYPE html>
<html>
  <head>
    @include('admin.css')

    <style type="text/css">

    .div_deg {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 60px;
    }

    .table_deg {
        border: 2px solid #4c98af;

    }

    th{
        background-color: #4c98af;
        color: white;
        padding: 15px;
        font-size: 19px;
        text-align: left;
        font-weight: bold;
    }

    td
    {
        border: #4c98af solid 1px;
        padding: 15px;
        text-align: left;
        border-bottom: 1px solid #dddddd;
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

            <div class="div_deg">

                <table class="table_deg">
    <tr>
        <th>Product Title</th>
        <th>Description</th>
        <th>Category</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Image</th>
        <th>Delete</th>
    </tr>
    @foreach ($products as $product)
    <tr>
        <td>{{ $product->title }}</td>
        <td>{{ $product->description }}</td>
        <td>{{ $product->category }}</td>
        <td>{{ $product->prize }}</td>
        <td>{{ $product->quantity }}</td>
        <td>
            @if($product->image)
                <img src="{{ asset('product/'.$product->image) }}" alt="Product Image" width="60">
            @else
                -
            @endif
       <td>
    <a class="btn btn-danger" onclick="return confirm('Are you sure to delete this product?')" href="{{ url('delete_product', $product->id) }}">Delete</a>
</td>
    </tr>
    @endforeach
</table>

            </div>


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

