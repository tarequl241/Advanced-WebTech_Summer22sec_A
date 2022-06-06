@extends('layout.main')
@section('content')

    <h1>List</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Id</th>
            <th>Manufacturing Date</th>
            <th>Price</th>

        </tr>
        @foreach($product as $p)
        <tr>
            

            <td><a href="{{route('product.details',['id'=>$p->id,'name'=>$p->name])}}">{{$p->name}}</a></td>
                <td>{{$p->id}}</td>
                <td>{{$p->mandate}}</td>
                <td>{{ $p->price }}</td>

        </tr>
        @endforeach
    </table>
@endsection