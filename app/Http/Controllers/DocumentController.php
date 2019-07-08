<?php

namespace App\Http\Controllers;

use App\Document;

use Illuminate\Http\Request;

/**
 * The Document controller
 *
 * @category Controller
 * @package  Document
 * @author   Duncan Smith <duncanssmith@gmail.com>
 * @license  12341234 <blah@blah.com>
 * @link     Wombat <duncanssmith@gmail.com>
 */
class DocumentController extends Controller
{
    //
    /**
     * Constructor
     */
    public function __construct()
    {
        // $this->middleware('auth')->except(['index']);
        //  $this->middleware('auth')->only(['show', 'create', 'edit', 'store', 'update', 'destroy']);
        // Document CRUD is auth only
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documents = Document::orderBy('id')->paginate(12);

        return view('document.index', ['documents' => $documents]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('document.create');
    }

    /**
     * Store a newly created resource
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
                if (request()->validate(
                    [
                        'title' => ['required'],
                        'content' => ['required'],
                    ]
                )) {

                    $document = new Document();
                    $document->title = request('title');
                    $document->content = request('content');
                    $document->active = request('active') ? 1 : 0;
                    $document->hierarchy = request('hierarchy');
                    $document->save();
                }

        return redirect('/document');
    }
    /**
     * Display the specified resource.
     *
     * @param Document $document The document
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Document $document)
    {
        return view('document.show', ['document' => $document]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Document $document The document
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Document $document)
    {
        return view('document.edit', ['document' => $document, 'active' => $document->active]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request  The request object
     * @param Document                 $document The document
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Document $document)
    {
        if (request()->validate(
                    [
                        'title' => ['required'],
                        'content' => [],
                    ]
        )) {
            $document->title = request('title');
            $document->content = request('content');
            $document->hierarchy = request('hierarchy');
            $document->active = request('active') ? 1 : 0;
            $document->save();
        } else {
            return redirect('/document/update')->withErrors();
        }

        return redirect('/document');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Document $document The document
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Exception
     */
    public function destroy(Document $document)
    {
        $document->delete();

        return redirect('/document');
    }

}
