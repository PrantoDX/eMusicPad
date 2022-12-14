<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ ('\backend\css\padcenter.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <title>Document</title>
</head>
<body style="background-color: #1e1c2a;">

    
    <div class="container d-flex justify-content-center" >
        <figure class="card card-product-grid card-lg"> <a href="#" class="img-wrap" data-abc="true"> <img src="{{ url('/uploads/'.$musicpad->image) }}"> </a>
            <figcaption class="info-wrap">
                <div class="row">
                    <div class="col-md-9 col-xs-9"> <a href="#"  style="font-size: 20px" class="title" data-abc="true">{{ $musicpad->name }}</a> <span class="" style="font-size: 18px">{{ $musicpad->location }}</span> </div>
                    <div class="col-md-3 col-xs-3">
                        <div class=" text-right" style="font-size: 17px"> {{ $musicpad->phone }} </div>
                    </div>
                </div>
            </figcaption>
            <div class="bottom-wrap-payment">
                <figcaption class="info-wrap">
                    <div class="row">
                        <div class="col-md-9 col-xs-9"> <a href="#" class="title" data-abc="true" style="font-weight: bold;" >Description</a>
                            <p>{{ $musicpad->description }}</p>
                        </div>
                        <div class="col-md-9 col-xs-9"> <a href="#" class="title" data-abc="true" style="font-weight: bold;" >Available Instrument</a>
                           
                              @foreach ($ints as $item)
                                  <p>*{{ $item->name }}</p>
                              @endforeach
                           
                            
                        
                        </div>
                        
                      
                    </div>
                </figcaption>
            </div>
            @auth()
            <div class="bottom-wrap"> <a href="{{ route('booking.form',$musicpad->id) }}" class="btn btn-primary float-right" data-abc="true"> Book now </a>
                <div class="price-wrap"> <a href="{{ route('musicpads.list') }}" class="btn btn-warning float-left" data-abc="true"> Back </a> </div>
            </div>
       
            @endauth()
            
            
            @guest()
            <div class="bottom-wrap"> <a href="{{ route('registration',$musicpad->id) }}" class="btn btn-primary float-right" data-abc="true"> Book now </a>
                <div class="price-wrap"> <a href="{{ route('musicpads.list') }}" class="btn btn-warning float-left" data-abc="true"> Back </a> </div>
            </div>
            @endguest()
            
           
           
       
        </figure>
    </div>  
  
   
</body>
</html>