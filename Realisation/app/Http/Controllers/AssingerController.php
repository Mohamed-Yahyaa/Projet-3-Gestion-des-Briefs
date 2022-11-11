<?php

namespace App\Http\Controllers;

use App\Models\Apprenants_Briefs;
use App\Models\Briefs;
use App\Models\Apprenants;
use App\Models\Promotion;
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
        $All = Promotion::latest()->first()->hasManyApprenants;

        foreach($All as $value){
          if(is_null(Briefs::find($request->briefs_id)->apprenants()->find($request->apprenants_id))) {

            Apprenants_Briefs::create([
                'apprenants_id' => $request->apprenants_id,
                  'briefs_id' => $request->briefs_id,
                  'promotion_id' => $request->promotion_id
            ]);
            return back();
          } 
        }

      

    }

    public function addAll()
    {
        $apprenants = promotion::latest()->first()->hasManyApprenants;

        foreach ($apprenants as $apprenant) {
            if (is_null(Briefs::find(request()->id)->apprenants()->find($apprenant->id))) {
                Apprenants_Briefs::create([
                    'apprenants_id' => $apprenant->id,
                    'briefs_id' => request()->id,
                    'promotion_id' => $apprenant->promotion_id,
                ]);
            }
        };
        return back();
    }

  
    public function show($id)
    {
        //
        $apprenants = Promotion::latest()->first()->hasManyApprenants;
        $briefs = Briefs::where('id', $id)->firstOrFail();

        $assigned = array_map(function ($apprenant) {
            return $apprenant['id'];
        }, $briefs->apprenants->toArray());

        $apprenants_id= Apprenants::select("id")->get();
        $apprenants = Apprenants::all();
        $apprenantsAssinger = Briefs::find($id)->apprenants;
        return view('briefs.assigner',compact('apprenants','apprenantsAssinger','id'));
    }

   
    public function edit(AssingerController $assignerController)
    {
        //
        
    }

 
    public function update(Request $request,  AssingerController $assignerController)
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
