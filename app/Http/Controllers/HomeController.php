<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function welcome()
    {
        $carouselImages = [
            "../media/images/aMainFront-1.jpg",
            "../media/images/aInteriorSpace-1.jpg",
            "../media/images/aBreakfastBuffetRoom.jpg",
            "../media/images/aBreakfastBuffetContinental.jpg",
            "../media/images/aBreakfastBuffetBakery.jpg",
            "../media/images/aMainFront-2.jpg",
            "../media/images/aInteriorSpace-2.jpg",
        ];
//        {{-- <img src="/media/images/Home/aMainFront-3.jpg" width="400px"> --}}
//        {{-- <img src="/media/images/Home/gCoffeeMachine.jpg" width="200px"> --}}
//        {{-- <img src="/media/images/Home/aMainFront-4.jpg" width="400px"> --}}
//        {{-- <img src="/media/images/Home/gCoffeePour.jpg" width="400px"> --}}
//        {{-- <img src="/media/images/Home/gFacade.jpg" width="400px"> --}}

        $menus = DB::table('menus')->get();

        return view('welcome', ['menus' => $menus, 'carouselImages' => $carouselImages]);
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
