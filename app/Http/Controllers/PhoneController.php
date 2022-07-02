<?php

namespace App\Http\Controllers;
// use App\Models\Users;
use App\Models\Phone;
use Illuminate\Http\Request;

// use App\Models\phone;
use Illuminate\Support\Facades\Auth;
// use App\Models\phones;

class PhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('layouts.index',['phones'=>phone::all()]);


    //   return phoneRes


        // $phones=phone::whereUserId (Auth::id())->get();
        // return view('layouts.index' , ['phones'=>$phones]);
      }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {



       return view('layouts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  return $request;
        // dd( $request);

        $request->validate([

            'phone' => 'required|numeric|unique:phone,phone|regex:/^01[1,0,2]{1}[0-9]{8}$/']);

        // this line like a row id db

        // Auth:user()->phone()->create($request->all());


        $phone =new phone ;
        $phone->phone=$request->phone;
        $phone->user_id= Auth::id();
        $phone->save();

      return redirect()->route('phones.index');
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Phone $phone)
    {
        // $phone =phone::find ($id);

        return view('layouts.edit',['phone'=>$phone]);


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
        $request->validate([

            'phone' => 'required|numeric|unique:phone,phone|regex:/^01[1,0,2]{1}[0-9]{8}$/']);


        $phone=Phone::find($id);
        $phone->phone=$request->phone;
        $phone->save();


        // return view
           return redirect()->route('phones.index');
        // return redirect()->back();
      }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Phone $phone)
    {
        $phone->delete();
        // Phone::find($id)->delete();

        return redirect()->back();
    }
}
