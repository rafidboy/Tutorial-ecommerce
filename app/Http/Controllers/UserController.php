<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $req)
    {
        $user = User::where (['email'=>$req->email])->first();
        // return $user->password;
        if (!$user ||!Hash::check($req->password,$user->password))
        {
            return "User nama dan Password tidak ada";
        }
        else{
            $req->session()->put('user',$user);
            return redirect ('/');
        }
    }


}
