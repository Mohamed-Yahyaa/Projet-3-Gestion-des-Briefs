<?php

namespace App\Http\Controllers;

use App\Models\Apprenants_Briefs;
use App\Models\Briefs;
use App\Models\Promotion;

use Illuminate\Http\Request;

class PromotionController extends Controller
{
   
    public function index()
    {
        $promotion = Promotion::all();
        return view('promotion.index',compact("promotion"));
    }

    public function create()
    {
        return view('promotion.create');
    }


    public function store(Request $request)
    {
         Promotion::create([
            'Nom_promotion'=>$request->Nom_promotion,
         ])->save();
             return redirect('promotion');
    }


    public function show(Promotion $promotion)
    {
        //
    }


    public function edit( $id)
    {
        $promotion = Promotion::find($id);
        $apprenants = Promotion::find($id)->hasManyApprenants;

       $briefs = apprenants_briefs::select('briefs.Brief_name')
       ->where('promotion_id',$id)
       ->join("briefs",'apprenants_briefs.brief_id','=','briefs.id')
       ->groupBy('briefs.Brief_name')
       ->get();
        return view('promotion.edit',compact('promotion','apprenants','briefs'));
    }


    public function update(Request $request, $id)
    {
        Promotion::find($id)
        ->update([
            'Nom_promotion'=>$request->Nom_promotion,
        ]);
        return redirect('promotion/'.$id.'/edit');
    }


    public function destroy( $id)
    {
        Promotion::find($id)
        ->delete();
        return back();
    }
}
