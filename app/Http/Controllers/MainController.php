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
    public function createMenu()
    {
        return view("pages.create-menu");
    }
    public function requestMenu(Request $request)
    {
        $data = $request->validate([
            "foodName" => "string|max:32|required",
            "beverageName" => "string|max:32|required",
            "sauceName" => "string|max:32|required",
            "fruitName" => "string|max:32|required",
            "price" => "numeric|required"
        ]);
        $menu = new Menu();
        $menu->foodName = $data["foodName"];
        $menu->beverageName = $data["beverageName"];
        $menu->sauceName = $data["sauceName"];
        $menu->fruitName = $data["fruitName"];
        $menu->price = $data["price"];
        $menu->save();
        return redirect()->route("home");

    }
    public function editMenu(Menu $menu)
    {
        return view("pages.edit-menu", compact("menu"));

    }
    public function updateMenu(Request $request, Menu $menu)
    {
        $data = $request->validate([
            "foodName" => "string|max:32|required",
            "beverageName" => "string|max:32|required",
            "sauceName" => "string|max:32|required",
            "fruitName" => "string|max:32|required",
            "price" => "numeric|required"
        ]);
        $menu->foodName = $data["foodName"];
        $menu->beverageName = $data["beverageName"];
        $menu->sauceName = $data["sauceName"];
        $menu->fruitName = $data["fruitName"];
        $menu->price = $data["price"];
        $menu->save();
        return redirect()->route("home");
    }
}