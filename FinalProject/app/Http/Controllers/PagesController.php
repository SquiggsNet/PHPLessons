<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pages;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{


    public function __construct()
    {
//        $this->middleware('admin');
//        $this->middleware('author');
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
        $pages = Pages::all();

        //pick view to display
        return view('pages.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
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

        //talk to model
        $page = Pages::create([
                'name' => $request['name'],
                'alias' => $request['alias'],
                'description' => $request['description'],
                'created_by' => $id,
                'updated_by' => $id
            ]);
        $page->save();

        return redirect()->action('PagesController@index');
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
        $page = Pages::find($id);

        //pick view to display
        return view('pages.show', compact('page'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = Pages::find($id);
        return view('pages.edit', compact('page'));
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

        $page = Pages::find($id);
        $page->name = $request['name'];
        $page->alias = $request['alias'];
        $page->description = $request['description'];
        $page->updated_by = $userId;
        $page->save();

        return redirect()->action('PagesController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $page = Pages::find($id);
        $page->delete();
        return redirect()->action('PagesController@index');
    }
}
