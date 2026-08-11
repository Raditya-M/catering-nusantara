<?php

namespace App\Http\Controllers;

use App\Models\Menu;

class MenuPageController extends Controller
{
    public function index()
    {
        $menus = Menu::latest()->paginate(12);

        return view('menu.index', compact('menus'));
    }

    public function show(Menu $menu)
    {
        return view('menu.detail', compact('menu'));
    }
}