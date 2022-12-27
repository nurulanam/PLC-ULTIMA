<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\Image;
use App\Models\backend\Information;
use Illuminate\Http\Request;
use File;

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
                'name' => 'required',
                'mobile_number' => 'max:11|regex:/^([0-9\s\-\+\(\)]*)$/',
                'personal_email' => 'email',
            ]
        );
        $information = new Information();
        $information->farm_price = $request->farm_price;
        $information->farm_date = $request->farm_date;
        $information->load_date = $request->load_date;
        $information->refferal_name = $request->refferal_name;
        $information->name = $request->name;
        $information->mobile_number = $request->mobile_number;
        $information->personal_email = $request->personal_email;
        $information->personal_password = $request->personal_password;
        $information->platin_world_email = $request->platin_world_email;
        $information->platin_world_passowrd = $request->platin_world_passowrd;
        $information->refferal_link = $request->refferal_link;
        $information->account = $request->account;
        $information->card = $request->card;
        $information->wallet_1 = $request->wallet_1;
        $information->wallet_2 = $request->wallet_2;
        $information->wallet_3 = $request->wallet_3;
        $information->wallet_4 = $request->wallet_4;
        $information->wallet_5 = $request->wallet_5;
        $information->wallet_6 = $request->wallet_6;
        $information->wallet_7 = $request->wallet_7;
        $information->wallet_8 = $request->wallet_8;
        $information->wallet_9 = $request->wallet_9;
        $information->wallet_10 = $request->wallet_10;
        $information->wallet_11 = $request->wallet_11;
        $information->wallet_12 = $request->wallet_12;
        $information->wallet_13 = $request->wallet_13;
        $information->wallet_14 = $request->wallet_14;
        $information->wallet_15 = $request->wallet_15;
        $information->farm_1 = $request->farm_1;
        $information->farm_2 = $request->farm_2;
        $information->farm_3 = $request->farm_3;
        $information->farm_4 = $request->farm_4;
        $information->farm_5 = $request->farm_5;
        $information->farm_6 = $request->farm_6;
        $information->farm_7 = $request->farm_7;
        $information->farm_8 = $request->farm_8;
        $information->farm_9 = $request->farm_9;
        $information->farm_10 = $request->farm_10;
        $information->farm_11 = $request->farm_11;
        $information->farm_12 = $request->farm_12;
        $information->farm_13 = $request->farm_13;
        $information->farm_14 = $request->farm_14;
        $information->farm_15 = $request->farm_15;
        $information->save();

        $images = new Image();

        $images->info_id = $information->id;

        if ($request->hasFile('image1')) {
            $file = $request->image1;
            $ext = $file->getClientOriginalExtension();
            $fileName = hexdec(uniqid()).'.'.$ext;

            $file->move('backend/assets/images/information', $fileName);
            $images->image1 = $fileName;
        }
        if ($request->hasFile('image2')) {
            $file = $request->image2;
            $ext = $file->getClientOriginalExtension();
            $fileName = hexdec(uniqid()).'.'.$ext;

            $file->move('backend/assets/images/information', $fileName);
            $images->image2 = $fileName;
        }
        if ($request->hasFile('image3')) {
            $file = $request->image3;
            $ext = $file->getClientOriginalExtension();
            $fileName = hexdec(uniqid()).'.'.$ext;

            $file->move('backend/assets/images/information', $fileName);
            $images->image3 = $fileName;
        }
        $images->save();
        return redirect('/dashboard/information')->with('success', 'Information Added Successfully');
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
        $images = Image::where('info_id', $id)->get();
        return view('backend.pages.viewInfo', compact('information', 'images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(auth()->user()->hasRole('admin')){
            $information = Information::find($id);
            $images = Image::where('info_id', $id)->first();
            return view('backend.pages.edit', compact('information', 'images'));
        }else{
            return redirect()->back()->with('error', 'Sorry You Do Not Have Permission To Edit');
        }


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
        $request->validate(
            [
                'name' => 'required',
                'mobile_number' => 'max:11|regex:/^([0-9\s\-\+\(\)]*)$/',
                'personal_email' => 'email',
            ]
        );
        $information = Information::find($id);
        $information->farm_price = $request->farm_price;
        $information->farm_date = $request->farm_date;
        $information->load_date = $request->load_date;
        $information->refferal_name = $request->refferal_name;
        $information->name = $request->name;
        $information->mobile_number = $request->mobile_number;
        $information->personal_email = $request->personal_email;
        $information->personal_password = $request->personal_password;
        $information->platin_world_email = $request->platin_world_email;
        $information->platin_world_passowrd = $request->platin_world_passowrd;
        $information->refferal_link = $request->refferal_link;
        $information->account = $request->account;
        $information->card = $request->card;
        $information->wallet_1 = $request->wallet_1;
        $information->wallet_2 = $request->wallet_2;
        $information->wallet_3 = $request->wallet_3;
        $information->wallet_4 = $request->wallet_4;
        $information->wallet_5 = $request->wallet_5;
        $information->wallet_6 = $request->wallet_6;
        $information->wallet_7 = $request->wallet_7;
        $information->wallet_8 = $request->wallet_8;
        $information->wallet_9 = $request->wallet_9;
        $information->wallet_10 = $request->wallet_10;
        $information->wallet_11 = $request->wallet_11;
        $information->wallet_12 = $request->wallet_12;
        $information->wallet_13 = $request->wallet_13;
        $information->wallet_14 = $request->wallet_14;
        $information->wallet_15 = $request->wallet_15;
        $information->farm_1 = $request->farm_1;
        $information->farm_2 = $request->farm_2;
        $information->farm_3 = $request->farm_3;
        $information->farm_4 = $request->farm_4;
        $information->farm_5 = $request->farm_5;
        $information->farm_6 = $request->farm_6;
        $information->farm_7 = $request->farm_7;
        $information->farm_8 = $request->farm_8;
        $information->farm_9 = $request->farm_9;
        $information->farm_10 = $request->farm_10;
        $information->farm_11 = $request->farm_11;
        $information->farm_12 = $request->farm_12;
        $information->farm_13 = $request->farm_13;
        $information->farm_14 = $request->farm_14;
        $information->farm_15 = $request->farm_15;
        $information->update();

        if(Image::where('info_id', $information->id)->first() !== ""){
            $images = Image::where('info_id', $information->id)->first();
            if ($request->hasFile('image1')) {
                $oldFile = 'backend/assets/images/information/'.$images->image1;

                    if(File::exists(public_path($oldFile))){
                        File::delete(public_path($oldFile));
                }

                $file = $request->image1;
                $ext = $file->getClientOriginalExtension();
                $fileName = hexdec(uniqid()).'.'.$ext;

                $file->move('backend/assets/images/information', $fileName);
                $images->image1 = $fileName;
            }
            if ($request->hasFile('image2')) {
                $oldFile = 'backend/assets/images/information/'.$images->image2;

                    if(File::exists(public_path($oldFile))){
                        File::delete(public_path($oldFile));
                }

                $file = $request->image2;
                $ext = $file->getClientOriginalExtension();
                $fileName = hexdec(uniqid()).'.'.$ext;

                $file->move('backend/assets/images/information', $fileName);
                $images->image2 = $fileName;
            }
            if ($request->hasFile('image3')) {
                $oldFile = 'backend/assets/images/information/'.$images->image3;

                    if(File::exists(public_path($oldFile))){
                        File::delete(public_path($oldFile));
                }

                $file = $request->image3;
                $ext = $file->getClientOriginalExtension();
                $fileName = hexdec(uniqid()).'.'.$ext;

                $file->move('backend/assets/images/information', $fileName);
                $images->image3 = $fileName;
            }
            $images->update();
        }elseif (Image::where('info_id', $information->id)->first() == "") {
            $images = new Image();
            if ($request->hasFile('image1')) {
                $file = $request->image1;
                $ext = $file->getClientOriginalExtension();
                $fileName = hexdec(uniqid()).'.'.$ext;

                $file->move('backend/assets/images/information', $fileName);
                $images->image1 = $fileName;
            }
            if ($request->hasFile('image2')) {
                $file = $request->image2;
                $ext = $file->getClientOriginalExtension();
                $fileName = hexdec(uniqid()).'.'.$ext;

                $file->move('backend/assets/images/information', $fileName);
                $images->image2 = $fileName;
            }
            if ($request->hasFile('image3')) {
                $file = $request->image3;
                $ext = $file->getClientOriginalExtension();
                $fileName = hexdec(uniqid()).'.'.$ext;

                $file->move('backend/assets/images/information', $fileName);
                $images->image3 = $fileName;
            }
            $images->save();
        }
        return redirect('/dashboard/information')->with('success', 'Information Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(auth()->user()->hasRole('admin')){
            $information = Information::find($id);
            $images = Image::where('info_id', $id)->first();
                $image1 = 'backend/assets/images/information/'.$images->image1;
                if(File::exists(public_path($image1))){
                    File::delete(public_path($image1));
                }
                $image2 = 'backend/assets/images/information/'.$images->image2;
                if(File::exists(public_path($image2))){
                    File::delete(public_path($image2));
                }
                $image3 = 'backend/assets/images/information/'.$images->image3;
                if(File::exists(public_path($image3))){
                    File::delete(public_path($image3));
                }
            $images->delete();
            $information->delete();
            return redirect()->back()->with('success', 'Information Deleted Successfully');
        }else{
            return redirect()->back()->with('error', 'Sorry You Do Not Have Permission To Delete');
        }

    }
}
