@extends('layouts.layout')

@section('content')
<div class="table-content">
<div class="card-header">  Pizza List</div>
<div class="">
{{session('msg')}}
<table class="table-content">
<tr>
    <th>Name</th>
    <th>Base</th> 
    <th>Type</th>
    <th>Edit</th>
    <th>Delete</th>
</tr>
@foreach($pizzas as $pizza)
<tr>
    <td>{{$pizza->name}}</td>
    <td>{{$pizza->base}}</td>
    <td>{{$pizza->type}}</td>
    <td><a href="/pizza/edit/{{$pizza->id}}"><button class="success">Edit</button></a></td>
    <td>
    <form action="/pizza/{{$pizza->id}}" method="POST">
    @csrf
    @method('DELETE')    
    <button class="danger">Delete</button></td>
</form>
</tr>

@endforeach
</table>




</div></div>


@endsection