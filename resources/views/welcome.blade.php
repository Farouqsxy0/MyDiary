<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>E-Diary</title>
        

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-image: url('{{ url('images/diary.jpg')}}');
                background-size:cover;
                background-attachment: fixed;
                color: black;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0 auto;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color:white;
                padding: 0 20px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .links > a:hover{
                color:black;
            }

            .m-b-md {
                margin-bottom: 0px;
                font-size: 20px;
                font-weight: bold;
                margin-top: -100px;
                margin: 0 auto;
                overflow: hidden;
            }
            #p1{
                font-size: 30px;
                color :#000;
                font-family: 'Algerian', sans-serif;
                margin-top: -3px;
            }
            #clock{
                font-size: 120px;
                font-family: 'Algerian', sans-serif;
                text-align: center;
                margin: 0 auto;
            }
            #fa{
                margin-right: 8px;
                font-size: 10px;
            }
            #fab{
                padding: 15px;
                font-size:30px;
                color:#fff;
            }
            #fab:hover{
                color:black;
            }
            #footer{
                margin-top: 100px;
                margin-bottom: -120px;
            }
            h3{
                color:white;
                font-size: 1.2em;
                font-family:Cooper Black;
            }
            @media screen and (max-width:760px){
                #p1{
                    font-size: 18px;
                    padding: 10px 2px;
                    margin:0 auto;
                }
                #clock{
                font-size: 50px;
                font-family: Algerian;
                text-align: center;
                margin: 0 auto;
                margin-top: 20px;
               }
               .links > a{
                padding: 0 32px;
                font-size: 10px;
                margin: 0 auto;
               }
            }
        </style>
        <!--styles end-->
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}"><span class="fa fa-user" id="fa"></span>Login</a>
                        <a href="{{ url('/register') }}"><span class="fa fa-unlock" id="fa"></span>Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <!--clock container-->
                <div class="title m-b-md" id="clock">
                </div>
                <!--end-->

                <p id="p1">Welcome To My Diary App Login Or Register To Get Started</p>

                <!--contact us icons-->
                <div class="" id="footer">
                    <h3>contact us</h3>
                    <a href="#"><span class="fab fa-facebook" id="fab"></span></a>
                    <a href="#"><span class="fab fa-twitter" id="fab"></span></a>
                    <a href="#"><span class="fab fa-google" id="fab"></span></a>
                    <a href="#"><span class="fab fa-youtube" id="fab"></span></a>
                </div>
                <!--end-->

            </div>
        </div>
    </body>

    <!--linked javascripts-->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/font-awesome.js"></script>
</html>
