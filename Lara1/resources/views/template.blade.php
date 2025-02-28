<!doctype html> <html lang="en">   
    <head>     
        <title>@yield('title')</title>     
        <!-- Required meta tags -->     
        <meta charset="utf-8">     
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-tofit=no">      
        <!-- Bootstrap CSS -->     
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">   
    </head>   
    <body> 
            
        @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif
        
        @if (Session::has('messages'))
            <div class="alert alert-info">{{ Session::get('messages') }}</div>
        @endif

        @if (Session::has('messager'))
            <div class="alert alert-info">{{ Session::get('messages') }}</div>
        @endif
        @yield('content')
        
    </body> 
</html> 