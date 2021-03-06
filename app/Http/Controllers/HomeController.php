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
        // $this->middleware('auth');
        // $this->middleware('auth')->except(['index']);
         $this->middleware('auth')->only(['index']);
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

        $banners = Menu::where([['active', '=', '1'], ['banner', '=', '1']])->get();

        return view('public.welcome', [
            'welcome' => $welcome,
            'opening' => $opening,
            'banners' => $banners,
        ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function menus()
    {
        $menus = Menu::where([['active', '=', '1'], ['function', '=', '0'], ['banner', '=', '0']])
            ->orderBy('hierarchy', 'asc')
            ->get();

        $menuDocs = Document::where([['active', '=', '1'], ['title', 'like', '%MenuDoc%']])
            ->orderBy('hierarchy', 'asc')
            ->get();

        return view('public.menu', ['menus' => $menus, 'menuDocs' => $menuDocs]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function view()
    {
        $viewDocs = Document::where([['active', '=', '1'], ['title', 'like', '%ViewDoc%']])
            ->orderBy('hierarchy', 'asc')
            ->get();

        $images = [
            "media/images/aMainFront-1.jpg",
            "media/images/aInteriorSpace-1.jpg",
            "media/images/aBreakfastBuffetRoom.jpg",
            "media/images/aBreakfastBuffetContinental.jpg",
            "media/images/aBreakfastBuffetBakery.jpg",
            "media/images/aMainFront-2.jpg",
            "media/images/aInteriorSpace-2.jpg",
        ];

        return view('public.view', ['images' => $images, 'viewDocs' => $viewDocs]);
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

        return view('public.functions', ['functions' => $functions, 'documents' => $documents]);
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

        return view('public.about', ['about' => $about, 'opening' => $opening]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('public.home');
    }
}
