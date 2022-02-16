

<html>
<head>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" ></script>
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar  navbar-light bg-dark shadow-sm">
            <div class="container justify-content-center">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <div class="d-flex justify-content-center">
                    <img src="../image/logo1.png" class="logo_image"  alt="logo"/>
                    </div>
                </a>
                
            </div>
        </nav>

<div class="container box_view p-3 pt-5 pb-5 mt-3">
@foreach($images as $images)

<div class="d-flex justify-content-around ">
<div class="col-6 box_view">
<img class="d-block w-100" src="{{ asset('storage/image/'.$images->image)}}" width="100%" alt="First slide">
</div>
<div class="col-5 box_view p-3">
<div class="d-flex justify-content-center bold_font">
<h1 >{{$images->title}}</h1>

</div>
<hr>
<p>{{$images->description}}</p>
</div>
</div>

@endforeach

</div>
</body>
</html>