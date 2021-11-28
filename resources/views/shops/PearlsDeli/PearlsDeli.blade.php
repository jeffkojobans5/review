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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>

        <!-- Styles -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    </head>
    <body>
        <header>
            <div class="container">
                <div class="logo">
                    <img src=" {{ asset('img/PearlsDeliLogo.jpeg') }} " alt="logo" >                
                    <h1> <span class="bold-text">Hello Customer </span>, Please rate us &#128077;  </h1>
                </div>   
            </header>
                <main>
                    <div class="form-comment">
                        <textarea id="fakeComment" cols="4" rows="7" placeholder="Enter your comment here ... "></textarea>
                    </div>                    
                    <div class="container" >
                        <section class="gsap">
                            <p> Very Impressed </p>
                            <h1 class="emoji"> &#128512;  </h1>                          
                        </section>
                        <section>
                            <p> Satisfied </p>
                            <h1 class="emoji"> &#128522;  </h1>                          
                        </section>
                        <section>
                            <p>  Ok </p>
                            <h1 class="emoji"> &#128528;   </h1>                          
                        </section>
                        <section>
                            <p> Not Impressed </p>
                            <h1 class="emoji"> &#128533;  </h1>                          
                        </section>
                        <section>
                            <p> Poor Service </p>
                            <h1 class="emoji"> &#128544;   </h1>                          
                        </section>                                                                                                
                    </div>                        
                </main>
                <div class="buttons">
                        <form action=" {{ route('thank_you') }} " method="post" class="form" >
                            @csrf
                            <input type="hidden" id="ratings" name="ratings" value="">                    
                            <input type="hidden" id="ratings" name="branch" value="PearlsDeli">  
                            <input type="hidden" id="comment" name="comment" value="N/A">  
                            <button type="submit" name="submit" > Submit </button>
                        </form>
                        <div class="comment">
                            <a class="link-right" id="sub"> Submit with <br/>Comments </a>
                        </div>
                </div>
            </div>
    </body>

    <script src="{{ asset('js/index.js') }}"></script>
</html>

