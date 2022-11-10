<?php

namespace App\Http\Controllers;

use App\Models\Apprenants_Briefs;
use App\Models\Briefs;
use App\Models\Apprenants;
use Illuminate\Http\Request;

class AssingerController extends Controller
{
    
    public function index()
    {
        //
        $apprenants = Apprenants::all();
        return view ('briefs.assinger',compact('apprenants'));
    }

   
    public function create()
    {
        //
    }

  
    public function store(Request $request)
    {
        //
        Apprenants_Briefs::create([
            'apprenants_id' => $request->apprenants_id,
              'briefs_id' => $request->briefs_id

        ]);
        return back();

    }

  
    public function show($id)
    {
        //
        $apprenants = Apprenants::all();
        $apprenantsAssinger = Briefs::find($id)->apprenants;
        return view('briefs.assigner',compact('apprenants','apprenantsAssinger','id'));
    }

   
    public function edit($id)
    {
        //
        
    }

 
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy(Request $request ,$id )
    {
        //
        apprenants_briefs::where([
            ['apprenants_id',$request->apprenants_id],
            ['briefs_id',$request->briefs_id]
            ])->delete();
            return back();
    }
}
