<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Select User Page</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Awsomeアイコン -->
        <script src="https://use.fontawesome.com/3f882b3f5b.js"></script>
        <!-- jQuery -->
        <script
         src="https://code.jquery.com/jquery-3.1.1.slim.js"
         integrity="sha256-5i/mQ300M779N2OVDrl16lbohwXNUdzL/R2aVUXyXWA="
         crossorigin="anonymous">
         </script>
         <!-- tether.min.js -->
         <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
        <!-- Bootstrap ver4.0 -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>


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
                margin: 10px 0 0 0;
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
        <div class="container">
            <div class="content">
                <div class="title m-b-md">
                    <p>DuPo</a>
                </div>
                <div class="links">
                    <a class="btn_a" href="{{ url('/dupo_auth') }}"><i class="fa fa-fw fa-address-card-o" aria-hidden="true"></i>ログインユーザ</a>
                    <a class="btn_b " href="{{ url('/guest_dupo') }}"><i class="fa fa-fw  fa-user-o" aria-hidden="true"></i>ゲストユーザ</a>
                    <a class="btn_d" href="{{ url('/dupo_ura') }}"><i class="fa fa-fw fa-user-secret " aria-hidden="true"></i>DuPo裏口</a>
                    <a class="btn_c" href="https://github.com/Fendo181/DuPo"><i class="fa fa-fw fa-github" aria-hidden="true"></i>GitHub</a>
                </div>
            </div>
        </div>
        <script type="text/javascript">
          var input = [];
             konami = [38,38,40,40,37,39,37,39,66,65];

          $(window).keyup(function(e){
            input.push(e.keyCode);

            if (input.toString().indexOf(konami) >= 0)
            {
               $("div#target").css("fontSize","500%")
               input = [];
            }
          });
         </script>
    </body>
</html>
