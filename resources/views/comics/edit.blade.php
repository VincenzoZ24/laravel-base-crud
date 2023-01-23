@extends('layouts.base')
@section('name')
   MODIFICA FUMETTO
@endsection


@section('content')
<form method="post" action="{{route('comics.update', ['comic' => $comic])}}">
    @method('put')
    @csrf
    <input type="text" id="title" name="title" placeholder="titolo" value="{{$comic->title}}">

    <input type="text" id="description" name="description" placeholder="descrizione" value="{{$comic->description}}">
    <input type="number" id="price" name="price" id="" placeholder="prezzo" value="{{$comic->price}}">
    <input type="text" id="series" name="series" placeholder="serie" value="{{$comic->series}}">
    <input type="date" id="sale_date" name="sale_date"  value="{{$comic->sale_date}}">
    <button type="submit">AGGIORNA</button>

</form>
@endsection