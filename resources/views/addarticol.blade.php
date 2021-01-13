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
    <div class="row justify-content-center">
      <div class="col-md-10">
        <form action="/post" method="GET">
            <div class="row">
                <div class="col">
                     <input type="text" class="form-control" name="title" placeholder="Title">
                </div>
                <div class="col">
                     <input type="text" class="form-control" name="slug" placeholder="Slug">
                </div>
                  
            </div> 
            <br>
            <div class="row">
                <div class="col">
            <select class="custom-select custom-select-sm" name="categorii">
                    @foreach ($cat as $object) 
                    <option value="{{$object->id}}">{{$object->name}}</option>
                    @endforeach
            </select>
            </div>
        </div>
        <br>
        <div class="form-group">
            <textarea class="form-control" name="context" rows="10" placeholder="Context"></textarea>
        </div>
        <br>
        <div class="form-group">
            
            <input type="text" class="form-control" name="image" placeholder="Image URL">
        </div>
        <button type="submit" class="btn btn-primary mb-2">Add Article</button>

        </form>
    </div>
</div>
</div>

</body>
</html>
@endsection