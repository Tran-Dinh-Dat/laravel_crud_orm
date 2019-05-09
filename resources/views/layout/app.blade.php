<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    {{-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <title>@yield('title')</title>
</head>
<body>
    <div class="container">
        <div class="navbar">
            <a class="navbar-brand" href="{{url('products')}}">Crud</a>
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{{url('products/create')}}">Create</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
            </ul>
        </div>
        
        <div class="panel panel-info">
              <div class="panel-heading">
                    <h3 class="panel-title">@yield('title')</h3>
              </div>
              <div class="panel-body">
                    @yield('content')
              </div>
        </div>
        
    </div>
</body>
</html>