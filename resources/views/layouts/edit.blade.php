@extends('layouts.layout')

@section('content')

<div class="card">
<div class="wrapper create-pizza">
<div class="card-header"> Edit Pizza</div>
<div class="card-body">
    <form action="/pizza/update" method="POST">  
    @csrf
    <input type="hidden" name="id" id="id" value="{{$pizza['id']}}" ><br>
 <label for="name">Your Name : </label><br>
 <input type="text" name="name" id="name" value="{{$pizza['name']}}" ><br>
 <label for="name">Choose Pizza type: </label><br>

 <select name="type" id="type">
 
  <option name="volcano" selected>Volcano</option>
<option name="margarita" >Margarita</option>
<option name="hawaiian">Hawaiian</option>
<option name="veg supreme">Veg Supreme</option>
<option name="volcano">Volcano</option>
 </select><br>
 <label for="base">Choose base type: </label><br>
 <select name="base" id="base">
<option name="cheesy crust">Cheesy Crust</option>
<option name="garlic crust">Garlic Crust</option>
<option name="thin & crispy">Thin & crispy</option>
<option name="thick">Thick</option>
 </select><br>

 <button type="submit" >Order Update</button>
</form>
</div>
</div>
</div>
@endsection