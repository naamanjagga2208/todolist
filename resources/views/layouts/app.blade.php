<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        @yield('title')
    </title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <style>
        body {
            font-family: 'Nunito';
        }
    </style>
</head>

<body>

<nav class="navbar navbar-light bg-light">
    @yield('nav')
</nav>
<form action="store-data" method="post" class="mt-4 p-4">
        @csrf
        <div class="form-group m-3" class="mt-4 p-4" >
            <div class="container">
                <div class ="row">
                    <div class ="col-5">
                        <input type="text" class="float-end form-control" placeholder = "Add Task..." name="name">
                    </div>
                    <div class ="col-7">
                        <input type="submit" class="btn btn-primary" value="Add Task">
                    </div>
                </div>
            </div>
        </div>
    </form>
<div class="container">

    @yield('content')

</div>

</body>

</html>