<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            div form {
                font-weight: 600;
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
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            #submit-button {
                background-color: #636b6f;
                border: none;
                color: white;
                padding: 16px 32px;
                text-decoration: none;
                margin: 4px 2px;
                cursor: pointer;
                outline-width: 0;

            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Play with Notifications
                </div>

                <div class="links">
                    <form role="form" action="{{ url('notify') }}" method="post"> 
                        {{ csrf_field() }}
                        Enter User Email to notify: 
                        <input name="email"></input><br><br>
                        <input type="radio" name="channel" value="mail">Send Email Notification<br><br>
                        <input type="radio" name="channel" value="slack">Send slack Notification<br><br>
                        <input style="margin-left:35px;" type="radio" name="channel" value="database">Send Database Notification<br><br>
                        <input id="submit-button" type="submit" value="Notify">
                        {{-- <input type="radio" name="channel" value="nexmo">Send SMS Notification<br><br> --}}
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
