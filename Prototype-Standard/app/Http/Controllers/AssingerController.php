<?php

namespace App\Http\Controllers;

use App\Models\Appranants_Briefs;
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
        $apprenants_brief::create([
            'apprenant_id' => $request->apprenant_id,
              'brief_id' => $request->brief_id

        ]);
        return back();

    }

  
    public function show($id)
    {
        //
        apprenants ::all();
        $apprenantsAssinger = Brief::find($id)->apprenants;
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

   
    public function destroy($id)
    {
        //
        apprenants_brief::where([
            ['apprenant_id',$request->apprenant_id],
            ['brief_id',$request->brief_id]
            ])->delete();
            return back();
    }
}
