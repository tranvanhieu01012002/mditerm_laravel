<?php

namespace App\Http\Controllers\API;
use Illuminate\Support\Facades\DB;
use App\Models\Vegetable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class vegetableAPI extends Controller
{
    //
    public function search(Request $request){

        $query = DB::table('vegetables')->whereBetween('new_price', [$request->min, $request->max])
        ->orWhere('name', 'like', '%' . $request->name . '%')
        ->get();

        return response()->json(["data"=>$query]);
    }
    public function countData(Request $request){
        
        $query = DB::table('vegetables')
        ->join('categoris','categoris.id','=','vegetables.category_id')
        ->groupBy('category_id')
        // ->selectRaw('count(*) as total', 'category_id')
        ->selectRaw('categoris.*, count(vegetables.category_id) as RoomsCount')
        ->get();
        return response()->json(["data"=>$query]);
    }
}
