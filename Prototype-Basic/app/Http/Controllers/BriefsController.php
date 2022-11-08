<?php

namespace App\Http\Controllers;
use App\Models\Briefs;
use App\Models\Taches;
use Illuminate\Http\Request;

class BriefsController extends Controller
{
   
    public function index()
    {
        //
        $table = Briefs::all();

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
        $Briefs = briefs::create([
            'Brief_name' => $request->name,
            'dateDelivery' => $request->Delivery,
             'dateRecovery' => $request->Recovery
        ]);
        $Briefs -> save();
        return redirect('Briefs');
    }

   
    public function show($id)
    {
        //
    }

  
    public function edit($id)
    {
        //
        $Briefs = Briefs::find($id);

        $Taches = Briefs::find($id)->taches;

        return view ('Briefs.edit',compact('briefs','taches'));


    }

  
    public function update(Request $request, $id)
    {
        //
        $Briefs = Briefs::find($id)->update([
            'Brief_name' =>$request->name,
            'dateDelivery'=>$request->Delivery,
            'dateRecovery'=>$request->Recovery
        ]);
        return redirect('Briefs/'.$id. '/edit');
    }

  
    public function destroy($id)
    {
        //
        $Briefs = Briefs::find($id)
        ->delete();
        return redirect('Briefs');
    }
}
