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
    <body class="antialiased">
 @section('content')
<body>
<div class="container">
<div class="row justify-content-center">
    
    <div class="col-md-9">
            <h3>Proiect la Proiectarea Aplicatilor Web</h3>
            <p class="font-weight-bold">Proiectul contine urmatoarele:</p>
            <p>+ Pagina de Login si Create User , pentru partea de utilizator standard</p>
            <p>+ Pagina de Login si Create User , pentru Admin</p>
            <p>+ Adaugare de categorii , taguri, articole , de catre Admin </p>
            <p>+ Adaugare de  articole , de catre User </p>
            <p>+ Vizualizare , stergere , clonare , editare, creeare, a articolelor , categoriilor si tagurilor de catre Admin </p>
            <p>+ Vizualizare, creeare a articolelor de catre User</p>
            <p>+ Update la  datele personale ,User, Admin</p>
            <p>+ Search dupa o parte din titlu, sau titlu </p>
            <p>+ Tagurile pentru cautare </p>
            <p class="font-weight-bold">Ce as mai vrea sa contina <p>
            <p>+ Adaugare commentari la articole , User</p>
            <p>+ Chat pentru User </p>
            
    
    
    </div>
</div>
</div>


</body>
</html>
@endsection

