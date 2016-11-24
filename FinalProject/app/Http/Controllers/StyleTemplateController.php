<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\StyleTemplate;

class StyleTemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //talk to model
        $styleTemplates = StyleTemplate::all();

        //pick view to display
        return view('styleTemplates.index', compact('styleTemplates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('styleTemplates.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $styleTemplate = StyleTemplate::create([
            'name' => $request['name'],
            'description' => $request['description'],
            'content' => $request['content'],
            'activeState' => (bool)$request['activeState'],
        ]);
        $styleTemplate->save();

        return redirect()->action('StyleTemplateController@index');
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
        $styleTemplate = StyleTemplate::find($id);

        //pick view to display
        return view('styleTemplates.show', compact('styleTemplate'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $styleTemplate = StyleTemplate::find($id);
        return view('styleTemplates.edit', compact('styleTemplate'));
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
        $styleTemplate = StyleTemplate::find($id);
        $styleTemplate->name = $request['name'];
        $styleTemplate->description = $request['description'];
        $styleTemplate->content = $request['content'];
        $styleTemplate->activeState = (bool)$request['activeState'];

        $styleTemplate->save();

        return redirect()->action('StyleTemplateController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
