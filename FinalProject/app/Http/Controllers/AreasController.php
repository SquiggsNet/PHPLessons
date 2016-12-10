<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Areas;
use Illuminate\Support\Facades\Auth;

class AreasController extends Controller
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
        $areas = Areas::all();

        //pick view to display
        return view('areas.index', compact('areas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('areas.create');
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

        $area = Areas::create([
            'name' => $request['name'],
            'alias' => $request['alias'],
            'displayOrder' => (int)$request['displayOrder'],
            'description' => $request['description'],
            'created_by' => $id,
            'updated_by' => $id
        ]);
        $area->save();

        return redirect()->action('AreasController@index');
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
        $area = Areas::find($id);

        //pick view to display
        return view('areas.show', compact('area'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $area = Areas::find($id);
        return view('areas.edit', compact('area'));
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

        $area = Areas::find($id);
        $area->name = $request['name'];
        $area->alias = $request['alias'];
        $area->displayOrder = (int)$request['displayOrder'];
        $area->description = $request['description'];
        $area->updated_by = $userId;
        $area->save();

        return redirect()->action('AreasController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $area = Areas::find($id);
        $area->delete();
        return redirect()->action('AreasController@index');
    }
}
