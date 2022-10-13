<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    //user create
    public function index()
    {

            return view('user.create');

    }

    //store data into user table
    public function store(Request $request)
    {
        
        

        try{
            $request->validate([
            'name' => 'required|max:255',
            'email' => 'required',
            'pass' => 'required',
           
        ]);
          
            $user=new UserTable;
             $user->name = $request->name;
           // dd($user->name );
         $user->email = $request->email;
         $user->password = $request->pass;
         
         $user->save();
         return response()->json([
            'status' => 'success',
        ]);
      
         //return redirect()->route('adduser')->with('success','Data saved successfully');
        }catch(\Exception $e){
            //eturn redirect()->back()->with('status','Data Failed To Load');
        }
        
      
    }

    //Fetch all data from user table
    public function manage()
    {
        $data = UserTable::all();
        //dd($data);
        return view('user.manage',compact('data'));
    }

    //userEdit
    public function edit($id)
    {
        $user = UserTable::find($id);
        //dd($user->toArray());
       return view('user.edit',compact('user'));
    }

    //userUpdate
    public function update(Request $request,$id)
    {
        
        $data = UserTable::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = $request->password;
       
      
         $data->update();
        return ["result"=>"Updated"];
    }

    //userDelete
    public function delete($id)
    {
        //dd($request);
        $data = UserTable::find($id);
        $data->delete();
       // return ["result"=>"Deleted user"];
        return redirect()->route('user.manage')->with('status','user deleted successfully');
    }
}
