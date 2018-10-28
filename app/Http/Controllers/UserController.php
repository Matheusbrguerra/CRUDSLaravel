<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class UserController extends Controller
{

    public function profile()
    {
        $user = Auth::user();
        return view('profile.index',compact('user',$user));
    }

    public function update_avatar(Request $request){

        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $user = Auth::user();

        $avatarName = $user->id.'_user'.time().'.'.request()->avatar->getClientOriginalExtension();

        $request->avatar->storeAs('users',$avatarName);

        $user->avatar = $avatarName;
        $user->save();

        return back()
            ->with('success','Foto de perfil atualizada com sucesso!!.');

    }
}
