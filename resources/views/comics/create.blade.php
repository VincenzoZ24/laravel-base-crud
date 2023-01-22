@extends('layouts.base')
@section('name')
   INSERISCI FUMETTO
@endsection


@section('content')
<form method="post" action="{{route('comics.store')}}">
    @csrf()
    <input type="text" id="title" name="title"  placeholder="titolo">
    <input type="text" id="description" name="description" placeholder="descrizione">
    <input type="number" id="price" name="price" id="" placeholder="prezzo">
    <input type="text" id="series" name="series" placeholder="serie">
    <input type="date" id="sale_date" name="sale_date" id="" >
    <button type="submit">CREA</button>

</form>
@endsection