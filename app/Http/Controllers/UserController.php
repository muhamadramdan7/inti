<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\item;
use Auth;

class UserController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $user = Auth::user();
        $notif = item::where('stock','<=','5')->count(); 
        $posts = User::all();
        return view('inventory.setting',compact('user','posts','notif'));
    }
    public function setting()
    {
       // $user = Auth::user();
        //return view('setting',compact('user'));
    }
     public function edit(User $user)
    {   
        $user = User::findOrFail($request->id);
        $user->update($request->all());
     

      
        return back();
    }


    public function update(request $request)
  {
      $user = User::findOrFail($request->user);
      if($request->get('name') == null ){
        $roles = $user->getRoleNames();
        if($request->get('role_id') == '1'){
            if($user->hasRole('admin')){
              $user->removeRole('admin');
              $user->assignRole('superadmin');
            }else if ($user->hasRole('user')){
              $user->removeRole('user');
              $user->assignRole('admin');
            }
      }else if($request->get('role_id') == '2'){
        if($user->hasRole('superadmin')){
          $user->removeRole('superadmin');
          $user->assignRole('admin');
        }else if($user->hasRole('admin')){
          $user->removeRole('admin');
          $user->assignRole('user');
        }
      }
      }else{
       $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = bcrypt($request->get('password'));
        $user->save();
   
      }
      
             return back();
    }

    public function roles(request $request)
    {

      dd($request->all());
      
    }
    public function destroy(Request $request)
    {
      $users = User::findOrFail($request->id);
       
        $users->delete();
        return back();
      
        
    }
}
