<?php

namespace App\Http\Controllers;
use App\Models\Apprenants;
use Illuminate\Http\Request;


class ApprenantController extends Controller
{
  
    public function index()
    {
        //
        $apprenants = Apprenants::all();
        return view('briefs.assigner',compact('apprenants'));
    }

 
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

  
    public function destroy($id)
    {
        //
    }
}
