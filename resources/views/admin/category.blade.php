<!DOCTYPE html>
<html>
  <head>
    @include('admin.css')

    <style>
        input[type="text"] {
            color: black;
            width: 300px;
            height: 40px;
            border-radius: 5px;
            padding-left: 10px;
        }
        .div_deg {
            display: flex
            justify-content: center;
            align-items: center;
            margin: 30px;
        }

       .table_deg
{
    text-align: center;
    margin: auto;
    border: 2px solid yellowgreen;
    margin-top: 50px;
}

th
{
    background-color: skyblue;
    padding: 15px;
    font-size: 20px;
    font-weight: bold;
    color: white;
}

td
{
    color: white;
    padding: 10px;
    border: 1px solid skyblue;
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

            <div>Add Category</div>

            <div class="div_deg">

                </div>


            <form action="{{ url('add_category') }}" method="POST">
    @csrf
    <input type="text" name="category_name" required>
    <button type="submit">Add Category</button>
</form>

<div>

</div>

<table class="table_deg">
    <tr>
        <th>Category Name</th>

        <th>Edit</th>

        <th>Delete</th>
        <tr>

            @foreach($data as $data)

        </tr>
        <tr>
            <td>{{$data->category_name}}</td>

            <td>
                <a class="btn btn-success" href="
                {{url('edit_category',$data->id)}}">Edit</a>
            </td>
            
            <td>
                <a class="btn btn-danger" onclick="return confirm('Are you sure to delete this category?')" href="{{url('delete_category', $data->id)}}">Delete</a>
            </td>
        </tr>

         @endforeach
</table>




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

