<?php

namespace App\Http\Controllers;

use App\Menu;
//use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function welcome()
    {
        return view('welcome');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function menu()
    {
        $menus = Menu::where([['active', '=', '1'], ['function', '=', '0']])
            ->orderBy('hierarchy', 'asc')
            ->get();

        return view('menu', ['menus' => $menus]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function view()
    {

        $images = [
            "media/images/aMainFront-1.jpg",
            "media/images/aInteriorSpace-1.jpg",
            "media/images/aBreakfastBuffetRoom.jpg",
            "media/images/aBreakfastBuffetContinental.jpg",
            "media/images/aBreakfastBuffetBakery.jpg",
            "media/images/aMainFront-2.jpg",
            "media/images/aInteriorSpace-2.jpg",
        ];

        return view('view', ['images' => $images]);
    }

    /**
     * Show the application page 'functions'.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function functions()
    {
        $functions = Menu::where([['active', '=', '1'], ['function', '=', '1']])
            ->orderBy('hierarchy', 'asc')
            ->get();

        return view('functions', ['functions' => $functions]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function about()
    {
        return view('about');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}
