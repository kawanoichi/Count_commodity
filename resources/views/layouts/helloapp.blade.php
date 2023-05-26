<html>
    <head>
        <title>@yield('title')</title>
        <style>
            body {font-size: 16px; }
            h1 {font-size: 50px; }
            ul {font-size: 12px; }
            hr { margin: 25px 100px; }
            .menutitle {font-size: 14px; }
            .content { margin: 10px; }
            .footer {texxt-align: right; }
        </style>
    </head>

    <body>
        <h1>@yield('title')</h1>
        @section('menubar')
        <ul>
            <p class="menutitle">※メニュー</p>
            <li>@show</li>
        </ul>
        <hr siz="1">
        <div class="content">
            @yield('content')
        </div>
        <div class="footer">
            @yield('footer')
        </div>
    </body>
</html>
