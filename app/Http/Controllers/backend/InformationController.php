<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\Information;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $informations = Information::all();
        return view('backend.pages.allInformations', compact('informations'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.addInfo');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'farm_price' => 'required',
                'name' => 'required',
                'mobile_number' => 'min:8|max:11|regex:/^([0-9\s\-\+\(\)]*)$/',
                'personal_email' => 'email',
                'platin_world_email' => 'email',
            ]
        );
        $information = new Information();
        $information->refferal_name = $request->refferal_name;
        $information->name = $request->name;
        $information->mobile_number = $request->mobile_number;
        $information->personal_email = $request->personal_email;
        $information->password = $request->password;
        $information->platin_world_email = $request->platin_world_email;
        $information->platin_world_passowrd = $request->platin_world_passowrd;
        $information->refferal_link = $request->refferal_link;
        $information->account = $request->account;
        $information->card = $request->card;
        $information->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    public function viewInfo($id)
    {
        $information = Information::find($id);
        return view('backend.pages.viewInfo', compact('information'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
