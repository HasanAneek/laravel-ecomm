<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel E-Comm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
{{--    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">--}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <style>
        body{
            font-family: 'Poppins', sans-serif;
        }
        img.slider-img{
            height: 400px;
            position: relative;
            left: 450px;
        }
        .custom-product{
            height: 600px;
        }
        .carousel-caption{
            background-color: #3544355e;
            border-radius: 20px;
        }
       .trending-image{
           height: 100px;
       }
       .trending-item{
           float: left;
           width: 20%;
           text-align: center;
       }
       .trending-item a{
           text-decoration: none;
       }
       .trending-wrapper{
           margin: 40px;
       }
       .detail-img{
           height: 200px;
       }
       .global-btn{
           padding: 8px 20px ;
           border-radius: 20px;
           color: white;
           margin-top: 20px;
           border: none;
       }
       .cart-divider{
           border-bottom: 1px solid #cccccc;
           margin-bottom: 20px;
           padding-bottom: 20px;
       }
       .form{
            border: 1px solid lightgray;
           box-shadow: 10px 6px 20px gray ;
           padding: 30px ;
           margin-top: 50px;


       }

    </style>
</head>
<body>
    <x-header/>

    {{ $slot }}

<footer>
    <x-footer/>
</footer>


    {{--    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>--}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


</body>




