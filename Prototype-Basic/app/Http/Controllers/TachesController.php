<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Briefs;
use App\Models\Taches;

class TachesController extends Controller
{
  
    public function index()
    {
        //
        $taches = Taches::all();
        return view ('briefs.edit',compact('briefs'));
    }

  
    public function create(Request $request)
    {
        //
        $id = $request->briefs_id;

        return view('taches.create',compact('id'));
    }

 
    public function store(Request $request)
    {
        //
        $taches = Taches::create([
            "Task_name" => $request->task_name,
        "start_Date" => $request->start_Date,
        "end_Date" => $request->end_Date,
        "descreption" => $request->descreption,
        "Briefs_id" => $request->briefs_id,
        ]);
        $taches->save();
        return redirect('briefs/');
       
    }


    public function show($id)
    {
        //
    }

  
    public function edit($id)
    {
        //
        $taches = Taches::where('id','$id')->get();
        
        return view('taches.edit',compact('taches'));
    }

  
    public function update(Request $request, $id)
    {
        //
        $taches = Taches::find($id)->update([
            "Task_name" => $request->task_name,
            "start_Date" => $request->start_Date,
            "end_Date" => $request->end_Date,
            "descreption" => $request->descreption,
          
        ]);
        return redirect('briefs/'.$request->Briefs_id. '/edit');
    }

    
    public function destroy($id)
    {
        //
        $taches = Taches::find($id)
        ->delete();
        return back();
    }
}
