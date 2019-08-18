<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Material;

class MaterialController extends Controller
{
    public function index()
    {
      // $material = \DB::table('materials')->Paginate(7);
      return response()->json(['status' => 'success','code'=>'200', 'data' => Material::all()]);        
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'thumbnail' => 'required',
            'title' => 'required',
            'content' => 'required'
          ]);
   
          if (Material::create($request->all())) {
            return response()->json(['status' => 'success','code'=>'201','data' => $request->all()]);   
            // return response()->json(['status' => 'success' ,'code' => '201', 'message' => 'Data has been created'],201);
          } else {
            return response()->json(['status' => 'error','code' => '500', 'message' => 'Internal Server Error' ],500);
          }
    }

    // public function show($id)
    // {
    //     $material = Material::find($id);
    //     if ($material) {
    //       return response()->json(['status' => 'success','code' => '200', 'data'=> $material]);
    //     }
 
    //     return response()->json(['status' => 'error','code' => '404', 'message' => 'Data not found'],404);
    // }

    public function show($id)
    {
        $material = Material::where('uuid',$id)->first();
        if ($material) {
          return response()->json(['status' => 'success','code' => '200', 'data'=> $material]);
        }
 
        return response()->json(['status' => 'error','code' => '404', 'message' => 'Data not found'],404);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'thumbnail' => 'required',
            'title' => 'required',
            'content' => 'required'
          ]);
   
          $material = Material::find($id);
          if ($material) {
            $material->update($request->all());
            return response()->json(['status' => 'success','code'=>'200', 'message' => 'Data has been updated']);
          }
   
          return response()->json(['status' => 'error','code'=>'400', 'message' => 'Cannot updating data'],400);
    }

    public function destroy($id)
    {
        $material = Material::where('uuid',$id)->first();
        if ($material) {
        $material->delete();
        return response()->json(['stats' => 'success','code'=>'200', 'message' => 'Data has been deleted']);
      }
 
      return response()->json(['status' => 'error','code'=>'400', 'message' => 'Cannot deleting data'],400);
    }
}
