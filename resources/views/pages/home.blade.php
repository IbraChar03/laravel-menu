@extends('layouts.main-layout')
@section('content')
<h1>Restaurant Meals</h1>
<h2>
    <a href="{{route('menu.create')}}">
        Create a new Meal </a>
</h2>
<ul>
    @foreach ($menus as $menu)
    <li>
        <strong> Starters : </strong> {{$menu -> foodName}} <br>
        <strong>Beverage : </strong>{{$menu -> beverageName}} <br>
        <strong>Sauce : </strong>{{$menu -> sauceName}} <br>
        <strong>Fruit : </strong>{{$menu -> fruitName}} <br>
        <strong>Total Price : </strong>{{$menu -> price}} &euro; <br>
        <a href="{{route('menu.edit',$menu)}}">EDIT</a> <br>
        <a href="{{route('menu.delete',$menu)}}">DELETE</a>
    </li> <br> <br>

    @endforeach
</ul>

@endsection