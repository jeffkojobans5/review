<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">            
        <title> Review </title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;700;800;900&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/thanks.css') }}" >
    </head>
    <body>
        <header class="header">
            <div class="container">
                <h1> <img src=" {{ asset('img/JsLoungeLogo.jpeg')}} " alt="logo" class="logo" style="width: 200px"> Thanks for rating us. &#128077;</h1>
            </div>
        </header>
    </body>

    <script>
        function Redirect() 
        {  
            window.location.href = "http://127.0.0.1:8000/JsLounge" 
        } 
        setTimeout('Redirect()', 5000); 
    </script>
</html>
