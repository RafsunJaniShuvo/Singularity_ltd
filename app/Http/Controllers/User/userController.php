<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
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
   

        $user=new User;
         $user->name = $request->name;
         $user->email = $request->email;
         $user->password = $request->pass;
         
         $user->save();
         return response()->json([
            'status' => 'success',
        ]);
        // // echo "ok"
        // return redirect()->route('adduser')->with('success','Data saved successfully');
      
    }

    //Fetch all data from user table
    public function manage()
    {
        $data = User::all();
        //dd($data);
        return view('user.manage',compact('data'));
    }

    //userEdit
    public function edit($id)
    {
        $user = User::find($id);
        //dd($user->toArray());
       return view('user.edit',compact('user'));
    }

    //userUpdate
    public function update(Request $request)
    {
       
        User::where('id',$request->up_id)->update([
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
        $data = User::find($id);
        $data->delete();
        return ["result"=>"Deleted user"];
       // return redirect()->route('user.manage')->with('status','user deleted successfully');
    }
}
