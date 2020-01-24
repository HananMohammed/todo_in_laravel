<!DOCTYPE <!DOCTYPE html>
<html class="no-js"> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/BootStrap.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/calendercss.css">
        <script type="text/javascript" src="js/calenderjs.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


    </head>
    <body>
     @include('anony_layout.header')
    @if(count($errors)>0)
    @foreach($errors->all() as $error)
    <div style="width:300px;"class="alert alert-danger">
    {{$error}}
    </div>
    @endforeach
    @endif
    @yield('content')


<div class=footer style =" height:130px"> 
            <div class="social">
                <ul class="fot_ul">
                    <li class="fot_li"><img src="images/FB.PNG"/></li>
                    <li class="fot_li"><img src="images/Google.PNG"/></li>
                    <li class="fot_li"><img src="images/in.PNG"/></li>
                    <li class="fot_li"><img src="images/V.PNG"/></li>
                    <li class="fot_li"><img src="images/TW.PNG"/></li>
                    <li class="fot_li"><img src="images/social.PNG"/></li>

                </ul>
            </div>
          
            <p id="copyright" >&copy 2020 Exclusive . All right reserved | Design By<span> Hanan Mohammed </span></p>
        </div>


    </div>
    </body>
</html>