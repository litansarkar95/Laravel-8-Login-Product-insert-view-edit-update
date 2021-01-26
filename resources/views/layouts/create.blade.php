@extends('layouts.layout')

@section('content')

<div class="card">
<div class="wrapper create-pizza">
<div class="card-header"> Create a New Pizza</div>
<div class="card-body">
    <form action="/pizza" method="POST">  
    @csrf
 <label for="name">Your Name : </label><br>
 <input type="text" name="name" id="name" ><br>
 <label for="name">Choose Pizza type: </label><br>
 <select name="type" id="type">
<option name="margarita">Margarita</option>
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

 <button type="submit" >Order Pizza</button>
</form>
</div>
</div>
</div>
@endsection