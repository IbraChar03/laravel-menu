<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MainController extends Controller
{
    public function home()
    {
        $menus = Menu::all();
        return view("pages.home", compact("menus"));
    }
}