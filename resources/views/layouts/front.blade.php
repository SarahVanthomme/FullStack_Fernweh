<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
{{--
    <link rel="stylesheet" href="{{asset('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}">
--}}
    <link href="{{asset('https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap')}}" rel="stylesheet">
    <link href="{{asset('https://fonts.googleapis.com/css?family=Rajdhani:300,400,500,600,700&display=swap')}}" rel="stylesheet">
{{--    <link rel="stylesheet" href="css/slick.css">--}}
{{--    <link rel="stylesheet" href="css/bootstrap.min.css">--}}

    <link rel="stylesheet" href="{{asset('css/front-app.css')}}">
    <title>@yield('title')</title>
</head>
<body>

<!--if page type x then show header-dark, if page type y then show header-light-->
@include('partials.header-dark')

@yield('content')

@include('partials.footer')


{{--<script src="js/jquery.min.js"></script>
<script src="js/script.js"></script>
<script src="js/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js">
</script>--}}

<script src="{{asset('js/front-app.js')}}"></script>
</body>
</html>

<!--bij reviews ook accordion gebruiken -- INTERACTO.COM RFS AUTOMATED APPROACH FOR RESPONSIVE FONT SIZES voor fonts werken met vw ipv
rem want werkt beter-->
