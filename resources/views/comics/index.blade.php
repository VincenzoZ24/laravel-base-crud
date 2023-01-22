@extends('layouts.base')
@section('content')
    <table>
        <thead>
            <tr>
                <th>ID</th>
            <th>TITLE</th>
            <th>PRICE</th>
            <th>SERIES</th>
            <th>SALE_DATE</th>
            </tr>
            
        </thead>
        <tbody>
            @foreach ($comics as $comic)
            <tr>
                <th>{{$comic->id}}</th>
                <td>{{$comic->title}}</td>
                <td>{{$comic->price}}</td>
                <td>{{$comic->series}}</td>
                <td>{{$comic->sale_date}}</td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
@endsection