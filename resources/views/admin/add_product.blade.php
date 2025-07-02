<!DOCTYPE html>
<html>
<head>
    @include('admin.css')

    <!-- Toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"/>

    <style type="text/css">
        .div_deg {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 60px;
        }
        h1 {
            color: white;
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 10px;
            color: white;
        }
        input[type="text"],
        input[type="number"],
        select,
        textarea {
            width: 300px;
            height: 40px;
            border-radius: 5px;
            padding-left: 10px;
            margin-bottom: 15px;
        }
        textarea {
            height: 100px;
        }
        .input_deg {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    @include('admin.header')
    @include('admin.sidebar')

    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">

                <h1>Add Product</h1>

                <div class="div_deg">
                    <form action="{{ url('upload_product') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="input_deg">
                            <label>Product Title</label>
                            <input type="text" name="title" required>
                        </div>

                        <div class="input_deg">
                            <label>Description</label>
                            <textarea name="description" required></textarea>
                        </div>

                        <div class="input_deg">
                            <label>Price</label>
                            <input type="number" name="prize" required>
                        </div>

                        <div class="input_deg">
                            <label>Quantity</label>
                            <input type="number" name="qty" required>
                        </div>

                        <div class="input_deg">
                            <label>Product Category</label>
                            <select name="category" required>
                                <option value="">Select an Option</option>
                                @foreach($category as $cat)
                                    <option value="{{ $cat->category_name }}">{{ $cat->category_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="input_deg">
                            <label>Product Image</label>
                            <input type="file" name="image" required>
                        </div>

                        <div class="input_deg">
                            <input class="btn btn-success" type="submit" value="Add Product">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- JS dependencies -->
    <script src="{{ asset('admincss/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/popper.js/umd/popper.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/jquery.cookie/jquery.cookie.js') }}"></script>
    <script src="{{ asset('admincss/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('admincss/js/charts-home.js') }}"></script>
    <script src="{{ asset('admincss/js/front.js') }}"></script>

    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <!-- Show toastr if session message exists -->
    @if(session('message'))
    <script>
        $(document).ready(function () {
            toastr.success("{{ session('message') }}");
        });
    </script>
    @endif

</body>
</html>
