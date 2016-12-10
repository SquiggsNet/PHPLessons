<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Privileges;
use Illuminate\Support\Facades\Auth;

class PrivilegesController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin');
//        $this->middleware('author');
//        $this->middleware('editor');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //talk to model
        $privileges = Privileges::all();

        //pick view to display
        return view('privileges.index', compact('privileges'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('privileges.create');
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
        $privileges = Privileges::create([
            'name' => $request['name'],
            'alias' => $request['alias'],
            'description' => $request['description'],
            'created_by' => $id,
            'updated_by' => $id
        ]);
        $privileges->save();

        return redirect()->action('PrivilegesController@index');
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
        $privilege = Privileges::find($id);

        //pick view to display
        return view('privileges.show', compact('privilege'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $privilege = Privileges::find($id);
        return view('privileges.edit', compact('privilege'));
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

        $privileges = Privileges::find($id);
        $privileges->description = $request['description'];
        $privileges->updated_by = $userId;
        $privileges->save();

        return redirect()->action('PrivilegesController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $privileges = Privileges::find($id);
        $privileges->delete();
        return redirect()->action('PrivilegesController@index');
    }
}
