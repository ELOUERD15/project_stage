<?php

namespace App\Http\Controllers;
use App\Models\courrier;
use App\Models\User;
use Illuminate\Http\Request;


class CourrierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courriers = Courrier::all();
        return view('dashboard')->with('courriers' , $courriers);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Courrier::create($input);
        return redirect('courrier')->with('flash_message' , 'Mail Addedd');
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
        $users = Courrier::find($id);
        return view('admin.edit')->with('users' ,$users);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $users = Courrier::find($id);
        $input = $request->all();
        $users->update($input);
        return redirect('courrier')->with('flash_message', 'users updated!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Courrier::destroy($id);
        return redirect('courrier');
    }
}
