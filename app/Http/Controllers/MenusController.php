<?php

namespace App\Http\Controllers;

use App\Menu;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
     * Constructor
     */
    public function __construct()
    {
        // $this->middleware('auth')->except(['index']);
        //  $this->middleware('auth')->only(['show', 'create', 'edit', 'store', 'update', 'destroy']);
        // Menus CRUD is auth only
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
        if (request()->hasFile('menuImage')) {
            if (request()->file('menuImage')->isValid()) {
                //  Menu::create(
                if (request()->validate(
                    [
                        'title' => ['required'],
                        'description' => ['required'],
                    ]
                )) {
                    $menu = new Menu();
                    $menu->title = request('title');
                    $menu->path = 'tmp';
                    $menu->extension = request()->menuImage->extension();
                    $menu->description = request('description');
                    $menu->hierarchy = request('hierarchy');
                    $menu->active = request('active') ? 1 : 0;
                    $menu->function = request('function') ? 1 : 0;
                    $menu->save();
                }

                $path = "uploads/menus";
//                $destinationPath = "uploads/menus";
                $uploadedFile = request()->menuImage;

                $fileName = sprintf("%06d.%s", $menu->id, $uploadedFile->extension());

                $menu->path = $uploadedFile->storeAs($path, $fileName, 'local');
                $menu->save();


//                $storageLocal = Storage::disk('local')->put($filePath, $image);
//                $storagePublic = Storage::disk('public')->put($filePath, $image);
//                $fileUrlLocal = asset($storageLocal);
//                $fileUrlPublic = asset($storagePublic);

//                $reference = sprintf("%06d.%s", $menu->id, $image->extension());

//                $image->move($destinationPath, $reference);

//                dd($storageLocal, $storagePublic, $image, $filePath, $reference, $fileUrlLocal, $fileUrlPublic);

                // update the path and name of the image file
//                $menu->path = $storageLocal;
//                $menu->save();
            }
        } else {
            return redirect('/menu/create')->withErrors();
        }

        // ----
        // ----

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
        return view('menus.edit', ['menu' => $menu, 'active' => $menu->active]);
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
//        $menu->update(
//            request()->validate(
//                [
//                    'title' => ['required'],
//                    'description' => []
//                ]
//            )
        if (request()->hasFile('menuImage')) {
            if (request()->file('menuImage')->isValid()) {

                $filePath = "uploads/menus";

                $storageLocal = Storage::disk('local')->put($filePath, request()->menuImage);
                $storagePublic = Storage::disk('public')->put($filePath, request()->menuImage);
                $fileUrlLocal = asset($storageLocal);
                $fileUrlPublic = asset($storagePublic);
            }
        }
        if ((request()->validate(
                    [
                        'title' => ['required'],
                        'description' => [],
                    ]
        ))
        ) {
            $menu->title = request('title');
            if (!empty($storageLocal)) {
                $menu->path = $storageLocal;
                $menu->extension = request()->menuImage->extension();
            }
            $menu->description = request('description');
            $menu->hierarchy = request('hierarchy');
            $menu->active = request('active') ? 1 : 0;
            $menu->function = request('function') ? 1 : 0;
            $menu->save();
        } else {
            return redirect('/menu/create')->withErrors();
        }

        return redirect('/menus');
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

        return redirect('/menus');
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
        $image->save($target.'/'.$ref.'.jpg');
    }

}
