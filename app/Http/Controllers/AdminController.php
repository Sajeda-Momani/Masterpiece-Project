<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admins = Admin::all();
        return view('admin.admins', ['admins'=>$admins]);  
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.create-admin');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Admin::create($request->all());
        return redirect ('admins')->withSuccess('Added Successfully');
         
            }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $admin = Admin::find($id);
        $admin->delete();
        return redirect()->route('admins.index')->withSuccess('admin deleted successfully');
            
    }
}
