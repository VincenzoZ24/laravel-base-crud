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
                <td class="btn_visita"><a href="{{route('comics.show', ['comic'=>$comic->id])}}">VISITA</a></td>
                <form action="{{ route('comics.destroy', ['comic' => $comic]) }}" method="POST">
                    @method('delete')

                    @csrf
                    <td><button class="btn_elimina">ELIMINA</button> </td>
                </form>
                <td><a href="{{route('comics.edit', ['comic' => $comic])}}" class="btn_modifica">MODIFICA</a></td>
            </tr>
            @endforeach
            
        </tbody>
        
    </table>
    <div class="container_btn_aggiungi">
        <a href="{{route('comics.create')}}" class="btn_aggiungi">AGGIUNGI</a>
    </div>
    
@endsection