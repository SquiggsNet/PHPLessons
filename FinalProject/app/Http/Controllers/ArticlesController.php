<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Articles;
use Illuminate\Support\Facades\Auth;


class ArticlesController extends Controller
{

    public function __construct()
    {
        $this->middleware('editor');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //talk to model
        $articles = Articles::all();

        //pick view to display
        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = Auth::id();

        $article = Articles::create([
            'name' => $request['name'],
            'title' => $request['title'],
            'allPages' => (bool)$request['allPages'],
            'description' => $request['description'],
            'htmlSnippet' => $request['htmlSnippet'],
            'areas_id' => (int)$request['areas_id'],
            'pages_id' => (int)$request['pages_id'],
            'created_by' => $id,
            'updated_by' => $id
        ]);
        $article->save();

        return redirect()->action('ArticlesController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //talk to model
        $article = Articles::find($id);

        //pick view to display
        return view('articles.show', compact('article'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Articles::find($id);
        return view('articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $userId = Auth::id();

        $article = Articles::find($id);
        $article->name = $request['name'];
        $article->title = $request['title'];
        $article->allPages = (bool)$request['allPages'];
        $article->description = $request['description'];
        $article->htmlSnippet = $request['htmlSnippet'];
        $article->areas_id = (int)$request['areas_id'];
        $article->pages_id = (int)$request['pages_id'];
        $article->updated_by = $userId;
        $article->save();

        return redirect()->action('ArticlesController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Articles::find($id);
        $article->delete();
        return redirect()->action('ArticlesController@index');
    }
}
