<?php

namespace App\Http\Controllers;
use App\Models\Briefs;
use App\Models\Appranants_Briefs;
use App\Models\Apprenants;
use App\Models\Taches;
use Illuminate\Http\Request;

class BriefsController extends Controller
{
   
    public function index()
    {
        //
        $briefs = Briefs::all();

        return view ('briefs.index',compact('briefs'));

    }

 
    public function create()
    {
        //
        return view ('briefs.create');
    }

  
    public function store(Request $request)
    {
        //
        $briefs = Briefs::create([
            'Brief_name' => $request->name,
            'dateDelivery' => $request->Delivery,
             'dateRecovery' => $request->Recovery
        ]);
        $briefs->save();
        return redirect('briefs');
    }

   
    public function show($id)
    {
        //
    }

  
    public function edit($id)
    {
        //
        $briefs = Briefs::find($id);

        $taches = Briefs::find($id)->taches;

        return view ('briefs.edit',compact('briefs','taches'));


    }

  
    public function update(Request $request, $id)
    {
        //
        $briefs = Briefs::find($id)->update([
            'Brief_name' =>$request->name,
            'dateDelivery'=>$request->Delivery,
            'dateRecovery'=>$request->Recovery
        ]);
        return redirect('briefs/'.$id. '/edit');
    }

  
    public function destroy($id)
    {
        //
        $briefs = Briefs::find($id)
        ->delete();
        return redirect('briefs');
    }
}
