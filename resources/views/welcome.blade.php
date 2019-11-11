<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>fotoshow</title>
        <!-- Styles -->
        <style>
            html, body {
                background-color:yellow;
                color: green;
                font-family: sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }


            .content {
                text-align: center;
            }

            .title {
                font-size: 34px;
                float: left;
            }

            .center  {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                width: 400px;
            }

        </style>
    </head>
    <body>
    <a href="{{ route('login') }}">Login</a>
    <a href="{{ route('register') }}">Register</a>
    <a href="/bezoeker/index">Albums</a>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    Photoshow
                </div>

                <div class="center">


                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        Aenean commodo ligula eget dolor. Aenean massa.
                        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                        Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                        Nulla consequat massa quis enim.
                        Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
                        In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
                        Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.
                        Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.
                        Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
                        Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.
                        Phasellus viverra nulla ut metus varius laoreet.
                        Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue.
                        Curabitur ullamcorper ultricies nisi. Nam eget dui.   Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        Aenean commodo ligula eget dolor. Aenean massa.
                        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                        Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                        Nulla consequat massa quis enim.
                        Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
                        In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
                        Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.
                        Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.
                        Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
                        Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.
                        Phasellus viverra nulla ut metus varius laoreet.
                        Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue.
                        Curabitur ullamcorper ultricies nisi. Nam eget dui.   </p>
                </div>
            </div>
        </div>
    </body>
</html>
