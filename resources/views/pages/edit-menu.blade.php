@extends('layouts.main-layout')
@section('content')
<h1>EDIT A MEAL</h1>
<form action="{{route('menu.update',$menu)}}"
    method="POST">
    @csrf
    <label for="foodName"> <strong>Food Name : </strong> </label>
    <input type="text"
        name="foodName"
        value={{$menu
        -> foodName}}> <br> <br>
    <label for="beverageName"> <strong>Beverage Name : </strong> </label>
    <input type="text"
        name="beverageName"
        value={{$menu
        -> beverageName}}> <br> <br>
    <label for="sauceName"> <strong>Sauce Name : </strong> </label>
    <input type="text"
        name="sauceName"
        value={{$menu
        -> sauceName}}> <br> <br>
    <label for="fruitName"> <strong>Fruit Name : </strong> </label>
    <input type="text"
        name="fruitName"
        value={{$menu
        -> fruitName}}> <br> <br>
    <label for="price"> <strong>Total Price : </strong> </label>
    <input type="text"
        name="price"
        value={{$menu
        -> price}}> <br> <br>
    <input type="submit"
        value="EDIT MEAL">
</form>
@endsection