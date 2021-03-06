
@extends('layouts.app')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Laravel</title>
        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
@section('content')
<body>

<div class="container">
<div class="row justify-content-left">
    
    <div class="col-md-9">

        @foreach ($articole as $object)
       
        @if($object->status=='PUBLISHED')
         <form action="/readmore" method="GET">
            <div class="card">
                <div class="card-header">
                    {{$object->status}}
                    {{$object->date}}
                 </div>
            <div class="card-body">
                    <input type="hidden" name="read_more" value="{{$object->slug}}" >
                    <input type="hidden" name="leg" value="{{$object->id}}" >
                    <h5 class="card-title" > {{ $object->title }}</h5>
                    <p class="card-text">{{ Str::limit( $object->context, 100)}}</p>     
            </div>  
            @if($object->image!="")
                <img class="card-img-top" src={{$object->image}}></img>
            @endif
            <button class="btn btn-dark"  type="submit"> Read More</button>
          </div>  
          <br>
            
        </form>
          @endif
          
        @endforeach

    </div>
    <div class="col-md-3">
    <h3>Tags</h3>
    @foreach ($tags as $object) 
    <form action="/tags" method="GET" >
        <input type="hidden" name="taguri" value="{{$object->name}}" class="form-control">    
        <button class="btn btm-primary"  type="submit"> {{$object->name}}</button>
       </form>
        @endforeach
    </div>
</div>
</body>
</html>
@endsection

