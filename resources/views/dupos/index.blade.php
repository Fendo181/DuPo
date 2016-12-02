<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome Dupo</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Awsomeアイコン -->
        <script src="https://use.fontawesome.com/3f882b3f5b.js"></script>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
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
                font-size: 18px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .btn {
                background: #EEE;
                border: 1px solid #DDD;
                border-radius: 8px;
                -moz-border-radius: 8px;
                -webkit-border-radius: 8px;
                color: #111;
                width: 100px;
                padding: 10px 0;
            }

            .btn_a {
                background: #5298c4;
                border: 1px solid #DDD;
                border-radius: 8px;
                -moz-border-radius: 8px;
                -webkit-border-radius: 8px;
                color: #111;
                width: 100px;
                padding: 10px 0;
            }

            .btn_b {
                background: #55c452;
                border: 1px solid #DDD;
                border-radius: 8px;
                -moz-border-radius: 8px;
                -webkit-border-radius: 8px;
                color: #111;
                width: 100px;
                padding: 10px 0;
            }

            .btn_c {
                background: #eccf51;
                border: 1px solid #DDD;
                border-radius: 8px;
                -moz-border-radius: 8px;
                -webkit-border-radius: 8px;
                color: #111;
                width: 100px;
                padding: 10px 0;
            }

            .btn_d {
                background: #fb743a;
                border: 1px solid #DDD;
                border-radius: 8px;
                -moz-border-radius: 8px;
                -webkit-border-radius: 8px;
                color: #111;
                width: 100px;
                padding: 10px 0;
            }


        </style>
    </head>
    <body>
            <div class="content">
                <div class="title m-b-md">
                    <p>DuPo</a>
                </div>
                <div class="links">
                    <a class="btn_a" href="{{ url('/dupo') }}"><i class="fa fa-fw fa-book" aria-hidden="true"></i>Let's DuPo</a>
                    <a class="btn_b" href="{{ url('/about') }}"><i class="fa fa-fw fa-question" aria-hidden="true"></i>DuPoとは?</a>
                    <a class="btn_d" href="{{ url('/aboutme') }}"><i class="fa fa-fw fa-male" aria-hidden="true"></i>About me</a>
                    <a class="btn_c" href="https://github.com/Fendo181/DuPo"><i class="fa fa-fw fa-github" aria-hidden="true"></i>GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
