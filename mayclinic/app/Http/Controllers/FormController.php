<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datas = Form::all();
        return view('index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = new Form;
        $data->name = $request->petname;
        $data->status = $request->input('status');
        $data->pawrent = $request->pawrent;
        $data->breed = $request->input('breed');
        $data->gender = $request->gender;
        $data->contact = $request->contact;
        $data->address = $request->address;
        $data->dob = $request->DOB;
        $data->city = $request->input('city');
        $data->township = $request->input('township');
        $data->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data = Form::find($id);
        $datas = Form::all();
        return view('index',compact('data','datas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data = Form::find($id);
        $data->name = $request->petname;
        $data->status = $request->input('status');
        $data->pawrent = $request->pawrent;
        $data->breed = $request->input('breed');
        $data->gender = $request->gender;
        $data->contact = $request->contact;
        $data->address = $request->address;
        $data->dob = $request->DOB;
        $data->city = $request->input('city');
        $data->township = $request->input('township');
        $data->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $deleteData = Form::find($id);
        $deleteData->delete();
        return redirect('/');
    }
}