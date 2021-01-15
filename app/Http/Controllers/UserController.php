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
        if (!$user ||!Hash::check($req->password,$user->password))
        {
            return "User nama dan Password tidak ada";
        }
        else{
            $req->session()->put('user',$user);
            return redirect ('/');
        }
    }
    function register(Request $req)
    {
        // return $req->input();
        $user = new User;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password =Hash::make($req->password);
        $user->save();

        return redirect('/login');
    }

    function profile(){
        return view('profile');
    }


}
