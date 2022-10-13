<?php

namespace App\Http\Controllers\outlet;

use App\Http\Controllers\Controller;
use App\Models\Outlet;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Catch_;


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
            $request->validate([
                'name' => 'required|max:255',
                'phone' => 'required',
                'latitude' => 'required',
                'longitude' => 'required',
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);

            try{
              
             //dd($request->toArray());
            $outlet=new Outlet();
                        
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
            // dd($outlet->image);
                                    
                        }
            $outlet->save();
       
           // return ["resuslt"=>"Data saved successfully"];
                    return redirect('/add-outlet')->with('status', 'Data saved successfully!');
                //  return redirect('/add-outlet')->with('success','Data saved successfully');
    }catch(\Exception $e){
        return redirect()->with('error','Failer to save data');
    }
    

          
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
       //return $id;
       $outlet = Outlet::find($id);
       $outlet->delete();
       return ["result"=>"Deleted"];
   }
   
}
