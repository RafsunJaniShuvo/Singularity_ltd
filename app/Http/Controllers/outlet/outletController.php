<?php

namespace App\Http\Controllers\outlet;

use App\Http\Controllers\Controller;
use App\Models\Outlet;
use Illuminate\Http\Request;

class outletController extends Controller
{
    
   //user create
   public function index()
   {
      return view('outlet.create');
   }

   //store data into user table
   public function store(Request $request)
   {
       //dd($request->all());
       $outlet=new Outlet();
       $outlet->name = $request->name;
      //dd($outlet->name);
       $outlet->phone = $request->phone;
       $outlet->latitude = $request->latitude;
       $outlet->longitude = $request->longitude;
       if($request->hasfile('image')){
        $file= $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename =time().'.'.$extension;
        $file->move('upload/outlet/',$filename);
       
        $outlet->image=$filename;
        
    }
       $outlet->save();
       // echo "ok"
       return redirect()->route('addoutlet')->with('success','Data saved successfully');
   }

   //Fetch all data from user table
   public function manage()
   {
       $outlet = Outlet::all();
       //dd($data);
       return view('outlet.manage',compact('outlet'));
   }

   //userEdit
   public function edit($id)
   {
       $outlet = Outlet::find($id);
       //dd($user->toArray());
      return view('outlet.edit',compact('outlet'));
   }

   //userUpdate
   public function update(Request $request,$id)
   {    
        $outlet = Outlet::find($id);
        $outlet->name = $request->name;
        $outlet->phone = $request->phone;
        $outlet->latitude = $request->latitude;
        $outlet->longitude = $request->longitude;
       if($request->hasfile('image')){
        $file= $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename =time().'.'.$extension;
        $file->move('upload/outlet/',$filename);
       
        $outlet->image=$filename;
        
        }
        $outlet->update();
        return redirect()->route('outlet.manage')->with('success','Data saved successfully');


   }

   //userDelete
   public function delete($id)
   {
       $outlet = Outlet::find($id);
       $outlet->delete();
       return redirect()->route('outlet.manage')->with('status','user deleted successfully');
   }
   public function map()
   {
    
   }
}
