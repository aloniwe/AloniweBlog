<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title','Aloniwe blog')</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 card" style="background-color:lavender;">
            <div class="card-body">
                <h4 class="card-title">Article</h4>
                <p class="card-text">Some example text some example text.</p>
                <a href="#" class="btn btn-primary">See ALL</a>
            </div>
            <img class="card-img-bottom" src="panda.png" alt="Card image" style="width:100%">
        </div>
        </div>
        <div class="col-md-4" style="background-color:lavenderblush;"></div>
        <div class="col-md-4" style="background-color:lavender;"></div>
    </div>
</div>
@yield('content')
</body>
</html>