<?php

namespace App\Http\Controllers;

use App\Menu;

use Illuminate\Http\Request;

/**
 * The Menus controller
 *
 * @category Controller
 * @package  Menu
 * @author   Duncan Smith <duncanssmith@gmail.com>
 * @license  12341234 <blah@blah.com>
 * @link     Wombat <duncanssmith@gmail.com>
 */
class MenusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::all();

        return view('menus.index', ['menus' => $menus]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        Menu::create(
            request()->validate(
                [
                    'title' => ['required'],
                    'description' => []
                ]
            )
        );

        return redirect('/menus');
    }

    /**
     * Display the specified resource.
     *
     * @param Menu $menu The menu
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        return view('menus.show', ['menu' => $menu]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Menu $menu The menu
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        return view('menus.edit', ['menu' => $menu]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request The request object
     * @param Menu $menu The menu
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        $menu->update(
            request()->validate(
                [
                    'title' => ['required'],
                    'description' => []
                ]
            )
        );

        return redirect('/menus');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Menu $menu The menu
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        $menu->delete();

        return redirect('/menus');
    }
}
