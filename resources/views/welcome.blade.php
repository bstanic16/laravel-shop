<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
    <div id="navigation-bar">
        <ul style="display: flex">
            <li style="padding: 10px"><a href="/"><i class="fa fa-home"></i><span>Home</span></a></li>
            <li style="padding: 10px"><a href="/categories"><i class="fa fa-handshake"></i><span>Shop</span></a></li>
            <li style="padding: 10px"><a href="/orders"><i class="fa fa-user"></i><span>Orders</span></a></li>
            <li style="padding: 10px"><a href="/about"><i class="fa fa-rss"></i> <span>About</span></a></li>
            <li style="padding: 10px"><a href="/cart"><i class="fa fa-book"></i><span>CART</span></a></li>
        </ul>
    </div>
    </body>
</html>
