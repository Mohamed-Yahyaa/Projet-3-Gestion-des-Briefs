<?php

namespace App\Http\Controllers;
use App\Models\Apprenants;
use Illuminate\Http\Request;


class ApprenantController extends Controller
{
  
    public function index()
    {
        //
        // $apprenants = Apprenants::all();
        // return view('briefs.assigner',compact('apprenants'));
    }

 
    public function create()
    {
        //
        $id = $request->promotion_id;
   
     return view('apprenants.create',compact('id'));
    }

    
    public function store(Request $request)
    {
        //
        Apprenants::create([
            'Nom'=>$request->nom,
            'Prenom'=>$request->prenom,
            'Email'=>$request->email,
            'promotion_id'=>$request->promotion_id
        ])->save();
        return redirect('promotion/'.$request->promotion_id.'/edit');
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
        $apprenants =Apprenants::find($id);
        return view('apprenants.edit',compact('apprenants'));
    }


    public function update(Request $request, $id)
    {
        //
        Apprenants::find($id)
        ->update([
            'Nom'=>$request->nom,
            'Prenom'=>$request->prenom,
            'Email'=>$request->email,
            'promotion_id'=>$request->promotion_id
        ]);
        return redirect('promotion/'.$request->promotion_id.'/edit');
    }

  
    public function destroy($id)
    {
        //
        Apprenants::find($id)
        ->delete();
        return back();
    }
}
