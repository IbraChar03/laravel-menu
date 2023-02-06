@extends('layouts.main-layout')
@section('content')
<h1>CREATE A NEW MEAL</h1>
<form action="{{route('menu.request')}}"
    method="POST">
    @csrf
    <label for="foodName"> <strong>Food Name : </strong> </label>
    <input type="text"
        name="foodName"
        id=""> <br> <br>
    <label for="beverageName"> <strong>Beverage Name : </strong> </label>
    <input type="text"
        name="beverageName"
        id=""> <br> <br>
    <label for="sauceName"> <strong>Sauce Name : </strong> </label>
    <input type="text"
        name="sauceName"
        id=""> <br> <br>
    <label for="fruitName"> <strong>Fruit Name : </strong> </label>
    <input type="text"
        name="fruitName"
        id=""> <br> <br>
    <label for="price"> <strong>Total Price : </strong> </label>
    <input type="text"
        name="price"
        id=""> <br> <br>
    <input type="submit"
        value="CREATE MEAL">
</form>
@endsection