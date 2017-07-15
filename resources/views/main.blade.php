<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="{{url('public/img/favicon.png')}}" type="image/x-icon">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .main-product{
                width: 50%;
                margin: 0 auto;
            }
            #product-price{
                font-weight: bold;
                color:green;
            }
            #timer{
                font-weight: bold;
                color:red;
            }
            .progress-bar {
            -webkit-transition: none;
            -moz-transition: none;
            -ms-transition: none;
            -o-transition: none;
            transition: none;
        }​
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="row main-product">
                  <div class="main-product" >
                    <div class="">
                      <img height="100%" src="{{url('public/img/iphone7-red.png')}}" alt="..."><br><br>
                      <div class="caption">
                        <div class="progress" style="height:5px;">
                          <div id="progressbar" class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                          </div>
                        </div>
                        <span id="timer"></span>
                        <h3>Apple iPhone 7 128GB (Red)<br><text id="product-price">HK$<text id="product-price-amount">0.00</text></text></h3>
                        <p>Retail Price: HK$7,388.00</p>
                        <p>
                            <a href="{{(Auth::check() ? '#' : url('login'))}}" id="bid" class="btn btn-success" role="button">BID NOW &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-1 Credit</a> <br><br>
                            <a href="#" class="btn btn-default" role="button">BUY IT NOW FOR HK$3,000</a>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="title m-b-md">
                    <img width="50%" src="{{url('/public/img/oction-alt-black-1.png')}}" alt="Main Logo" />
                </div>
            </div>
        </div>




        <!-- Button trigger modal 
        <button type="button" class="btn btn-primary" data-toggle="won-modal" data-target="#exampleModal">
          CONGRATULATIONS!
        </button>-->

        <!-- Modal -->
        <div class="modal fade" id="won-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">{{(Auth::check() ? 'CONGRATULATIONS!' : 'SORRY!')}}</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <h4>{{(Auth::check() ? 'You won!' : 'Someone has won this auction!')}}</h4>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="{{url('home')}}" type="button" class="btn btn-primary">Ok</a>
              </div>
            </div>
          </div>
        </div>


    </body>
</html>

<!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script>
    function now() {
        return window.performance ? window.performance.now() : Date.now();
    }
        
        var count = 10000;
        var delay = 20; //20 ms. This will be only indicative. There's no guarantee the browswer will call the function after exactly this time
        var remaining = 0;
        var initTick = 0;
        var timerElement = document.getElementById("timer");
        var amount = 0;

        function tick() {
           var remaining = (count - (now() - initTick)) / 1000;  
           //console.log(remaining);
           remaining = remaining >= 0 ? remaining : 0;
           var secs = remaining.toFixed(3);
           $( "#progressbar" ).css("width", secs*10+"%");
           timerElement.innerHTML = secs + "s remaining";
           if (remaining){
            setTimeout(tick, delay);
            }
            else{
                $('#won-modal').modal('show')
            }
        }
        
        initTick = now();
        //console.log(now());
        setTimeout(tick, delay);

        $( "#bid" ).click(function() {
          initTick = now();
          $('#progressbar').css('animation', 0.1 + 's linear 0s normal none infinite progress-bar-stripes');
          $( "#progressbar" ).css("width", "100%");
          amount = parseFloat($( "#product-price-amount" ).text())+0.01;
          $( "#product-price-amount" ).html(amount.toFixed(2));
          //console.log(parseFloat($( "#product-price-amount" ).text()));
          setTimeout(tick, delay);
        });




    </script>










