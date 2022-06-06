@extends('layout.main')
@section('content')
<form action="" method="post">
    {{@csrf_field()}}
    Name : <input type="text" value="{{old('name')}}" name="name"> </br>
    @error('name')
        <span class="text-danger">{{$message}}</span><br>
    @enderror
    Id : <input type="text" name="id" value="{{old('id')}}"> </br>
    @error('id')
        <span class="text-danger">{{$message}}</span><br>
    @enderror
    Price : <input type="text" value="{{old('price')}}" name="price"> </br>
    @error('price')
        <span class="text-danger">{{$message}}</span><br>
    @enderror
    
    Manufacturing Date :<input type="date" name="mandate"> </br>
   
    <input type="submit" value="Create">
</form>
@endsection