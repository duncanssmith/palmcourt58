<?php

namespace App\Http\Controllers;

use App\Menu;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function __construct()
    {
//        $this->middleware('auth')->only(['show', 'create', 'edit', 'store', 'update', 'destroy']);
        $this->middleware('auth');
//        $this->middleware('auth')->except(['index']);
    }


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
                    'description' => [],
//                    'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,pdf|max:4096',
                ]
            )
        );

        $menu = Menu::latest()->first();

        $image = time().'.'.request()->image->getClientOrOriginalExtension();
        request()->image->move(public_path('images'), $image);

        // Try to upload the photo
//        $origin = getEnv('PUBLIC_BASE_PATH').'uploads/works/';
//        $target = getEnv('PUBLIC_BASE_PATH').'media/images/';
//        $action = 'store';
//        dd(request());
//        $this->file_upload_image(request()->allFiles('image'), $menu, $origin, $target, $action);

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
     *
     * @throws
     */
    public function destroy(Menu $menu)
    {
        $menu->delete();

        return redirect('/menus');
    }

    /**
     *
     */
    public function file_upload_image($photo, $menu, $origin, $target)
    {
        // name the ref field after the menu id
        $ref = sprintf("%04d", $menu->id);

        $photo->move($origin, $menu->id);

        $target = $origin.$menu->id;

//        $canvas = Image::canvas(640, 640, '#ffffff');
//        $layer = Image::make($target);

//        $photo_height = $layer->height();
//        $photo_width = $layer->width();

//        if ($photo_height > $photo_width) {
            //portrait, vertical
//            $layer->resize(null, 640, function ($constraint) {
//                $constraint->aspectRatio();
//                $constraint->upsize();
//            });
//        } else {
            //landscape, horizontal
//            $layer->resize(640, null, function ($constraint) {
//                $constraint->aspectRatio();
//                $constraint->upsize();
//            });
//        }
        // add the layer to the canvas, centered
//        $image = $canvas->insert($layer, 'center', 320, 320);

//        $image->save($targetPath.'640/'.$ref.'.jpg');
//        $image->resize(320, 320);
//        $image->save($targetPath.'320/'.$ref.'.jpg');
//        $image->resize(160, 160);
//        $image->save($targetPath.'160/'.$ref.'.jpg');
//        $image->resize(120, 120);
//        $image->save($targetPath.'120/'.$ref.'.jpg');
//        $image->resize(64, 64);
//        $image->save($targetPath.'64/'.$ref.'.jpg');
        $image->save($target.'/'.$ref.'.jpg');
    }

}
