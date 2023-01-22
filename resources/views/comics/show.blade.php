@extends('layouts.base')
@section('name')
    Fumetto: {{$comic->title}}
@endsection
@section('content')
   <ul>
     <li>PREZZO: {{$comic->price}} €</li>
     <li>SERIE: {{$comic->series}}</li>
     <li>DATA: {{$comic->sale_date}}</li>
   </ul>
  
                    
     
@endsection