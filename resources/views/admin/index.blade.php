<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <h1>ADMIN</h1>

    <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <input type="submit" value="Logout" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                </form>

</body>
</html>
