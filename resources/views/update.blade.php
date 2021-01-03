@extends('layouts.app')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
@section('content')
<body class="antialiased">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update Personals Details') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('edit') }}"  enctype="multipart/form-data">
                    @csrf

                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                        <div class="col-md-6">
                            <input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ Auth::user()->username }}" required autocomplete="username" autofocus>

        
                        </div>
                    </div>
                        <div class="form-group row">
                             <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                         <div class="col-md-6">
                             <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{Auth::user()->name }}" required autocomplete="name" autofocus>

        
                         </div>
                    </div>
                        <div class="form-group row">
                            <label for="prenume" class="col-md-4 col-form-label text-md-right">{{ __('Prenume') }}</label>

                        <div class="col-md-6">
                             <input id="Prenume" type="text" class="form-control @error('name') is-invalid @enderror" name="prenume" value="{{ Auth::user()->prenume }}" required autocomplete="prenume" autofocus>

        
                            </div>
                        </div>
                            <div class="form-group row mb-0">
                                 <div class="col-md-8 offset-md-4">
                                    <button type="submit" name="edit_personal_data" class="btn btn-primary">
                                             {{ __('Update') }}
                                     </button>



                        

                             
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>


</div>
<br>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Modify Image') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('edit') }}" enctype="multipart/form-data">
                        @csrf

                        
                        <div class="form-group row">
                            <label for="image1"  class="col-md-4 col-form-label text-md-right">Change profil image
                           
                            </label>

                            <div class="col-md-6">
                                <input id="image1" type="file" class="form-control @error('image1') is-invalid @enderror" name="image1">
                               
                            </div>
                        </div>
                            <img src="{{asset(Auth::user()->image)}}" style="height:120px;width:120px; border-radius:50% margin-right=15%">
                     
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" name="edit_image" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>

                             
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>


</div>
</body>
</html>
@endsection