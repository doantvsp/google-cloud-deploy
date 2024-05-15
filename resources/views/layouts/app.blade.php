<!-- Stored in resources/views/layouts/app.blade.php -->
 
<html>
    <head>
        <title>@yield('title')</title>
         <!-- Google tag (gtag.js) -->
         <script async src="https://www.googletagmanager.com/gtag/js?id=G-346LMQJSCT"></script>
         <script>
         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());
 
         gtag('config', 'G-346LMQJSCT');
         </script>
    </head>
    <body>
        @section('sidebar')
            This is the master sidebar.
        @show
 
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>