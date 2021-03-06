<?php

namespace App\Http\Controllers;

use App\Menu;

use Illuminate\Http\Request;

/**
 * The Menu controller
 *
 * @category Controller
 * @package  Menu
 * @author   Duncan Smith <duncanssmith@gmail.com>
 * @license  12341234 <blah@blah.com>
 * @link     Wombat <duncanssmith@gmail.com>
 */
class MenuController extends Controller
{
    /**
     * Constructor
     */
    public function __construct()
    {
        // $this->middleware('auth')->except(['index']);
        // $this->middleware('auth')->only(['show', 'create', 'edit', 'store', 'update', 'destroy']);
        // Menu CRUD is auth only
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::orderBy('hierarchy')->paginate(3);

        return view('menu.index', ['menus' => $menus]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        if (request()->hasFile('menuImage')) {
            if (request()->file('menuImage')->isValid()) {
                if (request()->validate(
                    [
                        'title' => ['required'],
                        'description' => ['required'],
                    ]
                )) {

                    $path = "uploads/menus";
                    $uploadedFile = request()->menuImage;

                    $fileName = sprintf("%s.%s", date('Ymd-His'), $uploadedFile->extension());

                    $menu = new Menu();
                    $menu->title = request('title');
                    $menu->path = $uploadedFile->storeAs($path, $fileName, 'local');
                    $menu->extension = request()->menuImage->extension();
                    $menu->description = request('description');
                    $menu->hierarchy = request('hierarchy');
                    $menu->active = request('active') ? 1 : 0;
                    $menu->function = request('function') ? 1 : 0;
                    $menu->banner = request('banner') ? 1 : 0;
                    $menu->save();
                }
            }
        } else {
            return redirect('/menu/create')->withErrors('Error - unable to upload file');
        }

        return redirect('/menu');
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
        return view('menu.show', ['menu' => $menu]);
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
        return view('menu.edit', ['menu' => $menu, 'active' => $menu->active]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request The request object
     * @param Menu                     $menu    The menu
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        $path = "uploads/menus";

        if (request()->hasFile('menuImage')) {
            if (request()->file('menuImage')->isValid()) {
                $uploadedFile = request()->menuImage;
                $fileName = sprintf("%s.%s", date('Ymd-His'), $uploadedFile->extension());
                $menu->path = $uploadedFile->storeAs($path, $fileName, 'local');
                $menu->extension = request()->menuImage->extension();
            }
        }
        if (request()->validate(
                    [
                        'title' => ['required'],
                        'description' => [],
                    ]
        )) {

            $menu->title = request('title');
            $menu->description = request('description');
            $menu->hierarchy = request('hierarchy');
            $menu->active = request('active') ? 1 : 0;
            $menu->function = request('function') ? 1 : 0;
            $menu->banner = request('banner') ? 1 : 0;
            $menu->save();
        } else {
            return redirect('/menu/update')->withErrors();
        }

        return redirect('/menu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Menu $menu The menu
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Exception
     */
    public function destroy(Menu $menu)
    {
        $menu->delete();

        return redirect('/menu');
    }

    /**
     * Upload file manipulation function not used
     *
     * @param $menu
     * @param $file
     * @param $file
     * @param $file
     * @param $file
     * @param $file
     *
     * @return
     */
    public function saveUploadedMenuFile($menu, $file, $path, $extension, $origin, $target, $action)
    {
        // name the ref field after the menu id
        $ref = sprintf("%04d", $menu->id);

//        dd($menu, $file, $path, $extension, $origin, $target, $action, $ref);

        $file->move($file->pathname, $origin);

//        dd($origin);

        $target = $origin.$menu->id;

//        dd($menu, $file, $path, $extension, $origin, $target, $action, $ref);

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
//        $image->save($target.'/'.$ref.'.jpg');
    }

}
