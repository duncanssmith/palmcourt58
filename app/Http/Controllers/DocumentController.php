<?php

namespace App\Http\Controllers;

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
        $documents = Document::orderBy('hierarchy')->paginate(3);

        return view('documents.index', ['documents' => $documents]);
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
                    $document->content = request('description');
                    $document->active = request('active') ? 1 : 0;
                    $document->hierarchy = request('hierarchy');
                    $document->save();
                }

        return redirect('/documents');
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

}
