<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\UserPriv;
use Illuminate\Support\Facades\Auth;

class UserPrivsController extends Controller
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
        $userPrivs = UserPriv::all();

        //pick view to display
        return view('userPrivs.index', compact('userPrivs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('userPrivs.create');
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
        $userPriv = UserPriv::create([
            'user_id' => $request['user_id'],
            'privilege_id' => $request['privilege_id'],
            'created_by' => $id,
            'updated_by' => $id
        ]);
        $userPriv->save();

        return redirect()->action('UserPrivsController@index');
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
        $userPriv = UserPriv::find($id);

        //pick view to display
        return view('userPrivs.show', compact('userPriv'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $userPriv = UserPriv::find($id);
        return view('userPrivs.edit', compact('userPriv'));
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

        $userPriv = UserPriv::find($id);
        $userPriv->user_id = $request['user_id'];
        $userPriv->privilege_id = $request['privilege_id'];
        $userPriv->updated_by = $userId;
        $userPriv->save();

        return redirect()->action('UserPrivsController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $userPriv = UserPriv::find($id);
        $userPriv->delete();
        return redirect()->action('UserPrivsController@index');
    }
}
