@extends('layouts.main-layout')
@section('content')
<h1>Restaurant Menu</h1>
<ul>
    @foreach ($menus as $menu)
    <li>
        <strong> Starters : </strong> {{$menu -> foodName}} <br>
        <strong>Beverage : </strong>{{$menu -> beverageName}} <br>
        <strong>Sauce : </strong>{{$menu -> sauceName}} <br>
        <strong>Price : </strong>{{$menu -> price}} &euro;
    </li> <br> <br>

    @endforeach
</ul>

@endsection