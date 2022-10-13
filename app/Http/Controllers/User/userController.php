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
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required',
            'password' => 'required',
           
        ]);

        try{
            $user=new UserTable;
         $user->name = $request->name;
         $user->email = $request->email;
         $user->password = $request->pass;
         
         $user->save();
         return response()->json([
            'status' => 'success',
        ]);
        // // echo "ok"
        // return redirect()->route('adduser')->with('success','Data saved successfully');
        }catch(\Exception $e){
            return redirect()->back()->with('status','Data saved successfully');
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
       
        User::where('id',$id)->update([
            'name' => $request->up_name,
            'email' => $request->up_email,
            'password' =>$request->up_pass,
        ]);
        
    // $product = Product::find($request->up_id);
    // dd($product);
    return response()->json([
        'status' => 'success',
    ]);

    }

    //userDelete
    public function delete($id)
    {
        //dd($request);
        $data = UserTable::find($id);
        $data->delete();
        return ["result"=>"Deleted user"];
       // return redirect()->route('user.manage')->with('status','user deleted successfully');
    }
}
