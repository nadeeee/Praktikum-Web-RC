<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('style/bootstrap.min.css')}}">
    <script src="{{asset('scripts/jquery-3.5.0.min.js')}}"></script>
    <script src="{{asset('scripts/bootstrap.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('style/homepage.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <title>Website Home Page</title>
    @yield('style')
</head>
<body>
    <div class="bgimage">
        <div class="menu">

            <div class="leftmenu">
                <h4> NCR </h4>
            </div>

            <div class="rightmenu">
                <ul>
                    <li>
                      <a id="firstlist" href="/">Home</a>
                    </li>
                    
                    <li>
                      <a  href="/show">Create Product</a>
                    </li>

                    <li>
                      <a href="/products">View Products</a>
                    </li>

                    <li>
                      <a href="/create-category">Create Category</a>
                    </li>

                    <li>
                      <a href="/category">View Category</a>
                    </li>
                </ul>
            </div>

        </div>
        @yield('content')
</body>
</html>

