<?php

namespace App\Http\Controllers;

use App\Document;
use App\Menu;

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
        $welcome = Document::where([['active', '=', '1'], ['title', 'like', '%Welcome%']])
            ->orderBy('hierarchy', 'asc')
            ->get();
        $opening = Document::where([['active', '=', '1'], ['title', 'like', '%OpeningTime%']])
            ->orderBy('hierarchy', 'asc')
            ->get();

        return view('welcome', ['welcome' => $welcome, 'opening' => $opening]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function menus()
    {
        $menus = Menu::where([['active', '=', '1'], ['function', '=', '0']])
            ->orderBy('hierarchy', 'asc')
            ->get();

        return view('menus', ['menus' => $menus]);
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

        $documents = Document::where([['active', '=', '1'], ['title', 'like', '%Functions%']])
            ->orderBy('hierarchy', 'asc')
            ->get();

        return view('functions', ['functions' => $functions, 'documents' => $documents]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function about()
    {
        $opening = Document::where([['active', '=', '1'], ['title', 'like', '%OpeningTime%']])
            ->orderBy('hierarchy', 'asc')
            ->get();

        $about = Document::where([['active', '=', '1'], ['title', 'like', '%About%']])
            ->orderBy('hierarchy', 'asc')
            ->get();

        return view('about', ['about' => $about, 'opening' => $opening]);
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
