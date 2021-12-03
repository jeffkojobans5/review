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

        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
 
    </head>
    <body>
        <header>
            <div class="container">
                <div class="logo">
                    <img src=" {{ asset('img/JsLoungeLogo.jpeg') }} " alt="logo" >                
                    <h1> <span class="bold-text"> <span class="logo-heading">Hello Customer </span> </span>, We value &#128525; your feedback   </h1>
                    <p> Please complete the following form and help us improve our customer service </p>
                </div>   
            </header>
                <main>
                    <div class="form-comment">
                        <textarea id="fakeComment" cols="4" rows="7" placeholder="Enter your comment here ... "></textarea>
                    </div>                    
                <div class="rate-food">
                    <h1 class="question"> <span class="question-span">How satisfied are you with our food &#127869; ? </span></h1>                                        
                    <div class="container" >
                        <section>
                            <p> Very Satisfied </p>
                            <h1 class="food-emoji"> &#128512;  </h1>                          
                        </section>
                        <section>
                            <p> Satisfied </p>
                            <h1 class="food-emoji"> &#128522;  </h1>                          
                        </section>
                        {{-- <section>
                            <p>  Neutral </p>
                            <h1 class="food-emoji"> &#128528;   </h1>                          
                        </section> --}}
                        <section>
                            <p> Unsatisfied </p>
                            <h1 class="food-emoji"> &#128533;  </h1>                          
                        </section>
                        {{-- <section>
                            <p> Very Unsatisfied </p>
                            <h1 class="food-emoji"> &#128544;   </h1>                          
                        </section>                                                                                                 --}}
                    </div>       
                </div>    
                    
                <div class="rate-service">
                    <h1 class="question"> <span class="question-span">How satisfied are you with our service &#129309; ? </span></h1>                    
                    <div class="container " style="">
                        <section>
                            <p> Very Satisfied </p>
                            <h1 class="service-emoji"> &#128512;  </h1>                          
                        </section>
                        <section>
                            <p> Satisfied </p>
                            <h1 class="service-emoji"> &#128522;  </h1>                          
                        </section>
                        {{-- <section>
                            <p>  Neutral </p>
                            <h1 class="service-emoji"> &#128528;   </h1>                          
                        </section> --}}
                        <section>
                            <p> Unsatisfied </p>
                            <h1 class="service-emoji"> &#128533;  </h1>                          
                        </section>
                        {{-- <section>
                            <p> Very Unsatisfied </p>
                            <h1 class="service-emoji"> &#128544;   </h1>                          
                        </section>                                                                                                 --}}
                    </div>  
                </div>   

                </main>
                
                <div class="next buttons">  
                    <button id="nextButtons"> next &#128073; </button>
                </div>

                <div class="buttons" style="margin-top: -53px">
                        <form action=" {{ route('thank___you') }}  " method="post" class="form">
                            @csrf
                            <input type="hidden" id="food-rate" name="foodRatings" value="">                    
                            <input type="hidden" id="service-rate" name="serviceRatings" value="">                    
                            <input type="hidden" id="ratings" name="branch" value="JsLounge">  
                            <input type="hidden" id="comment" name="comments" value="N/A">  
                            <button type="submit" name="submit" > Submit </button>
                        </form>
                        <div class="comment">
                            <p class="link-right" id="sub"> Tell us how we can improve </p>
                        </div>
                </div>
            </div>
    </body>

    <script src="{{ asset('js/index.js') }}"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-RKLPBDLLCN"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-RKLPBDLLCN');

    </script>

</html>

