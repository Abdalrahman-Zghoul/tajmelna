<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $orders = Order::where('user_id',$user->id)->leftJoin('saloons','saloons.id','saloon_id')->select('orders.*','saloons.name as s_name','saloons.phone as s_phone')->get();
        return view('profile',compact('user','orders'));
    }
    
    public function edit()
    {
        $user = Auth::user();
        return view("edit-profile",compact("user"));
    }
    
    public function update(Request $request,User $user)
    {

        $user_valid = Auth::user();
        if($user->email != $user_valid->email){
            return redirect('/');
        }
        if($request->name){
            $user->update([
                'name'=>$request['name']
            ]);
        }
        if($request->password && $request->rpassword){
            if($request->password == $request->rpassword){
                $user->update([
                    'password'=>Hash::make($request->password)
                ]);
                return redirect('updated');
            }
        }
        
        return redirect('profile');
    }

    public function updated()
    {
        return view('confirm.user');
    }
}
